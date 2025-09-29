// Main application JavaScript
import '../css/app.css'

// Your main JavaScript code
console.log('Vite + CodeIgniter + Tailwind CSS loaded!')

// Example: Initialize any JavaScript functionality
document.addEventListener('DOMContentLoaded', function() {
    // Add your JavaScript here
    console.log('DOM loaded')
    
    // Example: Mobile menu toggle
    const mobileMenuButton = document.querySelector('[data-mobile-menu-toggle]')
    const mobileMenu = document.querySelector('[data-mobile-menu]')
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden')
        })
    }
})
