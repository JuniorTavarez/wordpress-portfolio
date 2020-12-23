<!DOCTYPE html>
<html lang="en">
  <head>

  <?php wp_head(); ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <!-- <link rel="stylesheet" href="css/style.prefix.css" /> -->
    <!-- <link rel="shortcut icon" href="/css/favicon.png" type="image/x-icon" /> -->
  </head>
  <body>
   <!-- HEADER BEGGINS -->
   <header id="header">
      <div class="nav-bar">
        <div class="logo">
         <a href="<?php echo site_url() ?>"><img src="http://abwtechnologies.com/images/logo-small.png" alt="" />
         </a> 
        </div>
        <!-- NAV Beggings -->
        <div class="nav">
          <ul class="main-nav">
            <li><a href="#who-am-i">About Me</a></li>
            <li><a href="#my-latest-work">Projects</a></li>
            <li><a href="#connect">Connect With Me</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#footer">Contact</a></li>
            <li>
              <a href="#">Resume <i class="fas fa-download"></i></a>
            </li>
          </ul>
          <ul class="mobile-nav u-display-none">
            <li><a href="#who-am-i">About Me</a></li>
            <li><a href="#my-latest-work">Projects</a></li>
            <li><a href="#connect">Connect With Me</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#footer">Contact</a></li>
            <li>
              <a href="#">Resume <i class="fas fa-download"></i></a>
            </li>
          </ul>
          <div class="menu-bar"></div>
        </div>
      </div>
      <!-- Hero Section -->
      <div class="hero-section">
        <div class="container-top wrapper">
          <!-- left side -->
          <div class="left-side">
            <img src="http://abwtechnologies.com/images/logo.png" alt="" />

            <h1>PEOPLE WORK BETTER TOGETHER</h1>

            <p>
              The power of one, if fearless and focused, is formidable, but the
              power of many working together is better.
              <span class="name"> - Gloria Macapagal Arroyo </span>
            </p>
          </div>
          <!-- right side -->
          <div class="right-side">
            <p>
              Want to work with me? I'm always looking for new projects or a
              coding buddy. Don't be shy, get in touch!
            </p>
            <a href="#"> <div class="button">Get in touch</div></a>
          </div>
        </div>
        <a href="#who-am-i"> <i class="fas fa-chevron-down"></i></a>
      </div>
    </header>
    <!-- Header ENDS -->

