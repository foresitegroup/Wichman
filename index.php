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
  <div style="background-image: url(images/banner-hockey.jpg);">
    <div class="site-width">
      <h3>MATTHEW WICHMAN, MD &amp; MARK WICHMAN, MD ENJOY SERVING THE COMMUNITY THEY LIVE AND WORK IN.</h3>
      <div class="orange">Proudly serving as the Team Physician for the Milwaukee Admirals, Grafton Blackhawks &amp; Homestead Highlanders.</div>

      <div class="banner-logos">
        <img src="images/banner-logo-admirals.png" alt="">
        <img src="images/banner-logo-blackhawks.png" alt="">
        <img src="images/banner-logo-highlanders.png" alt="">
      </div>

      <a href="#">LEARN MORE</a>
    </div>
  </div>
  <div style="background-image: url(images/banner-bicycles.jpg);">
    <div class="site-width">
      <h2>SPORTS MEDICINE</h2>
      We Specialize in <strong>Sports Medicine</strong>, <strong>Knee</strong>, <strong>Shoulder</strong> and <strong>Hip</strong>.<br>
      <a href="#" class="more-bike">DISCOVER MORE</a>
    </div>
  </div>
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
      <a href="#" class="more">READ FULL PROFILE</a>
    </div>

    <div class="wichman-right">
      <div class="wr-wrap"></div>

      <h5>DR. MARK T. WICHMAN, MD</h5>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
      <a href="https://www.linkedin.com/in/drmarkwichman" class="social linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a><br>
      <a href="#" class="more">READ FULL PROFILE</a>
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
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."<br>
      <br>
      - John S., Hip
    </div>

    <div>
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in pulvinar risus. Cras eleifend leo magna, vel ultrices lacus varius nec. Proin mollis ultricies lorem, ut varius velit sagittis eget. Nam justo tellus, lacinia luctus nisl ac, porta porta metus. Duis at est ut elit pharetra pretium. Morbi a dui libero. Praesent eget magna dui. Duis bibendum pharetra risus, quis tincidunt mauris dignissim vel."<br>
      <br>
      - Martha J., Knee
    </div>
  </div>
</div>

<?php include "footer.php"; ?>