<?php
/**
 * Plugin Name: WP Update Test
 * Plugin URI: https://github.com/LamperDesign/WP-Update-Test
 * Description: Test of automatische GitHub updates werken.
 * Version: 1.0.0
 * Author: Jij
 * GitHub Plugin URI: https://github.com/LamperDesign/WP-Update-Test
 */

// Gewoon iets simpels:
add_action('admin_notices', function() {
    echo '<div class="notice notice-success"><p>WP Update Test plugin is actief - versie 1.0.0</p></div>';
});
