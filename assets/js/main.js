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

  // Dropdown Menu Toggle Handler
  const dropdownToggles = document.querySelectorAll('.nav-item.dropdown > a');
  dropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      e.preventDefault();
      const parentDropdown = toggle.closest('.nav-item.dropdown');
      
      // Close other dropdowns
      document.querySelectorAll('.nav-item.dropdown').forEach(item => {
        if (item !== parentDropdown) {
          item.classList.remove('show');
        }
      });

      // Toggle current dropdown
      parentDropdown.classList.toggle('show');
      const isOpen = parentDropdown.classList.contains('show');
      toggle.setAttribute('aria-expanded', isOpen);
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.nav-item.dropdown')) {
      document.querySelectorAll('.nav-item.dropdown').forEach(item => {
        item.classList.remove('show');
      });
    }
  });
});
