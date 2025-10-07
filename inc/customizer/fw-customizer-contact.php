<?php

/**
 * Customizer settings for contact info and social links
 */
function fw_customizer_contact($wp_customize)
{

    $wp_customize->add_section('fw_contact_info_section', array(
        'title' => __( 'Contact & Social Links', 'wasla' ),
        'priority' => 6,
    ));

    // Logo (Image Picker)
    $wp_customize->add_setting('fw_logo');
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'fw_logo_control', array(
        'label'    => __('Site Logo', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_logo',
        'mime_type' => 'image',
    )));

    // Phone Number
    $wp_customize->add_setting('fw_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('fw_phone_control', array(
        'label'    => __('Phone Number', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_phone',
        'type'     => 'tel',
        'input_attrs' => array(
            'placeholder' => __('e.g., +963 999 123 456', 'wasla'),
        ),
    ));

    // Email Address
    $wp_customize->add_setting('fw_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('fw_email_control', array(
        'label'    => __('Email Address', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_email',
        'type'     => 'email',
        'input_attrs' => array(
            'placeholder' => __('e.g., info@yourwebsite.com', 'wasla'),
        ),
    ));
    
    // Facebook
    $wp_customize->add_setting('fw_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fw_facebook_control', array(
        'label'    => __('Facebook URL', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_facebook',
        'type'     => 'url',
    ));
    
    // Instagram
    $wp_customize->add_setting('fw_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fw_instagram_control', array(
        'label'    => __('Instagram URL', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_instagram',
        'type'     => 'url',
    ));
    
    // Twitter
    $wp_customize->add_setting('fw_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fw_twitter_control', array(
        'label'    => __('Twitter URL', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_twitter',
        'type'     => 'url',
    ));
    
    // LinkedIn
    $wp_customize->add_setting('fw_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fw_linkedin_control', array(
        'label'    => __('LinkedIn URL', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_linkedin',
        'type'     => 'url',
    ));
    
    // YouTube
    $wp_customize->add_setting('fw_youtube', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fw_youtube_control', array(
        'label'    => __('YouTube URL', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_youtube',
        'type'     => 'url',
    ));
    
    // TikTok
    $wp_customize->add_setting('fw_tiktok', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fw_tiktok_control', array(
        'label'    => __('TikTok URL', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_tiktok',
        'type'     => 'url',
    ));
    
    // Pinterest
    $wp_customize->add_setting('fw_pinterest', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fw_pinterest_control', array(
        'label'    => __('Pinterest URL', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_pinterest',
        'type'     => 'url',
    ));
    
    // Snapchat
    $wp_customize->add_setting('fw_snapchat', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fw_snapchat_control', array(
        'label'    => __('Snapchat URL', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_snapchat',
        'type'     => 'url',
    ));
    
    // WhatsApp
    $wp_customize->add_setting('fw_whatsapp', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fw_whatsapp_control', array(
        'label'    => __('WhatsApp URL', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_whatsapp',
        'type'     => 'url',
    ));
    
    // Telegram
    $wp_customize->add_setting('fw_telegram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fw_telegram_control', array(
        'label'    => __('Telegram URL', 'wasla'),
        'section'  => 'fw_contact_info_section',
        'settings' => 'fw_telegram',
        'type'     => 'url',
    ));


}