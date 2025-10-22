<?php
/**
 * Plugin Name: WP Update Test
 * Plugin URI: https://github.com/LamperDesign/WP-Update-Test
 * Description: Test of automatische GitHub updates werken.
 * Version: 1.1.0
 * Author: Lamper Design
 * GitHub Plugin URI: https://github.com/LamperDesign/WP-Update-Test
 */

// Gewoon iets simpels:
add_action('admin_notices', function() {
    echo '<div class="notice notice-success"><p>WP Update Test plugin is weer actief - versie 1.1.0</p></div>';
});
