<?php
$PageTitle = "Contact";
$Description = "";
$Keywords = "";

include "header.php";
?>

<div class="sports-medicine-blue contact-form center">
  <h2>CONTACT US</h2>
</div>

<div class="site-width contact-top">
  NOTE: the form is for <strong>INQUIRIES ONLY</strong> and <strong>NOT TO BE USED TO ASK/RECEIVE MEDICAL ADVICE OR TO SET <a href="appointments.php">APPOINTMENTS</a></strong>.
</div>

<hr>

<div class="site-width contact-form">
  <script type="text/javascript">
    $(document).ready(function() {
      var form = $('#contact-form');
      var formMessages = $('#contact-form-messages');
      $(form).submit(function(event) {
        event.preventDefault();
        
        function formValidation() {
          if ($('#name').val() === '') { alert('Name required.'); $('#name').focus(); return false; }
          if ($('#email').val() === '') { alert('Email required.'); $('#email').focus(); return false; }
          if ($('#message').val() === '') { alert('Message required.'); $('#message').focus(); return false; }
          return true;
        }
        
        if (formValidation()) {
          var formData = $(form).serialize();
          formData += '&src=ajax';

          $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
          })
          .done(function(response) {
            $(formMessages).html(response);

            $(form).find('input:text, textarea').val('');
            $('#email').val(''); // Grrr!
          })
          .fail(function(data) {
            if (data.responseText !== '') {
              $(formMessages).html(data.responseText);
            } else {
              $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
          });
        }
      });
    });
  </script>

  <?php
  // Settings for randomizing form field names
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = time();
  $salt = "DrWichmanContactForm";
  ?>

  <noscript>
  <?php
  $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
  unset($_SESSION['feedback']);
  ?>
  </noscript>

  <form action="form-contact.php" method="POST" id="contact-form">
    <div>
      <div class="required">* Required</div>
      
      <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="* First &amp; Last Name">

      <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address">

      <input type="text" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="subject" placeholder="Phone Number">

      <input type="text" name="<?php echo md5("subject" . $ip . $salt . $timestamp); ?>" id="subject" placeholder="Subject">

      <textarea name="<?php echo md5("comment" . $ip . $salt . $timestamp); ?>" id="comment" placeholder="* Comment"></textarea>

      <br><br>

      Please indicate how best to reach you:
      <span class="radio">
        <input type="radio" name="reach" value="Phone" id="r-phone"> <label for="r-phone">Phone</label>
        <input type="radio" name="reach" value="Email" id="r-email"> <label for="r-email">Email</label>
      </span><br>
      <br>

      <input type="checkbox" name="uptodate" id="uptodate" value="I would like to recieve periodic information from www.drwichman.com">
      <label for="uptodate"><span></span>I would like to recieve periodic information from www.drwichman.com</label>

      <div id="contact-form-messages"><?php echo $feedback; ?></div>

      <input type="hidden" name="referrer" value="contact.php">

      <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

      <input type="submit" name="submit" value="SEND MESSAGE">
    </div>
  </form>
</div>

<div class="sports-medicine-footer">
  <a href="appointments.php" class="orange-button">SCHEDULE AN APPOINTMENT</a>
</div>

<?php include "footer.php"; ?>