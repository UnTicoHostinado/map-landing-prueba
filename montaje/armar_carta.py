#!/usr/bin/env python3
"""Arma el paquete de la carta para WordPress: /wp-content/uploads/2026/carta/
Saca estilos y scripts de la página a archivos aparte y pasa las rutas a rutas del sitio."""
import pathlib, re, shutil, zipfile
M = pathlib.Path('/home/claude/mesa-2027'); C = pathlib.Path('/home/claude/clasica')
OUT = pathlib.Path('/home/claude/montaje/carta'); VER = '20261101b'
BASE = '/wp-content/uploads/2026/carta/'
GH = 'https://unticohostinado.github.io/map-landing-prueba/mesa-2027/'
if OUT.exists(): shutil.rmtree(OUT)
OUT.mkdir(parents=True)

def sitio(s):  # enlaces del prototipo → rutas del propio sitio (sirven igual en staging y en vivo)
    s = s.replace(GH, '/').replace('https://www.mapradiocr.com/', '/').replace('href="https://www.mapradiocr.com"', 'href="/"')
    s = s.replace('(p.link||"").replace(SITIO,"")', '(p.link?new URL(p.link,location.href).pathname.replace(/^\\//,""):"")')
    return s

src = (M / 'mesa.html').read_text()
i0 = src.index('<style>') + 7; i1 = src.index('</style>')
css = src[i0:i1]
cuerpo = src[src.index('<div id="app">'):src.index('<script src="https://cdnjs')]
s1 = src.index('<script>', src.index('three.min.js')) + 8; e1 = src.index('</script>', s1)
s2 = src.index('<script>', e1) + 8; e2 = src.index('</script>', s2)
js1, js2 = src[s1:e1], src[s2:e2]
fuentes = re.search(r'<link rel="stylesheet" href="(https://fonts\.googleapis[^"]+)">', src).group(1)

def rutas_js(j):
    j = sitio(j)
    j = re.sub(r'(["\'`])assets/', r'\1' + BASE + 'assets/', j)
    j = j.replace('"plana.html"', '"' + BASE + 'plana.html"')
    j = j.replace('const CLASICA="clasica/";', 'const CLASICA="' + BASE + 'clasica/";')
    return j
js1, js2 = rutas_js(js1), rutas_js(js2)
assert 'clasica/' in js1 and BASE + 'plana.html' in js1
cuerpo = sitio(cuerpo)
cuerpo = cuerpo.replace('src="assets/', 'src="' + BASE + 'assets/').replace('href="clasica/', 'href="' + BASE + 'clasica/')
assert '="assets/' not in cuerpo

BASICO = ':root{padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}body{margin:0}#app img{max-width:100%}[hidden]{display:none!important}\n'
# Elementor pone variables propias (--display, --gap…) en sus contenedores y la carta las heredaría:
# se repiten las variables de la carta sobre #app para que siempre manden las suyas.
VARS = ''.join(d.strip() + ';' for b in re.findall(r':root\s*\{([^}]*)\}', re.sub(r'/\*.*?\*/', '', css, flags=re.S)) for d in b.split(';') if d.strip().startswith('--'))
assert '--display' in VARS and '--bp-naranja' in VARS
(OUT / 'carta.css').write_text('/* MAP · carta de navegación 2027 · ' + VER + ' */\n' + BASICO + css + '\n/* variables de la carta, a salvo de las de Elementor */\n#app{' + VARS + '}\n')
(OUT / 'carta.js').write_text('/* MAP · carta de navegación 2027 · ' + VER + ' */\n' + js1)
(OUT / 'vuelos.js').write_text('/* MAP · tablero de vuelos · ' + VER + ' */\n' + js2)

# la carta plana y la versión clásica viven como archivos sueltos dentro de la carpeta
(OUT / 'plana.html').write_text(sitio((M / 'plana.html').read_text()))
(OUT / 'clasica').mkdir()
cl = sitio((C / 'index.html').read_text())
cl = re.sub(r'<div class="ar-maqueta">.*?</div>\s*', '', cl, count=1, flags=re.S)  # el aviso de maqueta no va al sitio
assert 'ar-maqueta">' not in cl
# el buscador de la maqueta no tenía formulario: en el sitio busca de verdad (search.php)
viejo = re.search(r'<div class="ar-buscador" id="ar-buscador" hidden>.*?</div>\s*</div>', cl, re.S).group(0)
nuevo = viejo.replace('<div class="ar-buscador__in">', '<form class="ar-buscador__in" role="search" method="get" action="/">', 1)
nuevo = nuevo[:nuevo.rindex('</div>', 0, nuevo.rindex('</div>'))] + '</form>\n</div>'
nuevo = nuevo.replace('<input id="ar-q" type="search"', '<input id="ar-q" name="s" type="search"', 1)
cl = cl.replace(viejo, nuevo)
cl = cl.replace("$('#ar-buscar-cerrar').addEventListener('click',function(){bus.hidden=true});",
                "$('#ar-buscar-cerrar').addEventListener('click',function(){bus.hidden=true});\n  bus.querySelector('form').addEventListener('submit',function(e){if(!$('#ar-q').value.trim())e.preventDefault()});", 1)
assert 'name="s"' in cl and '</form>' in cl and "bus.querySelector('form')" in cl
(OUT / 'clasica' / 'index.html').write_text(cl)
shutil.copy(C / 'carta-vista.jpg', OUT / 'clasica' / 'carta-vista.jpg')

# recursos: solo lo que la carta usa
FUERA = re.compile(r'(carta/san-jose-|carta/relieve\.png$|senales/letra-01|^datos/|collage/(bote|esteban-cano|gradas|luchadores|manos|podcast-mural|retrato|tienda)\.jpg$)')
n = 0
for f in sorted((M / 'assets').rglob('*')):
    if f.is_dir(): continue
    rel = f.relative_to(M / 'assets').as_posix()
    if FUERA.search(rel): continue
    d = OUT / 'assets' / rel; d.parent.mkdir(parents=True, exist_ok=True); shutil.copy(f, d); n += 1

# el widget HTML de la portada en Elementor (Canvas)
widget = (f'<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>\n'
          f'<link rel="stylesheet" href="{fuentes}">\n'
          f'<link rel="stylesheet" href="{BASE}carta.css?v={VER}">\n'
          + cuerpo.strip() + '\n'
          f'<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" defer></script>\n'
          f'<script src="{BASE}carta.js?v={VER}" defer></script>\n'
          f'<script src="{BASE}vuelos.js?v={VER}" defer></script>\n')
pathlib.Path('/home/claude/montaje/portada-widget.html').write_text(widget)

z = pathlib.Path('/home/claude/montaje/carta-2027.zip')
if z.exists(): z.unlink()
with zipfile.ZipFile(z, 'w', zipfile.ZIP_DEFLATED) as zf:
    for f in sorted(OUT.rglob('*')):
        if f.is_file(): zf.write(f, 'carta/' + f.relative_to(OUT).as_posix())
print('archivos de recursos:', n, '| zip:', z.stat().st_size // 1024, 'KB | widget:', len(widget) // 1024, 'KB')
