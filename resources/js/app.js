const sidebar = document.querySelector('#sidebar');
document.querySelector('[data-menu-toggle]')?.addEventListener('click', () => sidebar?.classList.toggle('open'));
document.querySelectorAll('.nav-link').forEach((link) => link.addEventListener('click', () => sidebar?.classList.remove('open')));
document.querySelector('.notice button')?.addEventListener('click', (event) => event.currentTarget.closest('.notice').remove());
