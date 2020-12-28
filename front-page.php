<?php get_header()?>



    <!-- WHO AM I BEGGINS -->
    <div id="who-am-i">
      <div class="wrapper container">
        <!-- left side -->
        <div class="left-side .u-side">
        <?php
                $who_am_i = new WP_Query(array(
                 'posts_per_page' => 1,
                 'post_type' => 'who-am-i',
                ));

                while($who_am_i->have_posts()){
                    $who_am_i->the_post(); ?>
                    
   
            <!-- <?php the_post_thumbnail(); ?> -->
      
        <!-- <p> <?php  the_content(); ?> </p> -->

        <h2> <?php the_field('who_am_i_heading'); ?></h2>
          <p class="first-p">
          <?php the_field('who_am_i_content_top'); ?>
          </p>
          <p class="second-p">
            <!-- Like many other people, I enjoy spending my free time increasing my
            knowledge of Web Development and building new and challenging
            projects. -->
            <?php the_field('who_am_i_content'); ?>
          </p>
          <a href="#"> <p class="button"> <?php the_field('who_am_i_button'); ?></p></a>
        </div>
        <!-- right side -->
        <div class="right-side .u-side">
        <?php the_post_thumbnail(); ?> 
        <!-- <img src="http://abwtechnologies.com/images/what-image.png" alt="" /> -->
        </div>



             <?php  };
            ?>
         
      </div>
    </div>
    <!-- WHO AM I ENDS -->
    <!-- My Latest Work -->
    <div id="my-latest-work">
      <div class="container">
        <div class="heading">
          <h2>My Latest Work</h2>
          <p>Some of my greatest and latest projects.</p>
        </div>
        <div class="row-1">
           
            <!-- php will go here -->
            <?php
                $homepageProjects = new WP_Query(array(
                 'posts_per_page' => 8,
                 'post_type' => 'project',
                 'orderby' => 'date',
                 'order' => 'DESC'
                ));

                while($homepageProjects->have_posts()){
                    $homepageProjects->the_post(); ?>
                    
          <div class="card-1">
 <a href="<?php the_permalink() ?>#overview">
              <!-- <img
                src="http://abwtechnologies.com/images/film-cloud-summary.png"
                alt=""
            /> -->
            <?php the_post_thumbnail(); ?>
            </a>
        <p> <?php echo get_the_excerpt(); ?> </p>
               </div>
             <?php  };
            ?>
          </div>
      </div>
    </div>
    <!-- My Latest Work ENDS -->
    <!-- Technological Skills -->
    <div id="technological-skills">
      <div class="container">
        <div class="wrapper">
          <h2>Technological Skills</h2>
          <p class="main-paragraph">
            I always enjoy learning new things. Especially the technologies that
            make your company special.
          </p>
          <div class="flex">
            <!-- <span class="html"> -->
            <p>Semantic HTML5</p>
            <p>Responsive CSS3</p>
            <p>Interactive JavaScript</p>
            <!-- </span> -->
            <!-- <span class="sass"> -->
            <p>Sass</p>
            <p>jQuery</p>
            <p>Bootstrap</p>
            <!-- </span> -->
            <!-- <span class="react"> -->
            <p>React</p>
            <p>Redux</p>
            <!-- </span> -->
            <!-- <span class="wordpress"> -->
            <p>Wordpress</p>
            <p>git</p>
            <p>github</p>
            <p>Problem Solver</p>
            <!-- </span> -->
            <!-- <span class="transform"> -->
            <p>Transform PSD / Wireframes into web applications</p>
            <!-- </span> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Technological Skills Ends -->
    <!-- Connect With me -->
    <div id="connect">
      <div class="container wrapper">
        <div class="left-side">
          <h2>Connect with me:</h2>
          <p>
            Want to get in touch? I share my passion for development anywhere I
            can.
          </p>
        </div>
        <div class="right-side">
          <ul>
            <li>
              <a href="#"> <i class="fas fa-envelope"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-github"></i></a>
            </li>
            <li>
              <a href="#"> <i class="fab fa-codepen"></i> </a>
            </li>
            <li>
              <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
            </li>
            <li>
              <a href="#"> <i class="fab fa-instagram"></i> </a>
            </li>
            <li>
              <a href="#"> <i class="fab fa-facebook-f"></i> </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Connect With me ends -->
    <!-- Why work with me -->
    <div id="why-work-with-me">
      <div class="container wrapper">
        <div class="top">
          <h2>Why work with me?</h2>
          <p>There are many advantages to working with me. Here are a few:</p>
        </div>
        <div class="info-section">
          <div class="card">
            <div><i class="fas fa-code"></i></div>
            <h3>Passionate About development</h3>
            <p>
              Big believer in the fact that the greatest work is done by
              passionate people.
            </p>
          </div>
          <div class="card">
            <div><i class="fab fa-leanpub"></i></div>
            <h3>Quick learner</h3>
            <p>
              Confident in my ability to learn something new and put it into
              production. Thrive in fast-paced and competitive environments.
            </p>
          </div>
          <div class="card">
            <div><i class="fas fa-users"></i></div>
            <h3>Adaptable</h3>
            <p>
              Always excited to learn new things. The most valuable thing I can
              provide to your company is the ability to be molded to your stack.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Why work with me ends -->
    <!-- Clients Testimonials -->
    <div id="testimonials">
      <div class="container wrapper">
        <div class="top">
          <h2>Client Testimonials</h2>
          <p>Client feedback on great experiences</p>
        </div>
        <div class="content">
          <div class="paragraph testimonials">
            <p>
              Alan makes things work! He has taken several of our products from
              mediocre to fantastic! <span class="name"> -Dr. Mary Ellon</span>
            </p>
          </div>
          <div class="paragraph testimonials">
            <p>
              Alan Ayala has been working with me for several months on multiple
              projects ranging from building computers to building websites. He
              has been invaluable for both his technical skills and his ability
              to work with others. Many times he has helped me with difficult
              technical issues and has demonstrated the ability to master new
              skills quickly.
              <span class="name"> -Joe Allen</span>
            </p>
          </div>
          <div class="paragraph testimonials">
            <p>
              Alan is creative, talented and knowledgeable with his service. We
              had several pieces of electronic and IT equipment that had quit
              working but Alan was able to salvage and update them with new
              programs and software saving our business thousands of dollars
              from having to replace them with new devices. He learns new
              programs quickly and is also patient and helpful when teaching the
              new programs to others. He is very focused when there is a problem
              and solves it quickly. He is a delight to work with and a valuable
              resource to our business.
              <span class="name"> -Bill Allen</span>
            </p>
          </div>
        </div>
        <div id="bullets">
          <div class="bullets u-grow-bullet"></div>
          <div class="bullets"></div>
          <div class="bullets"></div>
        </div>
      </div>
    </div>
    <!-- Clients Testimonials Ends-->

<?php
get_footer();

?>



