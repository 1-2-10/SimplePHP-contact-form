
<!-- add into your html / php or whatever page -->

<div class="Your_html_choice_here">
  <h1>Contact Susan Dodge</h1>
  <p>Our site is still in development stage.</p>
  <p>This contact form is NOT functional yet.</p>
  <p>If you want to contact Susan Dodge, please do so through Facebook or Instagram for the time being. We are sorry for any inconvenience to our users.</p>
  <div id="form_wrapper">
      <h2>Contact Us</h2>
      <form action="PHPscripts/send_email.php" method="post">
         <div class="form-fields">
            <label for="name">Name:<span class="prompt-text">(required*)</span></label><br>
            <input type="text" id="name" name="name" required>
         </div>
         <div class="form-fields">
            <label for="email">Email:<span class="prompt-text">(required*)</span></label><br>
            <input type="text" id="email" name="email" required>
         </div>
         <div class="form-fields">
            <label for="subject">Subject:<span class="prompt-text">(required*)</span></label><br>
            <input type="text" id="subject" name="subject" required>
         </div>
         <div class="form-fields">
            <label for="phone">Phone #:<span class="prompt-text">(optional*)</span></label><br>
            <input type="text" id="phone" name="phone">
         </div>
         <div class="form-fields text-area">
           <label for="message">Message: (750 chars max)</label><br>
           <textarea id="message" name="message" required maxlength="750"   oninput="updateCharCount()"></textarea><br>
           <span id="charCount">750 characters remaining</span>
         </div>

   <!-- reCAPTCHA widget 
         <div class="g-recaptcha" data-sitekey="6LfBOsUqAAAAAIW2gByjRIuLEdmiCEzfALYY1xW7">
         </div>
   -->
          <div class="form-fields">
        <input type="submit" value="Send it!">
          </div>
       </form>
      </div>
      <script>
      function updateCharCount() {
          var messageField = document.getElementById("message");
          var charCount = document.getElementById("charCount");
          var remaining = 750 - messageField.value.length;
      
          charCount.textContent = remaining + " characters remaining";
      }
      </script>
</div> <!-- End of 'Your_html_choice_here' class, div here -->
