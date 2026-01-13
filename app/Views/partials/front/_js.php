<?php

declare(strict_types=1);

// Frontend assets are loaded via Vite in the <head> using vite_assets('app').
// Keep this partial for page-specific scripts.

echo $this->renderSection('custom-bottom-js');