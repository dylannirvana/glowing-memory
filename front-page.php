<?php get_header('special') ?>

<!--  This places pages/scenes as frames within a Carousel -->

  <div class="carousel slide" data-ride="carousel" id="featured">
    <ol class="carousel-indicators">
    <!-- <li data-target="#featured" data-slide-to="0" class="active"></li>
    <li data-target="#featured" data-slide-to="1"></li>
    <li data-target="#featured" data-slide-to="2"></li>
    <li data-target="#featured" data-slide-to="3"></li>
    <li data-target="#featured" data-slide-to="4"></li>
    <li data-target="#featured" data-slide-to="5"></li> -->
  </ol>


    <div class="carousel-inner fullheight">

        <div class="item active">
			<video autoplay loop id="video-background" muted>
		       <source src="<?php bloginfo('template_directory'); ?>/images/vdo/flock.mp4" type="video/mp4"> 
		    </video>
		    <div class="carousel-caption">          
	          <?php 
	          $query = new WP_query( 'pagename=caption1');  
	          if ( $query->have_posts() ) {
	            while ( $query->have_posts() ) {
	              $query->the_post();
	              the_content();
	            }
	          }
	          wp_reset_postdata();
	         ?>
	        </div>
      	</div>

      	<div class="item">
			<section class="scene" id="media">
			    <article class="content container">    
			      <?php 
			        $query = new WP_query( 'pagename=media');  
			        if ( $query->have_posts() ) {
			          while ( $query->have_posts() ) {
			            $query->the_post();
			            echo "<h1>";
			            the_title();
			            echo "</h1>";
			            echo "<p>";
			            the_content();
			            echo "</p>";
			          }
			        }
			        wp_reset_postdata();
			       ?>
			    </article>
			</section>
      	</div>

      	<div class="item">
			<section class="scene" id="spokespeople">
			  	<article class="content container">   
				    <header> 
					    <h1>Spokespeople</h1>
				      	<?php 
				      	  $query = new WP_query( 'pagename=spokespeople');  
				      	  if ( $query->have_posts() ) {
				      	    while ( $query->have_posts() ) {
				      	      $query->the_post();
				      	      echo "<p>";
				      	      the_content();
				      	      echo "</p>";
				      	    }
				      	  }
				      	  wp_reset_postdata();
				      	?>
				    </header>
					<article class="biocolumn">
					    <?php 
					        $query = new WP_query( 'category_name=spokespeople&posts_per_page=4' );
					        if ( $query->have_posts() ) {
					          while ( $query->have_posts() ) {
					            $query->the_post();
					            echo "<article class='gallery'>"; 
					            echo "<div class='headshot'>"; 
					            the_post_thumbnail();
					            echo "</div>";
					            echo "<div class='bio'>";
					            echo get_the_title();
					            echo "<p>";
					            the_content();             
					            echo "</p>";
					            echo "</div>";
					            echo "</article>";
					          }
					        }
					        wp_reset_postdata();
					    ?>
					</article>
				</article>
		  	</section>
      	</div>

     	<div class="item">
			<section class="scene" id="tour">
			    <article class="content container">	      
			      <?php 
			        $query = new WP_query( 'pagename=tour');  
			        if ( $query->have_posts() ) {
			          while ( $query->have_posts() ) {
			            $query->the_post();
			            echo "<h1>";
			            the_title();
			            echo "</h1>";
			            echo "<p>";
			            the_content();
			            echo "</p>";
			          }
			        }
			        wp_reset_postdata();
			       ?>
			    </article>
  			</section>
      	</div>


		<div class="item">
			<section class="scene" id="news">
			    <div class="content container">
			        <h1>News & Blog</h1>
			        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione vitae tenetur iure amet iusto repudiandae numquam soluta sunt, voluptate accusamus dolorum veniam sit officiis, dignissimos vel nihil, autem error aliquid!</p>

			      <article id="blogmain" class="blogmain"> <!-- BLOG MAIN -->
			        <?php 
			          $query = new WP_query( 'cat=-2&posts_per_page=5' );
			          if ( $query->have_posts()) {
			            while ( $query->have_posts() ) {
			              $query->the_post();
			              // echo "<div>";
			              echo "<h2>";
			              echo get_the_title();
			              echo "</h2>";
			              echo "<p>";
			              the_content();             
			              echo "</p>";
			              // echo "</div>";
			            }
			          }
			          wp_reset_postdata();
			         ?>
			      </article> 

			      <aside id="blogside" class="blogside"> 
			        <?php get_sidebar( 'special' ); ?>
			      </aside> 
			        
			    </div>
			</section>
      	</div>

		<div class="item">
			
			<section class="scene" id="clients">
    <article class="content container">
       <!-- Clients -->
      <?php 
        $query = new WP_query( 'pagename=clients');  
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo "<h3>";
            the_title();
            echo "</h3>";
            echo "<div class='clientList'>";
            the_content();
            echo "</div>";
          }
        }
        wp_reset_postdata();
       ?>

      <!-- Broadcast Outlets -->
      <?php 
        $query = new WP_query( 'pagename=broadcast');  
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo "<h3>";
            the_title();
            echo "</h3>";
            echo "<div class='clientList'>";
            the_content();
            echo "</div>";
          }
        }
        wp_reset_postdata();
       ?>
      
      <!-- Affiliates -->
      <?php 
        $query = new WP_query( 'pagename=affiliates');  
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo "<h3>";
            the_title();
            echo "</h3>";
            echo "<div class='clientList'>";
            the_content();
            echo "</div>";
          }
        }
        wp_reset_postdata();
      ?>

    </article>
  </section>

      	</div>


    </div><!-- carousel-inner -->

    <a class="left carousel-control" href="#featured" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#featured" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div><!-- END featured carousel -->

</header>


<?php get_footer() ?>


