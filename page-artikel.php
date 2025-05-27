<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php
$NyesteArtikel = get_field("nyeste_artikel_titel");
$Konventionel = get_field("konventionel_undertitel");
$ArtikelTitelBillede = get_field("artikel_titel_billede");
$ArtikelGrønTitel = get_field("artikel_gron_titel");
$ArtikelTitel = get_field("artikel_titel");
$ArtikelTekst = get_field("artikel_tekst");

?>

<section class="articles">
<h2 class="articlesTitle"><?php echo $NyesteArtikel?></h2>
<h3 class="articlesSubTitle"><?php echo $Konventionel?></h3>
<div class="mainArticle">
    <div class="newsMain">
    <img src="<?php echo esc_url($ArtikelTitelBillede["url"]) ?>" alt="<?php echo esc_attr($ArtikelTitelBillede["alt"]) ?>">
        <div class="newsMainText">
            <h3><?php echo $ArtikelGrønTitel?></h3>
            <h2><?php echo $ArtikelTitel?></h2>
            <p><?php echo $ArtikelTekst?></p>
            <button>Se mere</button>
        </div>
    </div>
</div>

<div class="searchArticle">
<div class="searchbarArticle">
    <div class="searchbarArticleContent">
      <input type="text" placeholder="Søg her.." autocomplete="off">
    </div>
  </div>
  <button class="buttonArticle"><img src="images/filterIcon.svg" alt=""></button>
</div>

  <div class="articleList">
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
            <p><?php echo $ArtikelCardTekst?></p>
            <button><a href="https://tidslerne.nemtilmeld.dk/">Se mere</a></button>
            
        </div>
    </div>
  </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?> 

</section>


<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>