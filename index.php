<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php
$SomeImage = get_field("some_billede");
?>
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
        <div class="searchbar">
            <div class="searchbarContent">
              <input type="text" placeholder="Søg her.." autocomplete="off">
            </div>
          </div>

        </section>

</section>
<section class="socialsSection">
  <div class="socials">
    <div class="img-wrapper">
    <img src="<?php echo esc_url($SomeImage["url"]) ?>" alt="" class="SocialShape">
    <button class="socialsButton">Find vores sociale medier</button>
    <button class="socialsButton2">FIND VORES FACEBOOK HER</button>
    <h2 class="socialTitle">Tidslernes Sociale<br>Medier</r></h2>
  </div>
  </div>
</section>
<section class="medlemSection">
  <div class="medlem">
    <div class="img-wrapper2">
    <img src="images/medlemShape.svg" alt="" class="SocialShape">
    <h2 class="medlemTitle">Bliv medlem og tag gode ved alle vores fordele</h2>
    <button class="medlemsButton">Læs mere</button>
    <div class="medlemTextBox">
      <ul>
        <li>Flere events</li>
        <li>Støt os</li>
        <li>Nyheder</li>
        <li>Gratis blade m.m</li>
        <li>Medlemskabs bonuser</li>
      </ul>
    </div>
  </div>
  </div>
</section>
<section class="nyhedsBrev">
  <h2 class="nyhedsBrevTitel">
    Tilmeld dig vores nyhedsbrev 
    <img src="images/news.svg" alt="Nyhedsbrev ikon" class="newsletter-icon">
  </h2>
  <form class="newsletter-form">
    <input type="text" placeholder="Email/tlf:" required>
    <input type="text" placeholder="Navn:" required>
    <button type="submit">Meld dig ind nu</button>
  </form>
</section>

<footer>
  <div class="footer-content">
    <div class="footer-column">
      <h3>Kræftforeningen Tidslerne</h3>
      <p class="footer-left-text">
        Danmarks<br>
        patient<br>
        forening
      </p>
    </div>

    <div class="footer-column">
      <h3>v/Formand Mai Nielsen</h3>
      <address>
        Ådalsparken 29,<br>
        6710 Esbjerg V<br>
        CVR 1742 0291<br>
        T: 7020-0515<br>
        E: <a href="mailto:sekretariat@tidslerne.dk">sekretariat@tidslerne.dk</a>
      </address>
    </div>

    <div class="footer-column">
      <h3>Merch kan købers her</h3>
      <img src="images/tshirt.png" alt="Merch billede" class="merch-img">
    </div>
  </div>

  <div class="footer-bottom">
    <p>2025 Kræftforeningen Tidslerne.<br>All rights reserved.</p>
  </div>
</footer>

























<?php endwhile; ?>
<?php endif; ?>