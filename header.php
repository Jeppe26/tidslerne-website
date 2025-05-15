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
        Slet hvis det virker... 
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
?>
    <nav class="navbar">
        <div class="logo-container">
        <img src="<?php echo esc_url($logoImage["url"]); ?>" alt="logo">
       

        </div>
        <ul class="nav-links">
            <li><a href="#">Tidslerne</a></li>
            <li><a href="#">Behandlinger</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Medie/historie</a></li>
            <li><a href="#">Om os/kontakt</a></li>
        </ul>
        <div class="hamburger">&#9776;</div>
    </nav>
    </body>

    <?php endwhile; ?>
<?php endif; ?>