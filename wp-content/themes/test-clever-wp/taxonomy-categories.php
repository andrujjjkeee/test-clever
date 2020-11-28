<?php
get_header();

$typeArr = get_queried_object();
$typeID = $typeArr->term_id;
$typeTitle = $typeArr->name;

?>

<?= $typeTitle ?>

<?php get_footer();
