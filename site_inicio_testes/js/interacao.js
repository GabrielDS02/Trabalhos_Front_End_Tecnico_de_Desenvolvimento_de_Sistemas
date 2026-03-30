/* ============================
   SCROLL SUAVE GLOBAL
============================ */

document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', e => {
    const targetId = link.getAttribute('href');
    if (targetId.length > 1) {
      const target = document.querySelector(targetId);
      if (!target) return;

      e.preventDefault();

      const headerOffset = document.querySelector('.header')?.offsetHeight || 0;
      const elementPosition = target.getBoundingClientRect().top;
      const offsetPosition = elementPosition + window.pageYOffset - headerOffset + 5;

      window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
      });

      closeMobileMenu();
    }
  });
});
