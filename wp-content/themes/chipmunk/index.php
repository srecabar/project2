<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>

    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="code-dame">
              <h1>code{dame}</h1>
            </div>
            <img src="http://localhost:8888/project2/wp-content/themes/chipmunk/img/computer7.jpg" class="img-responsive">
          </div>
      </div>
    </div>
    <div class="container">
      <div class="brief">
        <div class="row">
          <div class="col-md-12">
              <p><strong>CodeDame is a coding game designed for women to learn how to code.</strong>
                 Presently, only 25% of all technology roles are held by women.
                 CodeDame seeks to bridge this gap by encouraging women to learn HTML and CSS skills, and to further develop their creativity and critical thinking skills.</p>
          </div>
        </div>
    </div>
   <div class="download">
        <div class="row">
          <div class="col-md-12">
              <h3>Download for IOS</h3>
              <img src="http://localhost:8888/project2/wp-content/themes/chipmunk/img/computer8.jpg" class="img-responsive">
          </div>
        </div>
  </div>
  <div class="how-it-works">
   <div class="row">
      <div class="col-md-12">
        <h2>How it Works</h2>
      </div>
  </div>
        <div class="how-it-works">
         <div class="row">
            <div class="col-md-4">
              <h4>Game with code{dame}</h4>
                  <p>Learning code is easy when you can access information right on your phone</p>
            </div>
            <div class="col-md-4">
              <h4>Earn Badges</h4>
                  <p>The more you play, the better you understand code and the harder each level gets!
                     For each level you complete, you earn a badge that helps keep track of your progress</p>
            </div>
            <div class="col-md-4">
              <h4>Connect with friends</h4>
                  <p>Code{Dame} allows you to connect with others. Invite your friends and test your knowledge of code to see who is the better coder</p>
           </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
