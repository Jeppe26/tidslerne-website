<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Kræftforeningen Tidslerne er en forening for tidligere og nuværende kræft ramte patienter 
    samt deres pårørende og i øvrigt enhver, der ønsker at støtte fællesskabet"
    >
    <meta name="author" content="Benjamin Steckmetz, Anders Jørgensen, Jeppe Westergaard">
    <meta name="robots" content="index, follow">
    <!--FACEBOOK(meta)-->
    <meta property="og:title" content="KræftForeningen Tidslerne">
    <meta property="og:description" 
    content="Kræftforeningen Tidslerne støtter kræftramte og pårørende med fællesskab, rådgivning, behandling og håb. Vores dør står åben. Du er ikke alene">

    <meta property="og:image" content="<?php echo esc_url($logoImage["url"]); ?>">
    <meta property="og:url" content="http://tidslerne.jeppewestergaard.dk/">
    <!--tWITTER-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="KræftForeningen Tidslerne">
    <meta name="twitter:description" 
    content="Kræftforeningen Tidslerne støtter kræftramte og pårørende med fællesskab, rådgivning, behandling og håb. Vores dør står åben. Du er ikke alene">

    <meta name="twitter:image" content="<?php echo esc_url($logoImage["url"]); ?>">
    <meta name="google-site-verification" content="wGobuLv3lLfWEThGrDh12OOBFQ8OWAw5casnk8qYf-0" />

    <link rel="apple-touch-icon" href="<?php echo esc_url($logoImage["url"]); ?>">

        
        <title>Kræftforeningen Tidslerne: Fællesskab og kamp mod kræft</title>
        <link rel="icon" href="<?php echo esc_url($logoImage["url"]); ?>" type="image/png">

        <link rel="stylesheet" href="/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
        <title><?php bloginfo("name"); ?></title>
        <?php wp_head(); ?>
    </head>

    
 <body <?php body_class() ?>>
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>


<?php
$frontpageId = get_option('page_on_front');

  $logoImage = get_field("logo" , $frontpageId);
  $HeaderImage = get_field("forside_hero_billede", $frontpageId);
  $HeaderTitel = get_field("forside_titel", $frontpageId);
  $HeaderTekst = get_field("forside_tekst", $frontpageId);
  $HeaderBox1Billede = get_field("header_box_1_billede", $frontpageId);
  $HeaderBox1Titel = get_field("header_box_1_titel", $frontpageId);
  $HeaderBox1Tekst = get_field("header_box_1_tekst", $frontpageId);
  $HeaderBox2Titel = get_field("header_box_2_titel", $frontpageId);
  $HeaderBox2NewsImage = get_field("header_box_2_news_image", $frontpageId);
  $HeaderBox2Tekst = get_field("header_box_2_tekst", $frontpageId);
  $HeaderBox2Image = get_field("header_box_2_image", $frontpageId);
?>

<header>
    <nav class="navbar">
        <div class="logo-container">
        <img src="<?php echo esc_url($logoImage["url"]); ?>" alt="<?php echo esc_attr($logoImage["alt"]) ?>">
        </div>
        <ul class="nav-links">
            <li><a href="<?php echo home_url(); ?>">Tidslerne</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path("behandlinger")->ID) ?>">Behandlinger</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path("event-side")->ID) ?>">Events</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path("medier-og-historier")->ID) ?>">Medie/historie</a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path("om-os-kontakt")->ID) ?>">Om os/kontakt</a></li>
        </ul>
        <div class="hamburger">&#9776;</div>
    </nav>

    </body>
    <div class="headerContainer">
        <div class="headerContainerContent">
            <div class="headerContainerContentLeft">
                <h1><?php echo $HeaderTitel?> <span class="visually-hidden">Tidslerne - om os: kræft, behandling, fællesskab</span></h1>
                <h2><?php echo $HeaderTekst?></h2>
                    <a href="#">UDFORSK </a>
            </div>
            <div class="headerContainerContentRight">
                <div class="headerContainerContentRightBoxContainers">
                    <div class="headerContainerContentRightBox1">
                        <div class="headerContainerContentRightBox1Content">
                        <img src="<?php echo esc_url($HeaderBox1Billede["url"]); ?>" alt="<?php echo esc_attr($HeaderBox1Billede["alt"]) ?>" class="icon">
                            <h3><?php echo $HeaderBox1Titel?></h3>
                            <p><?php echo $HeaderBox1Tekst?></p>
                        </div>
                    </div>
                    <div class="spacer"></div>
                    <div class="headerContainerContentRightBox2">
                        <div class="headerContainerContentRightBox2Content">
                        <h3><?php echo $HeaderBox2Titel?></h3>
                        <img src="<?php echo esc_url($HeaderBox2NewsImage["url"]); ?>" alt="<?php echo esc_attr($HeaderBox2NewsImage["alt"]) ?>" class="icon2" />
                        <p><?php echo $HeaderBox2Tekst?></p>
                        <button><img src="<?php echo esc_url($HeaderBox2Image["url"]); ?>" alt="<?php echo esc_attr($HeaderBox2Image["alt"]) ?>"></button>
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