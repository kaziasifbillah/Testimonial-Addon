<?php
function asif_testimonial_box_shortcode($atts, $content = null) {
    extract( shortcode_atts( array(
        'title' => '',
        'position' => '',
        'desc' => '',
        'photo' => '',
    ), $atts) );
    $photo_array = wp_get_attachment_image_src($photo, 'large');
    $asif_testimonial_box_markup = '
    
        <div class="single-testimonial-box">
            <img src="'.$photo_array[0].'" alt="'.$titale.'">
            <h3>'.$title.' <span>'.$position.'</span></h3>
            '.wpautop($desc).'
        </div>
        
    ';
    return $asif_testimonial_box_markup;
}
add_shortcode('asif_testimonial_box', 'asif_testimonial_box_shortcode');
