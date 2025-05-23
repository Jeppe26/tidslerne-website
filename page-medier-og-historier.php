<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<section class="patientHistorier">
    <h2 class="patientHistorieTitel">Patient Historier</h2>
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
        <img src="images/Acadia-hypertermi-13.jpg" alt="A close-up of the Rainbow Warrior ship's hull, with the iconic rainbow stripes and a white bird symbol—a part of Greenpeace's logo. Three dolphins follow the ship, creating a dynamic and lively scene. The contrast of the colorful hull against the blue waves highlights Greenpeace's strong connection to marine conservation and environmental activism. The dolphins add a natural and hopeful energy to the image, symbolizing harmony with nature.">
        <div class="newsText">
            <h3>News > Articles > About Us</h3>
            <h2>Breaking</h2>
            <p id="newsP1">Shell backs down in their multimillion dollar lawsuit against Greenpeace over a peaceful protest. We showed them their bully tactics won't intimidate us - and now they've settled out of court. People power works!<br><br>
                They demanded $1m USD in damages – and planned to spend another $10m USD in legal fees, which we could have had to pay if we lost the case.</p>
           <!-- https://www.greenpeace.org/international/story/71777/shell-backs-down-in-lawsuit-against-greenpeace/ -->

                <p id="newsP2">10 December 2024 I 50 Views I 2 Comments</p>
                <button>Se mere</button>
        </div>
    </div>
    <div class="news">
        <img src="images/tidsYoga.jpg" alt="A group of people is standing on a bridge, holding a yellow banner with bold black text that reads ЗЕЛЕНЕ ВІДНОВЛЕННЯ ДЛЯ УКРАЇНИ (Green Renewal for Ukraine). The word GREENPEACE is written in smaller green text below. The group, consisting of men and women in casual clothing, smiling at the camera. The bridge features white steel beams and decorative arches in the background, with a view of forest under a clear sky.">
        <div class="newsText">
            <h3>News > Articles > About Us</h3>
            <h2>Protesting peacefully</h2>
            <p id="newsP1">
                For more than 50 years we have been using peaceful protest to bring about change. Non-violence is a core principle of Greenpeace and at the heart of all of our activities. Our non-violent direct actions have proved essential to the success of campaigns in exposing environmental crimes, confronting unjust activities and stopping environmental destruction.<br><br>
                We believe that non-violence direct action is required when all other avenues, such as dialogue or legal action, have been investigated and exhausted, or are clearly not viable.</p>
           <!-- https://www.greenpeace.org/canada/en/about-us/protesting-peacefully-to-change-the-world/ -->
                <p id="newsP2">16 September 2024 I 90 Views I 10 Comments</p>
                <button>Se mere</button>
        </div>
    </div>
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