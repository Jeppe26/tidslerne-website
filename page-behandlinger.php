<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
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
            <img src="images/piller.jpg" alt="">
        </div>
        <div class="behandlingsKatRight">
            <div class="scrollProgress">
                <div class="scrollProgresContent">

                </div>
            </div>
            <h3>Konventionel</h3>
            <p>Forskning og flere studier viser at konventionel medicin oprindeligt brugt til andre lidelser kan hjælpe med at sulte kræft og i sidste ende slå kræftceller ihjel.</p>
            <button>LÆS MERE</button>
        </div>
    </div>

          
  
        <?php endwhile?>
        <?php wp_reset_postdata()?>
        <?php endif?>


<section class="behandlinger">
<div class="behandlingerText">
    <h2>Behandlinger</h2>
    <p>Kræftforeningen Tidslerne er en forening for tidligere og nuværende kræftpatienter samt deres pårørende og i øvrigt enhver, der ønsker at støtte.</p>
</div>
<div class="behandlingsKategorier">
    <div class="behandlingsKat">
        <div class="behandlingsKatLeft">
            <img src="images/piller.jpg" alt="">
        </div>
        <div class="behandlingsKatRight">
            <div class="scrollProgress">
                <div class="scrollProgresContent">

                </div>
            </div>
            <h3>Konventionel</h3>
            <p>Forskning og flere studier viser at konventionel medicin oprindeligt brugt til andre lidelser kan hjælpe med at sulte kræft og i sidste ende slå kræftceller ihjel.</p>
            <button>LÆS MERE</button>
        </div>
    </div>


    <div class="behandlingsKat">
        <div class="behandlingsKatLeft">
            <img src="images/frisør.jpg" alt="">
        </div>
        <div class="behandlingsKatRight">
            <div class="scrollProgress">
                <div class="scrollProgresContent">

                </div>
            </div>
            <h3>Komplimentær</h3>
            <p>Forskning og flere studier viser at konventionel medicin oprindeligt brugt til andre lidelser kan hjælpe med at sulte kræft og i sidste ende slå kræftceller ihjel.</p>
            <button>LÆS MERE</button>
        </div>
    </div>


    <div class="behandlingsKat">
        <div class="behandlingsKatLeft">
            <img src="images/cannabis.jpg" alt="">
        </div>
        <div class="behandlingsKatRight">
            <div class="scrollProgress">
                <div class="scrollProgresContent">

                </div>
            </div>
            <h3>Cannabis</h3>
            <p>Forskning og flere studier viser at konventionel medicin oprindeligt brugt til andre lidelser kan hjælpe med at sulte kræft og i sidste ende slå kræftceller ihjel.</p>
            <button>LÆS MERE</button>
        </div>
    </div>


    <div class="behandlingsKat">
        <div class="behandlingsKatLeft">
            <img src="images/hvorDørRebet.jpg" alt="">
        </div>
        <div class="behandlingsKatRight">
            <div class="scrollProgress">
                <div class="scrollProgresContent">

                </div>
            </div>
            <h3>Behandling i udlandet</h3>
            <p>Forskning og flere studier viser at konventionel medicin oprindeligt brugt til andre lidelser kan hjælpe med at sulte kræft og i sidste ende slå kræftceller ihjel.</p>
            <button>LÆS MERE</button>
        </div>
    </div>


    <div class="behandlingsKat">
        <div class="behandlingsKatLeft">
            <img src="images/aura.jpg" alt="">
        </div>
        <div class="behandlingsKatRight">
            <div class="scrollProgress">
                <div class="scrollProgresContent">

                </div>
            </div>
            <h3>Følge og senskader</h3>
            <p>Forskning og flere studier viser at konventionel medicin oprindeligt brugt til andre lidelser kan hjælpe med at sulte kræft og i sidste ende slå kræftceller ihjel.</p>
            <button>LÆS MERE</button>
        </div>
    </div>
</div>
</section>






















<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>