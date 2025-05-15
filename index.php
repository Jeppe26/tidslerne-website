<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<?php
  $logoImage = get_field("logo");
?>
<img src="<?php echo esc_url($logoImage["url"]); ?>" alt="logo">
<?php endwhile; ?>
<?php endif; ?>