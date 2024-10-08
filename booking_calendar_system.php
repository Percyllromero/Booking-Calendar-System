<?php
/*
Plugin Name: Booking Calendar System
Plugin URI: http://yoursite.com/
Description: A basic booking system with a calendar.
Version: 1.0.0
Author: Percy
Author URI: http://yoursite.com/
*/

// Evitar acceso directo al archivo.
if (!defined('ABSPATH')) {
    exit;
}

// Registrar el shortcode que mostrará el calendario.
function booking_calendar_display() {
    ob_start();
    ?>
    <div id="calendar"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var today = new Date();
            var calendar = document.createElement('table');
            calendar.innerHTML = "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";
            for (var i = 1; i <= 31; i++) {
                var cell = document.createElement('td');
                cell.innerHTML = i;
                if (i === today.getDate()) {
                    cell.style.backgroundColor = 'yellow'; // Resaltar el día actual
                }
                calendar.appendChild(cell);
            }
            document.getElementById('calendar').appendChild(calendar);
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('booking_calendar', 'booking_calendar_display');
