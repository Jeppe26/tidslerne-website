<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tidslerne</title>
        <link rel="stylesheet" href="/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> */ --> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo("name"); ?></title>
        <?php wp_head(); ?>
    </head>

    
 <body>
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>


<?php
  $logoImage = get_field("logo");
  $HeaderImage = get_field("forside_hero_billede");
  $HeaderTitel = get_field("forside_titel");
  $HeaderTekst = get_field("forside_tekst");
  $HeaderBox1Billede = get_field("header_box_1_billede");
  $HeaderBox1Titel = get_field("header_box_1_titel");
  $HeaderBox1Tekst = get_field("header_box_1_tekst");
  $HeaderBox2Titel = get_field("header_box_2_titel");
  $HeaderBox2NewsImage = get_field("header_box_2_news_image");
  $HeaderBox2Tekst = get_field("header_box_2_tekst");
  $HeaderBox2Image = get_field("header_box_2_image");
?>

<header>
    <nav class="navbar">
        <div class="logo-container">
        <img src="<?php echo esc_url($logoImage["url"]); ?>" alt="logo">
        </div>
        <ul class="nav-links">
            <li><a href="#">Tidslerne</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path("behandlings-side")->ID) ?>">Behandlinger</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Medie/historie</a></li>
            <li><a href="#">Om os/kontakt</a></li>
        </ul>
        <div class="hamburger">&#9776;</div>
    </nav>

    </body>
    <div class="headerContainer">
        <div class="headerContainerContent">
            <div class="headerContainerContentLeft">
                <h1><?php echo $HeaderTitel?></h1>
                <h2><?php echo $HeaderTekst?></h2>
                    <a href="#">UDFORSK </a>
            </div>
            <div class="headerContainerContentRight">
                <div class="headerContainerContentRightBoxContainers">
                    <div class="headerContainerContentRightBox1">
                        <div class="headerContainerContentRightBox1Content">
                        <img src="<?php echo esc_url($HeaderBox1Billede["url"]); ?>" alt="header_box_1_billede" class="icon">
                            <h3><?php echo $HeaderBox1Titel?></h3>
                            <p><?php echo $HeaderBox1Tekst?></p>
                        </div>
                    </div>
                    <div class="headerContainerContentRightBox2">
                        <div class="headerContainerContentRightBox2Content">
                        <h3><?php echo $HeaderBox2Titel?></h3>
                        <img src="<?php echo esc_url($HeaderBox2NewsImage["url"]); ?>" alt="header_box_2_news_image" class="icon2" />
                        <p><?php echo $HeaderBox2Tekst?></p>
                        <button><img src="<?php echo esc_url($HeaderBox2Image["url"]); ?>" alt="header_box_2_image"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</header>

</body>
<style>
header {
    background-image: url('<?php echo esc_url($HeaderImage["url"]); ?>');}
</style>

    <?php endwhile; ?>
<?php endif; ?>