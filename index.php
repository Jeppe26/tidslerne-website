<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<section> <?php // Ydre sektion - ÅBNET HER ?>
    <section class="todays_recipe"> <?php // Sektion for "Information" - ÅBNET HER ?>
        
          <h2 class="todays_recipes_headline">Information</h2>

  
        <div class="todays_recipes_content "> <?php // Container for indhold - ÅBNET HER ?>
        <?php
$arguments = array(
  "post_type"=> "Behandling-cards",
  "posts_per_page" => 4, 
);
$loop = new WP_Query($arguments);
?>

<?php if($loop->have_posts()):?>
    <?php while($loop->have_posts()): $loop->the_post()?> 
         
        <?php
        // Dette er stedet, hvor indholdet for HVERT ENKELT "Behandling-card" skal være.
        // F.eks. the_title(), get_field('dit_felt'), etc.
        // Hvis du vil have en container for hvert kort, skal du tilføje den HER:
        // <div class="behandling-card-item">
        //    <h3><?php the_title(); ? ></h3>
        //    < ?php // ... dine ACF felter ... ? >
        // </div>
        ?>
        <?php endwhile?>
        <?php wp_reset_postdata()?>
<?php endif?>

        </div> <?php // LUKKER: todays_recipes_content (Efter at ALLE 4 kort er behandlet) ?>
      </section> <?php // LUKKER: todays_recipe (Efter at todays_recipes_content er lukket) ?>
</section> <?php // LUKKER: den yderste section (Efter at todays_recipe er lukket) ?>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>