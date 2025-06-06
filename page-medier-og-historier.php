<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>



<section class="patientHistorier">
    <h2 class="patientHistorieTitel">Patient Historier</h2>
      <?php
$arguments = array(
  "post_type"=> "artikel-card",
  "posts_per_page" => 3, 
);
$loop = new WP_Query($arguments);
?>

<?php if($loop->have_posts()):?>
  <?php while($loop->have_posts()): $loop->the_post()?> 

  <?php
$ArtikelCardBillede = get_field("artikel_card_billede");
$ArtikelCardGrønTitel = get_field("artikel_card_gron_titel");
$ArtikelCardTitel = get_field("artikel_card_titel");
$ArtikelCardTekst = get_field("artikel_card_tekst");
$ArtikelCardDatoInfo = get_field("artikel_card_dato_info");

?>
    <div class="news">
    <img src="<?php echo esc_url($ArtikelCardBillede["url"]) ?>" alt="<?php echo esc_attr($ArtikelCardBillede["alt"]) ?>"> 

    <div class="newsText">
            <h3><?php echo $ArtikelCardGrønTitel?></h3>
            <h2><?php echo $ArtikelCardTitel?></h2>
            <p id="newsP1"><?php echo $ArtikelCardTekst?></p>

                <p id="newsP2"><?php echo $ArtikelCardDatoInfo?></p>
            <button><a href="">Se mere</a></button>
        </div>
    </div>
    
    

     <?php endwhile?>
        <?php wp_reset_postdata()?>
        <?php endif?>
    <button class="patientButton">Se mere</button>
</section>
<?php
$Billede1 = get_field("billede_1");
$Billede2 = get_field("billede_2");
$Billede3 = get_field("billede_3");
$Billede4 = get_field("billede_4");
$Billede5 = get_field("billede_5");
$Billede6 = get_field("billede_6");
$Billede7 = get_field("billede_7");
$Billede8 = get_field("billede_8");
$Billede9 = get_field("billede_9");
$Billede10 = get_field("billede_10");
$Billede11 = get_field("billede_11");


    ?>
<section class="billedGaleri">
<h2 class="billedTitlel">Billede Galleri</h2>
<div class="billeder">
    <div class="grid-container">
        <div class="item a">
            <img src="<?php echo esc_url($Billede1['url']); ?>" 
       alt="<?php echo esc_attr($Billede1["alt"]) ?>"
       style="position: absolute; width: 1px; height: 1px; opacity: 0;" />
        </div>
        <div class="item b">
             <img src="<?php echo esc_url($Billede2['url']); ?>" 
       alt="<?php echo esc_attr($Billede2["alt"]) ?>"
       style="position: absolute; width: 1px; height: 1px; opacity: 0;" />
        </div>
        <div class="item c"> <img src="<?php echo esc_url($Billede3['url']); ?>" 
       alt="<?php echo esc_attr($Billede3["alt"]) ?>"
       style="position: absolute; width: 1px; height: 1px; opacity: 0;" /></div>
        <div class="item d"> <img src="<?php echo esc_url($Billede4['url']); ?>" 
       alt="<?php echo esc_attr($Billede4["alt"]) ?>"
       style="position: absolute; width: 1px; height: 1px; opacity: 0;" /></div>
        <div class="item e"> <img src="<?php echo esc_url($Billede5['url']); ?>" 
       alt="<?php echo esc_attr($Billede5["alt"]) ?>"
       style="position: absolute; width: 1px; height: 1px; opacity: 0;" /></div>
        <div class="item f"> <img src="<?php echo esc_url($Billede6['url']); ?>" 
       alt="<?php echo esc_attr($Billede6["alt"]) ?>"
       style="position: absolute; width: 1px; height: 1px; opacity: 0;" /></div>
        <div class="item g"> <img src="<?php echo esc_url($Billede7['url']); ?>" 
       alt="<?php echo esc_attr($Billede7["alt"]) ?>"
       style="position: absolute; width: 1px; height: 1px; opacity: 0;" /></div>
        <div class="item h"> <img src="<?php echo esc_url($Billede8['url']); ?>" 
       alt="<?php echo esc_attr($Billede8["alt"]) ?>"
       style="position: absolute; width: 1px; height: 1px; opacity: 0;" /></div>
        <div class="item i"> <img src="<?php echo esc_url($Billede9['url']); ?>" 
       alt="<?php echo esc_attr($Billede9["alt"]) ?>"
       style="position: absolute; width: 1px; height: 1px; opacity: 0;" /></div>
        <div class="item j"> <img src="<?php echo esc_url($Billede10['url']); ?>" 
       alt="<?php echo esc_attr($Billede10["alt"]) ?>"
       style="position: absolute; width: 1px; height: 1px; opacity: 0;" /></div>
        <div class="item k"> <img src="<?php echo esc_url($Billede11['url']); ?>" 
       alt="<?php echo esc_attr($Billede11["alt"]) ?>"
       style="position: absolute; width: 1px; height: 1px; opacity: 0;" /></div>
      </div>

      
      <style>
        .a{background-image: url("<?php echo esc_url($Billede1["url"]) ?>"); }
        .b{background-image: url("<?php echo esc_url($Billede2["url"]) ?>");}
        .c{background-image: url("<?php echo esc_url($Billede3["url"]) ?>");}
        .d{background-image: url("<?php echo esc_url($Billede4["url"]) ?>");}
        .e{background-image: url("<?php echo esc_url($Billede5["url"]) ?>");}
        .f{background-image: url("<?php echo esc_url($Billede6["url"]) ?>");}
        .g{ background-image: url("<?php echo esc_url($Billede7["url"]) ?>");}
        .h{background-image: url("<?php echo esc_url($Billede8["url"]) ?>");}
        .i{background-image: url("<?php echo esc_url($Billede9["url"]) ?>");}
        .j{background-image: url("<?php echo esc_url($Billede10["url"]) ?>");}
        .k{background-image: url("<?php echo esc_url($Billede11["url"]) ?>");}

        
      </style>
</div>
<button class="billedButton">Se mere</button>
</section>
<?php
$Video1 = get_field("video_1");
$Video2 = get_field("video_2");
$Video3 = get_field("video_3");
$Video4 = get_field("video_4");
?>

<section class="videoGaleri">
    <h2 class="billedTitlel">Video Galeri</h2>
    <div class="videoer">
        <div class="grid-container-video">
            <div class="box"><iframe width="100%" height="100%"  src="<?php echo esc_url(get_field('video_1')); ?>" alt="<?php echo esc_attr($Video1["alt"]) ?>"></iframe></div>
            <div class="box"><iframe width="100%" height="100%"  src="<?php echo esc_url(get_field('video_2')); ?>" alt="<?php echo esc_attr($Video2["alt"]) ?>"></iframe></div>
            <div class="box"><iframe width="100%" height="100%"  src="<?php echo esc_url(get_field('video_3')); ?>" alt="<?php echo esc_attr($Video3["alt"]) ?>"></iframe></div>
            <div class="box"><iframe width="100%" height="100%"  src="<?php echo esc_url(get_field('video_4')); ?>" alt="<?php echo esc_attr($Video4["alt"]) ?>"></iframe></div>
          </div>
    </div>
</section>


<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>