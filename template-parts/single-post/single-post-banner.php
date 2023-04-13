<?php 
    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'banner-image')[0];
?>
<div class="single-post-banner" style="background-image: url('<?php echo $image_url; ?>');">
</div>