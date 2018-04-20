<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Vicuna
 * @since Vicuna 1.0
 */
get_header(); ?>

<section id="intro" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/intro.png">
  <!-- <section id="intro" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/intro.svg)"> -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text">
        <div class="intro-text">
          <h1>'O The Joy!</h1>
          <h2>Rekindling the Possibilities and Joys found in Classroom Teaching</h2>
          <a class="btn btn-secondary cta" href="https://www.amazon.com/Joy-Managing-regaining-rediscovering-teaching-ebook/dp/B07C7JKWJV/">
            Preorder Now!
          </a>
        </div>
      </div>
      <div class="col-lg-6 image">
        <img class="demo-image" src="<?php echo get_template_directory_uri(); ?>/images/book.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<section id="ethos">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 header">
        <h3>We Teach Children how to Learn</h3>
        <!-- <div class="break"></div> -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5 image">
        <img class="demo-image" src="<?php echo get_template_directory_uri(); ?>/images/gear-blue.svg" alt="">
        <img class="demo-image" src="<?php echo get_template_directory_uri(); ?>/images/gear-yellow.svg" alt="">
        <img class="demo-image" src="<?php echo get_template_directory_uri(); ?>/images/gear-blue.svg" alt="">
      </div>
      <div class="col-lg-7 text">
        <div class="purpose">
          <div class="purpose-title">
            <h4>Demystify</h4>
          </div>
          <div class="purpose-text">
            <p>Demystify the thinking process empowers learners to take control of their own learning.</p>
          </div>
        </div>
        <div class="purpose">
          <div class="purpose-title">
            <h4>Engage</h4>
          </div>
          <div class="purpose-text">
            <p>Engage Learners in a community of practice allows for emotional support and social interaction.</p>
          </div>
        </div>
        <div class="purpose">
          <div class="purpose-title">
            <h4>Empower</h4>
          </div>
          <div class="purpose-text">
            <p>Empower learning opportunities beyond developement levels challanges to the next level.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="">

<section id="founders">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img class="profile" src="<?php echo get_template_directory_uri(); ?>/images/elsie.png" alt="">
        <h3>Elsie Moses-Hoeg, PhD</h3>
        <h4>Co-Founder</h4>
        <p>is an educator author and researcher. She has developed the daVinci Thinking Model based on her own research. Her experience includes over 30 years of teaching in traditional and non-traditional settings and working with students ranging from pre-school to postgraduate. Dr. Moses-Hoeg has been an adjunct instructor at the University of New Mexico and a speaker at national conferences including the Brain and Learning Institute. </p>
      </div>
      <div class="col-lg-6">
        <img class="profile" src="<?php echo get_template_directory_uri(); ?>/images/ken.png" alt="">
        <h3>Ken Hoeg</h3>
        <h4>Co-Founder</h4>
        <p>is an educator author and researcher. She has developed the daVinci Thinking Model based on her own research. Her experience includes over 30 years of teaching in traditional and non-traditional settings and working with students ranging from pre-school to postgraduate. Dr. Moses-Hoeg has been an adjunct instructor at the University of New Mexico and a speaker at national conferences including the Brain and Learning Institute. </p>
      </div>
    </div>
  </div>
</section>

<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="">

<section id="logos">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <img class="demo-image" src="<?php echo get_template_directory_uri(); ?>/images/logos/mindset.svg" alt="">
      </div>
      <div class="col-lg-2">
        <img class="demo-image" src="<?php echo get_template_directory_uri(); ?>/images/logos/nsta.svg" alt="">
      </div>
      <div class="col-lg-2">
        <img class="demo-image" src="<?php echo get_template_directory_uri(); ?>/images/logos/discovery.svg" alt="">
      </div>
      <div class="col-lg-2">
        <img class="demo-image" src="<?php echo get_template_directory_uri(); ?>/images/logos/socialthinking.svg" alt="">
      </div>
      <div class="col-lg-2">
        <img class="demo-image" src="<?php echo get_template_directory_uri(); ?>/images/logos/tynker.svg" alt="">
      </div>
      <div class="col-lg-2">
        <img class="demo-image" src="<?php echo get_template_directory_uri(); ?>/images/logos/p21.svg" alt="">
      </div>
    </div>
  </div>
</section>


<section id="funnel">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6  educators" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/educators.png)">
        <div class="container">
          <h3>For The Educators</h3>
          <h4>Online courses, workshops or our book will improve your teaching.</h4>
          <a class="btn btn-secondary cta" href="https://www.davincilearninginstitute.com/for-educators.html">
            Resources
          </a>
        </div>
      </div>
      <div class="col-lg-6 parents" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/parents.png)">
        <div class="container">
          <h3>For The Parents</h3>
          <h4>Educational coaching can make  a huge difference for your child</h4>
          <a class="btn btn-secondary cta" href="https://www.davincilearninginstitute.com/for-parents.html">
            Courses
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
