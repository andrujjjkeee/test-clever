<?php
get_header();

$post = get_post($ID);

$title = get_the_title();
$content = apply_filters('the_content', $post->post_content);

?>



<?php get_footer();
