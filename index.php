<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<section>
    <section class="cards">
        
          <h2 class="cards_content_headline">Information</h2>

  
        <div class="cards_content">
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
$CardImage = get_field("behandling_image");
$BehandlingTitel = get_field("behandling_titel");
$BehandlingTekst = get_field("behandling_tekst");
$ArtikelTitel = get_field("artikel_titel");
?>
  
  <div class="cards_content_block">
            <div class="cards_content_block_image">
            <img src="<?php echo esc_url($CardImage["url"]) ?>" alt="">
              <div class="colorLayer">

              </div>
            </div>
            <div class="cards_content_block_text">
              <div class="cards_content_block_text_top">
                <h5><?php echo $BehandlingTitel?></h5>
                <p><?php echo $BehandlingTekst?></p>
              </div>
              <div class="cards_content_block_text_bottom">
                <div class="cards_content_block_bottom_area">
                  <div class="cards_content_block_bottom_area_left">
                    <p class="category-color" data-category="seafood"><?php echo $ArtikelTitel?></p>
                    <p>Artikel</p>
                  </div>
                  <div class="cards_content_block_bottom_area_right">
                    <button>
                      <a href="#">LÆS MERE</a>
                    </button>
                  </div>
  
                </div>
              </div>
            </div>
          </div>

          
  
        <?php endwhile?>
        <?php wp_reset_postdata()?>
        <?php endif?>
        </section>



























<?php endwhile; ?>
<?php endif; ?>