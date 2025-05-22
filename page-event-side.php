<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>


    <div class="imageSlider">
        <img src="images/spilledød.jpg" alt="">
        <img src="images/skib_Johanne.jpg" alt="">
        <img src="images/oplægTids.jpg" alt="">
        <img src="images/morgenmad.jpg" alt="">
    </div>
   
   
    <!--<section class="events">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 13.5" preserveAspectRatio="none" id="bowlingSvg">
            <g transform="scale(0.02722, 0.02722)">
              <path d="M0 50C0 22.3858 22.3858 0 50 0H1787C1814.61 0 1837 22.3858 1837 50V129.5C1837 157.114 1814.61 179.5 1787 179.5H1507.25C1482.81 179.5 1463 199.311 1463 223.75C1463 248.189 1443.19 268 1418.75 268H1078.5C1050.89 268 1028.5 290.386 1028.5 318V450C1028.5 477.614 1006.11 500 978.5 500H50C22.3858 500 0 477.614 0 450V50Z" fill="blue"/>
            </g>
          </svg>
          
          
          
        
      </section>-->
      <section class="eventList">

      <?php
$arguments = array(
  "post_type"=> "event-cards",
  "posts_per_page" => 5, 
);
$loop = new WP_Query($arguments);
?>

<?php if($loop->have_posts()):?>
  <?php while($loop->have_posts()): $loop->the_post()?> 


  <?php
$EventCardImage = get_field("event_cards_image");

?>

      <div style="width: calc(100%-60px); height: 500px; position: relative;" class="svgBowling">
        <svg
          viewBox="0 0 1837 500"
          width="calc(100%-60px)"
          height="100%"
          preserveAspectRatio="none"
          xmlns="http://www.w3.org/2000/svg"
          style="display: block; width: 100%; "
        >
          <mask id="clip-mask" maskUnits="objectBoundingBox">
            <path fill="white" d="M0 50C0 22.3858 22.3858 0 50 0H1787C1814.61 0 1837 22.3858 1837 50V129.5C1837 157.114 1814.61 179.5 1787 179.5H1507.25C1482.81 179.5 1463 199.311 1463 223.75C1463 248.189 1443.19 268 1418.75 268H1078.5C1050.89 268 1028.5 290.386 1028.5 318V450C1028.5 477.614 1006.11 500 978.5 500H50C22.3858 500 0 477.614 0 450V50Z"/>
          </mask>
      
          <image class="shapeImage"
            href="<?php echo esc_url($EventCardImage["url"]) ?>"
            width="1837"
            height="500"
            mask="url(#clip-mask)"
            preserveAspectRatio="xMidYMid slice"
          />
        </svg>
        <h3 class="svgSted">Esbjerg Bowling Center</h3>
        <p>D. 14/5 - 2025 kl 17:30 - 100DKK</p>
        <h2>Bowling med Tidslerne</h2>
        <button>Tilmeld Dig</button>
      </div>
      
     
     
   
    </section>
    <?php endwhile?>
        <?php wp_reset_postdata()?>
        <?php endif?>
      <!-- 2. Your masked section -->
      <div class="events"></div>


<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>