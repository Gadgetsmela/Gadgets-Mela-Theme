(function () {
  const menu = document.getElementById('primary-menu');
  if (!menu) {
    return;
  }

  menu.querySelectorAll('a').forEach((link) => {
    link.addEventListener('focus', () => link.classList.add('focus'));
    link.addEventListener('blur', () => link.classList.remove('focus'));
  });
})();
