// ====== MAP · Cortinilla de transición entre páginas ======
(function () {
  var curtain = document.getElementById('map-curtain');
  if (!curtain) return;

  var blkL = curtain.querySelector('.curtain-blk-l');
  var blkR = curtain.querySelector('.curtain-blk-r');
  var art  = curtain.querySelector('.curtain-art');
  var circ = curtain.querySelector('.curtain-circle');
  var logo = curtain.querySelector('.curtain-circle img');

  var EASE = 'cubic-bezier(0.7,0,0.3,1)';

  // --- APERTURA: al cargar la página, si venimos de una transición, abrir la cortinilla ---
  function openCurtain() {
    // Arranca tapado
    blkL.style.transition = 'none';
    blkR.style.transition = 'none';
    blkL.style.transform = 'translateX(0)';
    blkR.style.transform = 'translateX(0)';
    circ.style.transition = 'none';
    circ.style.transform = 'translate(-50%,-50%) scale(1)';
    logo.style.transition = 'none';
    logo.style.transform = 'scale(1)';
    art.style.transition = 'none';
    art.style.opacity = '1';
    curtain.classList.add('active');

    // Forzar reflow y luego abrir
    void curtain.offsetWidth;

    setTimeout(function () {
      circ.style.transition = 'transform 0.3s ease';
      circ.style.transform = 'translate(-50%,-50%) scale(0)';
      art.style.transition = 'opacity 0.25s ease';
      art.style.opacity = '0';
      blkL.style.transition = 'transform 0.5s ' + EASE;
      blkR.style.transition = 'transform 0.5s ' + EASE;
      blkL.style.transform = 'translateX(-100%)';
      blkR.style.transform = 'translateX(100%)';
    }, 180);

    setTimeout(function () {
      curtain.classList.remove('active');
    }, 750);
  }

  // --- CIERRE: al hacer clic en un enlace del menú, cerrar y luego navegar ---
  function closeCurtainThenGo(url) {
    curtain.classList.add('active');

    // Reset al estado abierto
    blkL.style.transition = 'none';
    blkR.style.transition = 'none';
    blkL.style.transform = 'translateX(-100%)';
    blkR.style.transform = 'translateX(100%)';
    art.style.transition = 'none';
    art.style.opacity = '0';
    art.style.transform = 'translate(-50%,-50%) rotate(0deg)';
    circ.style.transition = 'none';
    circ.style.transform = 'translate(-50%,-50%) scale(0)';
    logo.style.transition = 'none';
    logo.style.transform = 'scale(0.4)';

    void curtain.offsetWidth;

    // 1. Cerrar bloques
    requestAnimationFrame(function () {
      blkL.style.transition = 'transform 0.4s ' + EASE;
      blkR.style.transition = 'transform 0.4s ' + EASE;
      blkL.style.transform = 'translateX(0)';
      blkR.style.transform = 'translateX(0)';
    });

    // 2. Artefactos + círculo aparecen
    setTimeout(function () {
      art.style.transition = 'opacity 0.3s ease, transform 0.9s linear';
      art.style.opacity = '1';
      art.style.transform = 'translate(-50%,-50%) rotate(90deg)';
      circ.style.transition = 'transform 0.4s cubic-bezier(0.34,1.3,0.64,1)';
      circ.style.transform = 'translate(-50%,-50%) scale(1)';
    }, 410);

    // 3. Zoom in al logo
    setTimeout(function () {
      logo.style.transition = 'transform 0.5s cubic-bezier(0.34,1.2,0.64,1)';
      logo.style.transform = 'scale(1)';
    }, 700);

    // 4. Navegar cuando ya está todo tapado
    setTimeout(function () {
      window.location.href = url;
    }, 1250);
  }

  // --- Interceptar los enlaces marcados con data-curtain ---
  var links = document.querySelectorAll('a[data-curtain]');
  links.forEach(function (link) {
    link.addEventListener('click', function (e) {
      var url = link.getAttribute('href');
      if (!url || url.charAt(0) === '#') return;
      e.preventDefault();
      closeCurtainThenGo(url);
    });
  });

  // --- Al cargar, correr la apertura ---
  // (En esta prueba la apertura corre siempre que se carga la página.)
  window.addEventListener('pageshow', openCurtain);
})();
