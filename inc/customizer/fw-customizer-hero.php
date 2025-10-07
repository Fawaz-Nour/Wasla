<?php
function fw_customizer_hero($wp_customize)
{

    /*
    Slider Secion Start
    Each slider has image, title, subtitle, and link.
    */
    $wp_customize->add_section('hero_slider_section', array(
        'title'       => __('Hero Slider', 'realat'),
        'priority'    => 7,
    ));

    // Loop for images, you can add more here when needed
    for ($i = 1; $i <= 3; $i++) {

        // Slide Image
        $wp_customize->add_setting("slide_image_$i", array(
            'default'     => '',
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "slide_image_$i", array(
            'label'       => __("Slide {$i} Image", 'realat'),
            'section'     => 'hero_slider_section',
            'settings'    => "slide_image_$i",
        )));

        // Slide Title
        $wp_customize->add_setting("slide_title_$i", array(
            'default'     => "Slide {$i} Title",
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control("slide_title_$i", array(
            'label'       => __("Slide {$i} Title", 'realat'),
            'section'     => 'hero_slider_section',
            'type'        => 'text',
        ));

        // Slide Subtitle
        $wp_customize->add_setting("slide_subtitle_$i", array(
            'default'     => "Subtitle for slide {$i}.",
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control("slide_subtitle_$i", array(
            'label'       => __("Slide {$i} Subtitle", 'realat'),
            'section'     => 'hero_slider_section',
            'type'        => 'textarea',
        ));

        // Slide Link URL
        $wp_customize->add_setting("slide_link_$i", array(
            'default'     => '#',
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control("slide_link_$i", array(
            'label'       => __("Slide {$i} Link URL", 'realat'),
            'section'     => 'hero_slider_section',
            'type'        => 'url',
        ));
    }
    /*
    Slider Secion End
    You can add more section here later to control other parts in theme.
    */
}