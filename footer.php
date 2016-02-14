<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package millerweiner
 */
?>


<!-- Read up about cool footers -->

<footer class="scene" id="footer">
  <article class="content ">
      <h1>Miller Weiner</h1>
      <h4>Communications</h4>

      <div>
        <ul id="social">
          <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>

        </ul>
      </div>

      <div class="copy">
        
        <?php 
          $query = new WP_query( 'pagename=footer');  
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              echo "<p'>";
              the_content();
              echo "</p>";
            }
          }
          wp_reset_postdata();
         ?>
      </div>

      
      <!-- <ul class="nav">
        <li><a href="#media">Media Services</a></li>
        <li><a href="#media">Media Services</a></li>
        <li><a href="#media">Media Services</a></li>
        <li><a href="#media">Media Services</a></li>
        <li><a href="#media">Media Services</a></li>
      </ul> -->
      <!-- CONSTANT CONTACT -->
<!-- BEGIN: Constant Contact Email List Form Button --><div align="center"><a href="http://visitor.r20.constantcontact.com/d.jsp?llr=ua4ndxuab&amp;p=oi&amp;m=1121761819668&amp;sit=orq78k8jb&amp;f=42d88580-a6ce-4bc2-a5e7-c175fc8d7bca" class="button" style="background-color: rgb(50, 50, 50); border: 1px solid rgb(91, 91, 91); color: rgb(255, 236, 153); display: inline-block; padding: 8px 10px; text-shadow: none; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;">Sign up for our newsletter</a><!-- BEGIN: Email Marketing you can trust --><div id="ctct_button_footer" align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:10px;color:#999999;margin-top: 10px;">For Email Newsletters you can trust.</div></div>


      <div class="veryBottom"> <!-- REPLACE HARD CODED DATE WITH PHP -->
          <ul id="copyright">
            <li><a href="http://dylannirvana.com">&#169 Copyright Dylan Nirvana 2015. All rights reserved</a></li>
            <li><a href=""></a></li>
          </ul>

        </div>  
  </article>
   
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
