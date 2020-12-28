<?php 

get_header();

while(have_posts()){
the_post();

?>
  <!-- overview  -->
  <div id="overview">
      <div class="container">
        <h2>Overview</h2>
        <div class="wrapper">
        
        <?php the_content();?> 
     
         
          <div class="img">
            <div class="image-size">
       <?php the_post_thumbnail(); ?>
            <!-- <img
              src="http://abwtechnologies.com/images/space-xplorer-summary.png"
              alt=""
            /> -->
            </div>
            <div class="button">
              <a href="#" target="_blank"
                >Visit Project<i class="fas fa-angle-double-right"></i
              ></a>

              <a href="#" target="_blank"
                >View Code<i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- overview ends -->

    <!-- Technologies used -->

    <div id="technologies-used">
      <div class="container">
        <h2>Technologies Used:</h2>
        <div class="wrapper">
          <div class="left-side">
            <img
              src="http://abwtechnologies.com/images/space-xplorer-tech-used.png"
              alt=""
            />
          </div>
          <div class="right-side">
            <ul>
              <li>React</li>
              <li>React Router</li>
              <li>Redux</li>
              <li>NASA's Trek API</li>
              <li>Esri API</li>
              <li>Sass</li>
            </ul>
            <p>
              Wow and Smooth Scroll were implemented into the project to bring
              Jquery like features without the library's heavy footprint.
            </p>
          </div>
        </div>
        <div class="back-to-projects">
          <a
            href="<?php echo site_url() ?>#my-latest-work"
            ><i class="fas fa-angle-double-left"></i>Go back to projects</a
          >
        </div>
      </div>
    </div>
    <!-- Technologies used ENDS -->



<?php }
get_footer();
?>