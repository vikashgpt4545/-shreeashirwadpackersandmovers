/**
 * Main Interactive JS Script
 */

document.addEventListener('DOMContentLoaded', () => {
  const navToggle = document.getElementById('mobileNavToggle');
  const navMenu = document.getElementById('navMenu');

  if (navToggle && navMenu) {
    navToggle.addEventListener('click', () => {
      navMenu.classList.toggle('active');
      const isExpanded = navMenu.classList.contains('active');
      navToggle.setAttribute('aria-expanded', isExpanded);
    });
  }
});
