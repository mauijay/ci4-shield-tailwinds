'use strict';

// Application initialization
document.addEventListener('DOMContentLoaded', function() {
    // Your application logic here
    const userName = 'My name is Mudd';
    console.log(userName);
    console.log('Hello Mudd');
    
    // Initialize your app components
    initializeApp();
});

/**
 * Initialize the application
 */
function initializeApp() {
    // Add your app initialization logic here
    console.log('App initialized successfully');
    
    // Example: Initialize any UI components, event listeners, etc.
    setupEventListeners();
    initializeComponents();
}

/**
 * Setup global event listeners
 */
function setupEventListeners() {
    // Example: Handle navigation, forms, etc.
    
    // Handle mobile menu toggle (if using DaisyUI)
    const menuToggle = document.querySelector('[data-menu-toggle]');
    if (menuToggle) {
        menuToggle.addEventListener('click', toggleMobileMenu);
    }
    
    // Handle theme switching (if using DaisyUI themes)
    const themeToggle = document.querySelector('[data-theme-toggle]');
    if (themeToggle) {
        themeToggle.addEventListener('click', toggleTheme);
    }
}

/**
 * Initialize UI components
 */
function initializeComponents() {
    // Initialize any third-party libraries or custom components
    console.log('Components initialized');
}

/**
 * Toggle mobile menu
 */
function toggleMobileMenu() {
    const menu = document.querySelector('.mobile-menu');
    if (menu) {
        menu.classList.toggle('hidden');
    }
}

/**
 * Toggle between light and dark themes
 */
function toggleTheme() {
    const html = document.documentElement;
    const currentTheme = html.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'nord' : 'dark';
    
    html.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
}

// Utility functions
const App = {
    /**
     * Show notification
     */
    showNotification(message, type = 'info') {
        console.log(`${type.toUpperCase()}: ${message}`);
        // Add your notification logic here
    },
    
    /**
     * Handle AJAX requests
     */
    async makeRequest(url, options = {}) {
        try {
            const response = await fetch(url, {
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                ...options
            });
            
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            
            return await response.json();
        } catch (error) {
            console.error('Request failed:', error);
            throw error;
        }
    }
};

// Make App globally available
window.App = App;
