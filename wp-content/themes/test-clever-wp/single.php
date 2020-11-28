<?php get_header();

$id = get_the_ID();
$title = get_the_title();

$post = get_post($ID);
$content = apply_filters('the_content', $post->post_content);

?>

<?php get_footer(); ?>
