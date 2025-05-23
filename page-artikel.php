<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php
$NyesteArtikel = get_field("nyeste_artikel_titel");
$Konventionel = get_field("konventionel_undertitel");

?>

<section class="articles">
<h2 class="articlesTitle"><?php echo $NyesteArtikel?></h2>
<h3 class="articlesSubTitle"><?php echo $Konventionel?></h3>
<div class="mainArticle">
    <div class="newsMain">
        <img src="images/oplægTids.jpg" alt="A large green ship with RAINBOW WARRIOR written on the side and a colorful rainbow stripe painted across its hull. The word GREENPEACE is displayed in white letters. The ship is moving through the ocean, with its white sails fully unfolded. The sky is partly cloudy. Waves are splash against the ship, creating a sense of motion and speed. The ship belongs to Greenpeace, an environmental organization known for its activism.">
        <div class="newsMainText">
            <h3>News > Articles > About Us</h3>
            <h2>Our missions off-shore</h2>
            <p id="newsMainP1">For more than 50 years, Greenpeace has been sailing the world’s oceans protecting our planet and fighting for environmental justice.<br><br>
                Have you ever dreamed of sailing on a Greenpeace ship? The ship’s core crew is made up of people from a wide range of backgrounds – ranging from captains, mates, and marine engineers to doctors, cooks and volunteer deckhands. It is hard work. But it could be the experience of a lifetime.</p>
            <!-- https://www.greenpeace.org/international/about/ships/ -->

                <p id="newsMainP2">20 July 2024 I 105 Views I 5 Comments</p>
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
    <div class="news">
        <img src="images/oplægTids.jpg" alt="A large green ship with RAINBOW WARRIOR written on the side and a colorful rainbow stripe painted across its hull. The word GREENPEACE is displayed in white letters. The ship is moving through the ocean, with its white sails fully unfolded. The sky is partly cloudy. Waves are splash against the ship, creating a sense of motion and speed. The ship belongs to Greenpeace, an environmental organization known for its activism.">
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


    <div class="news">
        <img src="images/oplægTids.jpg" alt="A large green ship with RAINBOW WARRIOR written on the side and a colorful rainbow stripe painted across its hull. The word GREENPEACE is displayed in white letters. The ship is moving through the ocean, with its white sails fully unfolded. The sky is partly cloudy. Waves are splash against the ship, creating a sense of motion and speed. The ship belongs to Greenpeace, an environmental organization known for its activism.">
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


    <div class="news">
        <img src="images/oplægTids.jpg" alt="A large green ship with RAINBOW WARRIOR written on the side and a colorful rainbow stripe painted across its hull. The word GREENPEACE is displayed in white letters. The ship is moving through the ocean, with its white sails fully unfolded. The sky is partly cloudy. Waves are splash against the ship, creating a sense of motion and speed. The ship belongs to Greenpeace, an environmental organization known for its activism.">
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


    <div class="news">
        <img src="images/oplægTids.jpg" alt="A large green ship with RAINBOW WARRIOR written on the side and a colorful rainbow stripe painted across its hull. The word GREENPEACE is displayed in white letters. The ship is moving through the ocean, with its white sails fully unfolded. The sky is partly cloudy. Waves are splash against the ship, creating a sense of motion and speed. The ship belongs to Greenpeace, an environmental organization known for its activism.">
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
  </div>
</section>


<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>