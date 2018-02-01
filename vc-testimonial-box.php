<?php

vc_map( array(
      "name" => __( "Asif Testimonial box", "my-text-domain" ),
      "base" => "asif_testimonial_box",
      "category" => __( "Asif", "my-text-domain"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "Title", "my-text-domain" ),
            "param_name" => "title",            
            "description" => __( "", "stock_aminulhchy" )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Position / Location", "my-text-domain" ),
            "param_name" => "position",            
            "description" => __( "", "my-text-domain" )
         ),
         array(
            "type" => "attach_image",
            "heading" => __( "Photo", "my-text-domain" ),
            "param_name" => "photo",            
            "description" => __( "", "my-text-domain" )
         ),
         array(
            "type" => "textarea",
            "heading" => __( "Testimonial", "my-text-domain" ),
            "param_name" => "desc",            
            "description" => __( "", "my-text-domain" )
         ),
      )
   ) );
