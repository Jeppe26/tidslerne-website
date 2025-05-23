<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>



<section class="patientHistorier">
    <h2 class="patientHistorieTitel">Patient Historier</h2>
      <?php
$arguments = array(
  "post_type"=> "artikel_cards",
  "posts_per_page" => 3, 
);
$loop = new WP_Query($arguments);
?>

<?php if($loop->have_posts()):?>
  <?php while($loop->have_posts()): $loop->the_post()?> 

  <?php
$ArtikelCardBillede = get_field("artikel_card_billede");
$BehandlingTitel = get_field("behandling_titel");
$BehandlingTekst = get_field("behandling_tekst");
$ArtikelTitel = get_field("artikel_titel");
?>
    <div class="news">
    <img src="<?php echo esc_url($ArtikelCardBillede["url"]) ?>" alt=""> 

    <div class="newsText">
            <h3>News > Articles > About Us</h3>
            <h2>Our missions off-shore</h2>
            <p id="newsP1">For more than 50 years, Greenpeace has been sailing the world’s oceans protecting our planet and fighting for environmental justice.<br><br>
                Have you ever dreamed of sailing on a Greenpeace ship? The ship’s core crew is made up of people from a wide range of backgrounds – ranging from captains, mates, and marine engineers to doctors, cooks and volunteer deckhands. It is hard work. But it could be the experience of a lifetime.</p>
            <!-- https://www.greenpeace.org/international/about/ships/ -->

                <p id="newsP2">20 July 2024 I 105 Views I 5 Comments</p>
            <button>Se mere</button>
        </div>
    </div>
    
    

     <?php endwhile?>
        <?php wp_reset_postdata()?>
        <?php endif?>
    <button class="patientButton">Se mere</button>
</section>

<section class="billedGaleri">
<h2 class="billedTitlel">Billede Galeri</h2>
<div class="billeder">
    <div class="grid-container">
        <div class="item a"></div>
        <div class="item b"></div>
        <div class="item c"></div>
        <div class="item d"></div>
        <div class="item e"></div>
        <div class="item f"></div>
        <div class="item g"></div>
        <div class="item h"></div>
        <div class="item i"></div>
        <div class="item j"></div>
        <div class="item k"></div>
      </div>
      <style>
        .a{
            background-image: url("images/oplægTids.jpg");
            background-image: url("images/oplægTids.jpg");
            background-image: url("images/oplægTids.jpg");
            background-image: url("images/oplægTids.jpg");
            background-image: url("images/oplægTids.jpg");
            background-image: url("images/oplægTids.jpg");
            background-image: url("images/oplægTids.jpg");
            background-image: url("images/oplægTids.jpg");
            background-image: url("images/oplægTids.jpg");
        

        }
      </style>
</div>
<button class="billedButton">Se mere</button>
</section>

<section class="videoGaleri">
    <h2 class="billedTitlel">Video Galeri</h2>
    <div class="videoer">
        <div class="grid-container-video">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
          </div>
    </div>
</section>


<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>