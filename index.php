<?php
$PageTitle = "";
$Description = "";
$Keywords = "";

include "header.php";
?>

<script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="inc/jquery.cycle2.scrollVert.min.js"></script>
<div class="cycle-slideshow" data-cycle-slides="> div" data-cycle-timeout="8000" data-cycle-pause-on-hover="true" data-cycle-fx="scrollVert" data-cycle-pager-template="<span></span>">
  <p class="cycle-pager vertical"></p>
  
  <div style="background-image: url(images/banner-hockey.jpg);"><div class="overlay">
    <div class="site-width">
      <h3>MATTHEW WICHMAN, MD &amp; MARK WICHMAN, MD ENJOY SERVING THE COMMUNITY THEY LIVE AND WORK IN.</h3>
      <div class="orange">Proudly serving as the Team Physician for the Milwaukee Admirals, Grafton Blackhawks &amp; Homestead Highlanders.</div>

      <div class="banner-logos">
        <img src="images/banner-logo-admirals.png" alt="">
        <img src="images/banner-logo-blackhawks.png" alt="">
        <img src="images/banner-logo-highlanders.png" alt="">
      </div>

      <a href="#" class="orange-button">LEARN MORE</a>
    </div>
  </div></div>

  <div style="background-image: url(images/banner-bicycles.jpg);"><div class="overlay">
    <div class="site-width">
      <h2>SPORTS MEDICINE</h2>
      We Specialize in <strong>Sports Medicine</strong>, <strong>Knee</strong>, <strong>Shoulder</strong> and <strong>Hip</strong>.<br>
      <a href="#" class="orange-button more-bike">DISCOVER MORE</a>
    </div>
  </div></div>
</div>

<div class="banner">
  <div class="site-width">
    <div class="one-third">
      <a href="#"><img src="images/banner-icon-education.png" alt=""> PATIENT EDUCATION</a>
    </div>

    <div class="one-third">
      <a href="#"><img src="images/banner-icon-postop.png" alt=""> POST-OP CARE</a>
    </div>

    <div class="one-third">
      <a href="#"><img src="images/banner-icon-appointment.png" alt=""> APPOINTMENT</a>
    </div>
  </div>
</div>

<script type="text/javascript" src="inc/shapes-polyfill.min.js"></script>
<div class="wichmans">
  <div class="site-width">
    <div class="wichman-left">
      <div class="wl-wrap"></div>

      <h5>DR. MATTHEW P. WICHMAN, MD</h5>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
      <a href="https://www.linkedin.com/in/matthew-wichman-md-1342b477" class="social linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a><br>
      <a href="matthew-wichman.php" class="more">READ FULL PROFILE</a>
    </div>

    <div class="wichman-right">
      <div class="wr-wrap"></div>

      <h5>DR. MARK T. WICHMAN, MD</h5>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
      <a href="https://www.linkedin.com/in/drmarkwichman" class="social linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a><br>
      <a href="mark-wichman.php" class="more">READ FULL PROFILE</a>
    </div>
  </div>
</div>

<div class="content-home">
  <div class="site-width">
    <div class="col1">
      <h2>SPECIALIZING IN SPORTS MEDICINE</h2>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
      <br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
      <br>
      <a href="#">LEARN MORE</a>
    </div>

    <div class="col2">
      <ul>
        <li style="background-image: url(images/icon-sports-med.png);">SPORTS MED</li>
        <li style="background-image: url(images/icon-knee.png);">KNEE</li>
        <li style="background-image: url(images/icon-shoulder.png);">SHOULDER</li>
        <li style="background-image: url(images/icon-hip.png);">HIP</li>
      </ul>
    </div>
  </div>
</div>

<div class="news-home">
  <div class="site-width">
    <div class="header">
      IN THE NEWS
      <img src="images/news-home.jpg" alt="">
    </div>

    <div class="col1">
      <?php
      require('news/wp-blog-header.php');

      $posts = get_posts('posts_per_page=1&order=DESC&orderby=date');
      foreach ($posts as $post) :
        setup_postdata( $post );
        ?>
        <div class="post-date"><?php the_date(); ?></div>
        <h3><?php the_title(); ?></h3>
        <?php echo excerpt(72); ?><br>
        <a href="<?php the_permalink() ?>" class="readmore">READ MORE</a>
      <?php
      endforeach;
      ?>
    </div>

    <div class="col2">
      <?php
      $posts = get_posts('posts_per_page=1&order=DESC&orderby=date&offset=1');
      foreach ($posts as $post) :
        setup_postdata( $post );
        ?>
        <div class="post-date"><?php the_date(); ?></div>
        <h3><?php the_title(); ?></h3>
        <?php echo excerpt(72); ?><br>
        <a href="<?php the_permalink() ?>" class="readmore">READ MORE</a>
      <?php
      endforeach;
      ?>
    </div>
  </div>
</div>

<div class="testimonials">
  <div class="cycle-slideshow site-width" data-cycle-slides="> div" data-cycle-timeout="8000" data-cycle-pause-on-hover="true" data-cycle-pager-template="<span></span>">
    <p class="cycle-pager"></p>
    <div>
      "I would like to thank you for the amazing job you did in the surgery repairing my right rotator cup. It certainly was a long road to recovery, but it now feels free of pain and has near 100% range of motion. I cannot describe the blessing this has been, my work is what not only provides me with an income of making a living but is also my dignity that gives me self worth and allows me to continue my trade that I enjoy doing."<br>
      <br>
      - Steve S., Rotator Cup
    </div>

    <div>
      "Dr. Mark Wichman performed knee surgery on me this winter. He is an honest and confident surgeon. He was patient when answering all my questions. He changed my life. He gave me back a part of myself I haven't had in four years. He gave me the ability to function while performing daily normal activities, and high stress activities without pain.I couldn't be more pleased with my experience with him and his work. I would highly recommend him to anyone! Talented man! He exceeded my expectations!"<br>
      <br>
      - TY, Brookfield, WI
    </div>

    <div>
      "Dr. Matthew Wichman was fantastic. He seemed extremely committed to getting me back to all of the activities I enjoy such as running, basketball and downhill skiing. He was patient and answered my questions. He even took time to review my MRI with me. We talked about many treatment options and he help me choose the option that worked best for me and my family."<br>
      <br>
      - Michael J., Milwaukee, WI
    </div>

    <div>
      "Dr. Mark Wichman has been my orthopedic doctor for 18 years. I started with a torn cartilage in my left knee that happened to me while camping/hiking in 1998. I had arthroscopic surgery on that knee. A couple of years later I tore the cartilage in my other knee and needed arthroscopic surgery on that knee. In 2005 I had a partial knee replacement on my left knee. In 2008 I had knee replacement on both knees&mdash;one in Aug; the other in Nov. I had many visits with Dr Wichman over the years." <br>
      <br>
      - Carol R, Franklin, WI
    </div>
  </div>
</div>

<?php include "footer.php"; ?>