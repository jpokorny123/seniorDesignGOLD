 <?php
 if (is_singular()) {
    $layout = get_post_meta($post->ID, '_layout', true);
}
$layout = !empty($layout) ? $layout : 'full';
global $mk_options, $post;

$height = $view_params['height'];

if($view_params['style'] == 'grid') {
    
    

    switch ($view_params['column']) {
        case 1:
            if ($layout == 'full') {
                $width = $mk_options['grid_width'] - 40;
            } else {
                $width = round(($mk_options['content_width'] / 100) * $mk_options['grid_width']) - 40;
            }
            break;
        case 2:
            if ($layout == 'full') {
                $width = round($mk_options['grid_width'] / 2) - 36;
            } else {
                $width = round((($mk_options['content_width'] / 100) * $mk_options['grid_width']) / 2) - 36;
            }   
            break;
        case 3:
            if ($layout == 'full') {
                $width = round($mk_options['grid_width'] / 3) - 30;
            } else {
                $width = round((($mk_options['content_width'] / 100) * $mk_options['grid_width']) / 3) - 29;
            }
            break;
        case 4:
            if ($layout == 'full') {
                $width = round($mk_options['grid_width'] / 4) - 26;
            } else {
                $width = round((($mk_options['content_width'] / 100) * $mk_options['grid_width']) / 4) - 26;
            }
            break;
        case 5:
            if ($layout == 'full') {
                $width = round($mk_options['grid_width'] / 5) - 24;
            } else {
                $width = round((($mk_options['content_width'] / 100) * $mk_options['grid_width']) / 5) - 24;
            }
            break;
        case 6:
            if ($layout == 'full') {
                $width = round($mk_options['grid_width'] / 6) - 24;
            } else {
                $width = round((($mk_options['content_width'] / 100) * $mk_options['grid_width']) / 6) - 24;
            }
            break;
        case 7:
            if ($layout == 'full') {
                $width = round($mk_options['grid_width'] / 7) - 22;
            } else {
                $width = round((($mk_options['content_width'] / 100) * $mk_options['grid_width']) / 7) - 22;
            }
            break;
        case 8:
            if ($layout == 'full') {
                $width = round($mk_options['grid_width'] / 8) - 14;
            } else {
                $width = round((($mk_options['content_width'] / 100) * $mk_options['grid_width']) / 8) - 13;
            }
            break;
    }
} else {

    $width = 600;
    $height = 600;

}

if ($view_params['image_size'] == 'crop') {
    $image_width = $width;
    $image_height = $height;

    $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id() , 'full', true);
    $image_output_src = mk_image_generator($image_src_array[0], $image_width, $image_height, 'true');
    
} 
else {
    $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id() , $view_params['image_size'], true);
    $image_output_src = $image_src_array[0];
    $image_width = $image_src_array[1];
    $image_height = $image_src_array[2];
}

?>

 <span class="gallery-inner">
    <img alt="<?php echo esc_attr(get_post_meta($post->ID, '_wp_attachment_image_alt', true)); ?>" height="<?php echo $height; ?>" width="<?php echo $image_width; ?>" title="<?php echo the_title_attribute(); ?>" data-image-size="<?php echo $view_params['image_size']; ?>" src="<?php echo $image_output_src; ?>" />
 </span>


