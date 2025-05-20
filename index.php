<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<section>
    <section class="todays_recipe">
        
          <h2 class="todays_recipes_headline">Information</h2>

  
        <div class="todays_recipes_content ">
          <div class="todays_recipes_content_block">
            <div class="todays_recipes_content_block_image">
              <img src="images/trykkammer.jpg" alt="">
              <div class="colorLayer">

              </div>
            </div>
            <div class="todays_recipes_content_block_text">
              <div class="todays_recipes_content_block_text_top">
                <h5>Behandlinger</h5>
                <p>Læs mere Om de behandlinger som medicinalindustrien hader</p>
              </div>
              <div class="todays_recipes_content_block_text_bottom">
                <div class="todays_recipes_content_block_bottom_area">
                  <div class="todays_recipes_content_block_bottom_area_left">
                    <p class="category-color" data-category="seafood">Seafood</p>
                    <p>Recipe</p>
                  </div>
                  <div class="todays_recipes_content_block_bottom_area_right">
                    <button>
                      <a href="#">LÆS MERE</a>
                    </button>
                  </div>
  
                </div>
              </div>
            </div>
          </div>
          <div class="todays_recipes_content_block">
            <div class="todays_recipes_content_block_image">
              <img src="images/article.jpg" alt="">
              <div class="colorLayer">
                
              </div>
            </div>
            <div class="todays_recipes_content_block_text">
              <div class="todays_recipes_content_block_text_top">
                <h5>Behandlinger</h5>
                <p>Læs mere Om de behandlinger som medicinalindustrien hader</p>
              </div>
              <div class="todays_recipes_content_block_text_bottom">
                <div class="todays_recipes_content_block_bottom_area">
                  <div class="todays_recipes_content_block_bottom_area_left">
                    <p class="category-color" data-category="chicken">Chicken</p>
                    <p>Recipe</p>
                  </div>
                  <div class="todays_recipes_content_block_bottom_area_right">                
                    <button>
                      <a href="#">LÆS MERE</a>
                    </button>
                  </div>
  
                </div>
              </div>
            </div>
          </div>
          <div class="todays_recipes_content_block">
            <div class="todays_recipes_content_block_image">
              <img src="images/trykkammer.jpg" alt="">
              <div class="colorLayer">
                
              </div>
            </div>
            <div class="todays_recipes_content_block_text">
              <div class="todays_recipes_content_block_text_top">
                <h5>Behandlinger</h5>
                <p>Læs mere Om de behandlinger som medicinalindustrien hader</p>
              </div>
              <div class="todays_recipes_content_block_text_bottom">
                <div class="todays_recipes_content_block_bottom_area">
                  <div class="todays_recipes_content_block_bottom_area_left">
                    <p class="category-color" data-category="pasta">Pasta</p>
                    <p>Recipe</p>
                  </div>
                  <div class="todays_recipes_content_block_bottom_area_right">
                    <button>
                      <a href="#">LÆS MERE</a>
                    </button>
                  </div>
  
                </div>
              </div>
            </div>
          </div>
          <div class="todays_recipes_content_block">
            <div class="todays_recipes_content_block_image">
              <img id="weirdImage" src="images/article.jpg" alt="">
              <div class="colorLayer">
                
              </div>
            </div>
            <div class="todays_recipes_content_block_text">
              <div class="todays_recipes_content_block_text_top">
                <h5>Behandlinger</h5>
                <p>Læs mere Om de behandlinger som medicinalindustrien hader</p>
              </div>
              <div class="todays_recipes_content_block_text_bottom">
                <div class="todays_recipes_content_block_bottom_area">
                  <div class="todays_recipes_content_block_bottom_area_left">
                    <p class="category-color category-seafood" data-category="misc">Misc</p>
                    <p>Recipe</p>
                  </div>
                  <div class="todays_recipes_content_block_bottom_area_right">
                    <button>
                      <a href="#">LÆS MERE</a>
                    </button>
                  </div>
  
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
      </section>



























<?php endwhile; ?>
<?php endif; ?>