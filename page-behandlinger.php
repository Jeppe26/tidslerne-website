<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php 
$BehandlingMidtTitel = get_field("behandling_midt_titel");
$BehandlingMidtTekst = get_field("behandling_midt_tekstfelt");
?>

<section class="behandlinger">
<div class="behandlingerText">
    <h2><?php echo $BehandlingMidtTitel?></h2>
    <p><?php echo $BehandlingMidtTekst?></p>
</div>
<div class="behandlingsKategorier">

<?php
$arguments = array(
  "post_type"=> "behandling-card",
  "posts_per_page" => 5, 
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
  
 <div class="behandlingsKat">
        <div class="behandlingsKatLeft">
        <img src="<?php echo esc_url($CardImage["url"]) ?>" alt="<?php echo esc_attr($CardImage["alt"]) ?>">
        </div>
        <div class="behandlingsKatRight">
            <div class="scrollProgress">
                <div class="scrollProgresContent">

                </div>
            </div>
            <h3 class="behandlingTitler"><?php echo $BehandlingTitel?></h3>
            <p><?php echo $BehandlingTekst?></p>
            <button><a href="<?php echo get_permalink(get_page_by_path("artikel")->ID) ?>">LÆS MERE</a></button>
        </div>
    </div>       
  
        <?php endwhile?>
        <?php wp_reset_postdata()?>
        <?php endif?>
     
</div>
</section>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>