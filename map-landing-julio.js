// ====== MAP · Landing Julio — efecto láser + carga de textos (API) ======
// El scroll del menú (transición al header global) se maneja en la Capa 2.
(function () {

  // ---------- API DE TEXTOS (Recientes / Lo más leído) ----------
  var API_BASE = 'https://www.mapradiocr.com/wp-json/wp/v2';
  var API_POP  = 'https://www.mapradiocr.com/wp-json/map/v1/populares';

  function formatTime(dateStr) {
    var d = new Date(dateStr);
    var h = String(d.getHours()).padStart(2, '0');
    var m = String(d.getMinutes()).padStart(2, '0');
    var day = String(d.getDate()).padStart(2, '0');
    var months = ['ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dic'];
    return day + ' ' + months[d.getMonth()] + ' · ' + h + ':' + m;
  }

  function stripHtml(html) {
    var t = document.createElement('div');
    t.innerHTML = html;
    return t.textContent || t.innerText || '';
  }

  function loadRecientes() {
    var cont = document.getElementById('recientes-list');
    if (!cont) return;
    fetch(API_BASE + '/posts?per_page=5&orderby=date&order=desc&_embed')
      .then(function (r) { return r.json(); })
      .then(function (posts) {
        cont.innerHTML = posts.map(function (post) {
          var title = stripHtml(post.title.rendered);
          var excerpt = stripHtml(post.excerpt.rendered).substring(0, 100) + '…';
          var cat = (post._embedded && post._embedded['wp:term'] && post._embedded['wp:term'][0] && post._embedded['wp:term'][0][0] && post._embedded['wp:term'][0][0].name) || 'MAP';
          var time = formatTime(post.date);
          return '<a href="' + post.link + '" target="_blank" class="txt-item">' +
            '<div class="txt-item-meta"><span class="txt-item-cat">' + cat + '</span>' +
            '<span class="txt-item-time">' + time + '</span></div>' +
            '<div class="txt-item-title">' + title + '</div>' +
            '<div class="txt-item-desc">' + excerpt + '</div></a>';
        }).join('');
      })
      .catch(function () {
        cont.innerHTML = '<div class="txt-loading">No disponible</div>';
      });
  }

  function loadPopulares() {
    var cont = document.getElementById('populares-list');
    if (!cont) return;
    fetch(API_POP)
      .then(function (r) { return r.json(); })
      .then(function (posts) {
        if (Array.isArray(posts) && posts.length) {
          cont.innerHTML = posts.map(function (post) {
            var cat = (Array.isArray(post.categories) && post.categories.length) ? post.categories[0] : 'MAP';
            var excerpt = post.excerpt ? post.excerpt.substring(0, 100) + '…' : '';
            return '<a href="' + post.link + '" target="_blank" class="txt-item">' +
              '<div class="txt-item-meta"><span class="txt-item-cat">' + cat + '</span></div>' +
              '<div class="txt-item-title">' + post.title + '</div>' +
              '<div class="txt-item-desc">' + excerpt + '</div></a>';
          }).join('');
        } else {
          cont.innerHTML = '<div class="txt-loading">Sin datos</div>';
        }
      })
      .catch(function () {
        cont.innerHTML = '<div class="txt-loading">No disponible</div>';
      });
  }

  // ---------- EFECTO LÁSER del botón "Ver la serie" ----------
  function initLaser() {
    var btn = document.getElementById('mapjulLaserBtn');
    var textEl = document.getElementById('mapjulLaserText');
    if (!btn || !textEl) return;

    var full = textEl.textContent;
    textEl.innerHTML = '';
    var spans = [];
    for (var i = 0; i < full.length; i++) {
      var s = document.createElement('span');
      s.className = 'ch';
      s.textContent = full[i];
      if (full[i] === ' ') s.innerHTML = '&nbsp;';
      textEl.appendChild(s);
      spans.push(s);
    }

    setTimeout(function () { btn.classList.add('go'); btn.classList.add('draw'); }, 1900);
    setTimeout(function () { btn.classList.add('fill'); }, 2550);
    setTimeout(function () {
      spans.forEach(function (s, idx) {
        setTimeout(function () { s.classList.add('lit'); }, idx * 45);
      });
    }, 2900);
  }

  // ---------- MENÚ STICKY: aparece al pasar el banner del video ----------
  function initSticky() {
    var sticky = document.getElementById('mapjulSticky');
    var banner = document.getElementById('mapjul-top');
    if (!sticky || !banner) return;

    function onScroll() {
      var limite = banner.offsetHeight - 80;
      if (window.scrollY > limite) {
        sticky.classList.add('visible');
      } else {
        sticky.classList.remove('visible');
      }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  function init() {
    loadRecientes();
    loadPopulares();
    initLaser();
    initSticky();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
