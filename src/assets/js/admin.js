// Admin panel JavaScript
import '../css/admin.css';

console.log('Admin panel loaded!');

document.addEventListener('DOMContentLoaded', function () {
  // Admin-specific JavaScript
  console.log('Admin DOM loaded');

  // Example: Dashboard functionality
  const adminToggle = document.querySelector('[data-admin-toggle]');
  if (adminToggle) {
    adminToggle.addEventListener('click', function () {
      // Admin toggle functionality
    });
  }
});
