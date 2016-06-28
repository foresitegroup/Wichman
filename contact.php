<?php
session_start();

$PageTitle = "Contact";
$Description = "";
$Keywords = "";

include "header.php";
?>

<div class="sub-header contact-header center">
  <h2>CONTACT US</h2>
</div>

<div class="site-width contact-top">
  Please sign up for our periodic informational <strong>newsletter</strong>. If you need to set an appointment please call <strong>414-479-7000</strong>.
</div>

<hr>

<div class="site-width contact-form">
  <form action="//drwichman.us13.list-manage.com/subscribe/post?u=84fd9ec509a7095e55858daa9&amp;id=a482ba5878" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div>
      <div class="required">* Required</div>

      <input type="text" value="" name="FLNAME" id="mce-FLNAME" placeholder="First &amp; Last Name">
      <input type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="* Email Address">

      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_84fd9ec509a7095e55858daa9_a482ba5878" tabindex="-1" value=""></div>
      
      <div id="mce-responses">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>

      <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
      <br>

      <div class="center">You may unsubscribe at any time.</div>
    </div>
  </form>
</div>

<div class="sub-footer">
  <a href="appointments.php" class="orange-button">SCHEDULE AN APPOINTMENT</a>
</div>

<?php include "footer.php"; ?>