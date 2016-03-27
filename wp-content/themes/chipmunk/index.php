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
          </div>
      </div>
      <div class="exposing">
       <div class="row">
        <div class="col-sm-12">
          <h5>exposing women to the benefits of learning and loving code</h5>
        </div>
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
          <div class="col-sm-12">
              <h3>Download for IOS</h3>
          </div>
        </div>
  </div>
    <img src="http://localhost:8888/project2/wp-content/themes/chipmunk/img/computer8.jpg" class="img-responsive">
  <div class="how-it-works">
   <div class="row">
      <div class="col-md-12">
        <h2>How it Works</h2>
      </div>
   </div>
 </div>
 </div>
  <div class="container">
    <div class="game-with">
         <div class="row">
            <div class="col-md-4">
              <h4>Game with code{dame}</h4>
                  <p>Learning code is easy when you can access information right on your phone</p>
                  <img src="http://localhost:8888/project2/wp-content/themes/chipmunk/img/phone.png">
            </div>
            <div class="col-md-4">
              <h4>Earn Badges</h4>
                  <p>The more you play, the better you understand code and the harder each level gets!
                     For each level you complete, you earn a badge that helps keep track of your progress</p>
                     <img src="http://localhost:8888/project2/wp-content/themes/chipmunk/img/numbers.png">
            </div>
            <div class="col-md-4">
              <h4>Connect with friends</h4>
                  <p>Code{Dame} allows you to connect with others. Invite your friends and test your knowledge of code to see who is the better coder</p>
                  <img src="http://localhost:8888/project2/wp-content/themes/chipmunk/img/arrows.png">
           </div>
        </div>
    </div>
  </div>
  <div class="container">
    <div class="reviews">
       <div class="row">
         <div class="col-sm-12">
             <img src="http://localhost:8888/project2/wp-content/themes/chipmunk/img/computer9.jpeg">
          <h3>Reviews</h3>
            <div class="col-md-4">
              <p>“I've always loved technology but I didn’t consider it a career path because I didn’t feel confident in my skills. CodeDame has
                given me the tools I need to trust myself and make the changes that my life needs.”</p>
              <div class="p1">
                <p>-Catherine, 29</p>
              </div>
            </div>
            <div class="col-md-4">
            <p>“I like CodeDame because I get to use my brain more creatively and think outside of the box. Since learning how to code, I feel
                 as empowered as my male counterparts at work.”</p>
            <div class="p1">
              <p>-Sofia, 40</p>
            </div>
            </div>
            <div class="col-md-4">
            <p>“I’m passionate about being creative and being able to work with people to make cool stuff. CodeDame is a great medium for
                  expression, learning, and building”</p>
            <div class="p1">
              <p>-Colleen, 22</p>
            </div>
           </div>
            <div class="row">
            <div class="col-sm-12">
             <img src="http://localhost:8888/project2/wp-content/themes/chipmunk/img/woman.jpeg">
            </div>
          </div>
         </div>
       </div>
    </div>
  </div>
 <div class="container">
    <div class="questions">
     <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
         <h2>Have any questions?</h2>
          <p>Send us an e-mail:</br>
           <strong>hello@codedame.com</strong></p>
        </div>
      </div>
    </div>
  <div class="form">
    <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-12">
          <p>Your Name</br>
           <input type="text" name="name"/></p>
          <p>Your e-mail</br>
          <input type="text" name="email"/></p>
          <p>Subject</br>
          <input type="text" name="subject"/></p>
      <form acion="http:////localhost:8888/project2">
        <p>Your Message</p></br>
        <textarea name="message">Enter your message here...</textarea>
      </div>
    </div>
   </div>
  </div>
<?php get_footer(); ?>
