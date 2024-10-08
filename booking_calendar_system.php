<?php
/*
Plugin Name: Booking Calendar System
Plugin URI: http://yoursite.com/
Description: A basic booking system with a calendar.
Version: 1.0
Author: Your Name
Author URI: http://yoursite.com/
*/

// Evitar acceso directo al archivo.
if (!defined('ABSPATH')) {
    exit;
}

// Código para inicializar el plugin.
function booking_calendar_system_init() {
    // Aquí irá el código para mostrar el calendario y gestionar las reservas.
}
add_action('init', 'booking_calendar_system_init');
