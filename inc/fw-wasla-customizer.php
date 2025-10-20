<?php
require_once get_template_directory() . '/inc/customizer/fw-customizer-contact.php';
require_once get_template_directory() . '/inc/customizer/fw-customizer-hero.php';
require_once get_template_directory() . '/inc/customizer/fw-whatsapp-button.php';

function wasla_customize_register($wp_customize)
{
    fw_customizer_contact($wp_customize);
    fw_customizer_hero($wp_customize);
    fw_customizer_floating($wp_customize);
}

add_action('customize_register', 'wasla_customize_register');
