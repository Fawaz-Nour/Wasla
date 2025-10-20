<?php

/**
 * Customizer settings for Floating WhatsApp button
 */
function fw_customizer_floating($wp_customize)
{

    $wp_customize->add_section('fw_floating_whatsapp_section', array(
        'title' => __( 'Floating WhatsApp button', 'wasla' ),
        'priority' => 8,
    ));
    
    // WhatsApp
    $wp_customize->add_setting('fw_floating_whatsapp', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fw_whatsapp_control', array(
        'label'    => __('WhatsApp URL', 'wasla'),
        'section'  => 'fw_floating_whatsapp_section',
        'settings' => 'fw_floating_whatsapp',
        'type'     => 'url',
    ));

}