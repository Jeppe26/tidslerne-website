<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<section>
    <section class="todays_recipe">
        
          <h2 class="todays_recipes_headline">Information</h2>

  
        <div class="todays_recipes_content ">
        <?php
$arguments = array(
  "post_type"=> "Behandling-cards",
  "posts_per_page" => 4, 
);
$loop = new WP_Query($arguments);
?>

<?php if($loop->have_posts()):?>
  <?php while($loop->have_posts()): $loop->the_post()?> 
          </div>
          <?php endif; ?>
          
        </div>
      </section>
      </section>



























<?php endwhile; ?>