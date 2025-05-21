<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<section>
    <section class="todays_recipe">
        
          <h2 class="todays_recipes_headline">Information</h2>

  
        <div class="todays_recipes_content ">
        <?php
$arguments = array(
  "post_type"=> "behandling-card",
  "posts_per_page" => 4, 
);
$loop = new WP_Query($arguments);
?>

<?php if($loop->have_posts()):?>
  <?php while($loop->have_posts()): $loop->the_post()?> 
  
  
            <?php
            $todaysRecipeImage = get_field("behandling_image");
            ?>

            <img src="<?php echo esc_url($todaysRecipeImage["url"]) ?>" alt="">
          
  
        <?php endwhile?>
        <?php wp_reset_postdata()?>
        <?php endif?>
        </section>



























<?php endwhile; ?>
<?php endif; ?>