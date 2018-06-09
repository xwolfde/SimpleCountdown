<?php
namespace SimpleCountdown;

add_shortcode('SimpleCountdown', 'SimpleCountdown\shortcode_countdown'); 

function shortcode_countdown( $atts ) { 
    global $post;
        
    $params = shortcode_atts( array(
        'date'  => '',
        'time'  => '',
       
    ), $atts );
    
    $todate = $params['date'];
    $totime = $params['time'];   
  
    if(!empty($todate) && (empty($totime)) ) {      
        wp_enqueue_script( 'SimpleCountdown-JS' );
        wp_enqueue_style( 'SimpleCountdown-CSS' );
        
        
        echo "BUUUU";
    } 
}
