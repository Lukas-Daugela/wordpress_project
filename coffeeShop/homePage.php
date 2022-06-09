<?php 

/* Template Name: Home_page */
get_header(); 

?>

  <!-- Showcase -->
  <div class="showcase-img">
    <div class="colona">
        <div class="text_container text-center">
          <h1>Lorem ipsum dolor sit amet.</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus
            deserunt velit provident corrupti earum quis!
          </p>
          <div class="btn btn-primary">Read more</div>
        </div>
      </div>
  </div>


  <!-- Menu cards -->
  <!-- uzdeti tinkamas img, background color, opacity, JS paryskinanti efekta on hover -->
  <section class="menu-cards">
    <div class="container">
      <div class="row row-cols-1 row-cols-lg-3 g-5">

      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'facetwp' => true,
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
  
        <a href="wordpress_coffee/coffee">
          <div class="col">
            <div class="card-bg-img first" style="background: ('<?php echo get_the_post_thumbnail()?>')";>
              <div class="card-text text-center">
                <p><?php echo the_content(); ?></p>
              </div>
            </div>
          </div>
        </a>

        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

<!--       
        <a href="/wordpress_coffee/cakes/">
          <div class="col">
            <div class="card-bg-img first">
              <div class="card-text text-center">
                <p>Lorem, ipsum dolor.</p>
                <h2>Coffee</h2>
              </div>
            </div>
          </div>
        </a> -->
<!-- 
        <a href="/wordpress_coffee/cakes/">
          <div class="col">
            <div class="card-bg-img second">
            <div class="card-text text-center">
                <p>Lorem, ipsum dolor.</p>
                <h2>Cakes</h2>
              </div>
            </div>
          </div>
        </a>
        <a href="/wordpress_coffee-shop/wordpress/cakes-menu">
          <div class="col">
            <div class="card-bg-img third">
            <div class="card-text text-center">
                <p>Lorem, ipsum dolor.</p>
                <h2>Sweets</h2>
              </div>
            </div>
          </div>
        </a> -->
      </div>
    </div>
  </section>


  <!-- Text with Photo's -->
  <section class="text-and-img">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col text">
        
        <?php
          if( have_posts() ){
              while( have_posts() ){
                  the_post();
                  the_content();
              }
          }
        ?>

          <h2>Lounge Interior with Calm Music for Chill Out</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis accusantium porro sequi error animi mollitia.</p>
          <div class="btn btn-primary">Read more</div>
        </div>
        
        <div class="col">
          <div class="img-container img1"></div>
        </div>

        <div class="col">
          <div class="img-container img2"></div>
        </div>
    </div>
    </div>
  </section>


  <!-- Discound card section -->
  <section class="discount-card">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col text-col">
          <div class="text text-center">
            <h2>Get your discount card</h2>
            <div class="card-img my-2"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aperiam culpa iste veritatis soluta minima error magni quos? Culpa, earum?</p>
            <div class="btn btn-primary button">Get now</div>
          </div>
        </div>
        <div class="col img-col">
          <div class="img"></div>
        </div>
      </div>
    </div>
  </section>


  <!-- Coffee shop good properties cards -->
  <section class="cards-section">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-4 g-3">
        <div class="col">
          <div class="card text-center">
            <p class="icon"><i class="bi bi-trophy"></i></p>
            <h4>High Quality</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, mollitia.</p>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <p class="icon"><i class="bi bi-cup"></i></p>
            <h4>Awesome Aroma</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, mollitia.</p>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <p class="icon"><i class="bi bi-funnel"></i></p>
            <h4>Pure Grades</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, mollitia.</p>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <p class="icon"><i class="bi bi-cup-straw"></i></p>
            <h4>Proper Roasting</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, mollitia.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Booking form -->
  <section class="booking-section">
    <div class="container">
      <div class="form-box">
        <form action="" class="booking-form">
          <div class="form-container">
            <h2 class="text-center mb-4">Contact us <br> <span>for booking a table</span></h2>
            <input type="text" class="input" placeholder="Name"><br>
            <input type="text" class="input" placeholder="Phone"><br>
            <input type="text" class="input" placeholder="Comment"><br>
            <div class="btn btn-primary">Book Now</div>
          </div>
        </form>
      </div>
    </div>
  </section>


  <!-- About -->
  <section class="about-section">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3">
        <div class="col about-col">
          <div class="text">
            <h2>About our <br> coffee shop</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum rem necessitatibus iure non facere veniam, officiis dignissimos maiores nisi autem?</p>
          </div>
          <div class="btn btn-primary">Read more</div>
        </div>

        <div class="col opening-hours">
          <h4>Opening Hours</h4>
          <p><span>Monday:</span> 9:00-21:00</p>
          <p><span>Tuesday:</span> 9:00-21:00</p>
          <p><span>Wednesday:</span> 9:00-21:00</p>
          <p><span>Thursday:</span> 9:00-21:00</p>
          <p><span>Friday:</span> 9:00-21:00</p>
          <p><span>Saturday:</span> 11:00-17:00</p>
          <p><span>Sunday:</span> CLOSED</p>
        </div>

        <div class="photo"></div>
      </div>
    </div>
  </section>


  <!-- Feedback -->
  <section class="feedback-section">
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slides first-slide text-center">
              <h2>What our clients say</h2>
              <div class="d-flex underline"></div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit a minima quam quae vitae nobis consequuntur ullam impedit, odit iusto non tempore facilis velit mollitia perferendis voluptate obcaecati quas corrupti. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, rerum? Quia ad, nulla iusto minima est expedita quo? Nesciunt quae amet maxime fugiat minima fugit eligendi est! Eius, quaerat voluptatem!
              </p>
              <div class="person-img"></div>
              <p class="person-name">Tomas, Tomaitis</p>
              <p class="post-date">June 15 2022</p>
            </div>
          </div>

          <div class="carousel-item">
            <div class="slides first-slide text-center">
              <h2>What our clients say</h2>
              <div class="d-flex underline"></div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit a minima quam quae vitae nobis consequuntur ullam impedit, odit iusto non tempore facilis velit mollitia perferendis voluptate obcaecati quas corrupti.
              </p>
              <div class="person-img"></div>
              <p class="person-name">Tomas, Tomaitis</p>
              <p class="post-date">June 15 2022</p>
            </div>
          </div>

          <div class="carousel-item">
            <div class="slides first-slide text-center">
              <h2>What our clients say</h2>
              <div class="d-flex underline"></div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse libero explicabo dolorum, impedit unde maiores. <br>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione voluptatibus explicabo consequatur harum quam labore quisquam vitae est, corporis aut veritatis sapiente nam, laudantium consectetur?
              </p>
              <div class="person-img"></div>
              <p class="person-name">Tomas, Tomaitis</p>
              <p class="post-date">June 15 2022</p>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>
</body>
</html>