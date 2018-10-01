<?php require('header.php'); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>  
<!--CONTENT-->
    <div class="container">
          <div class="section ">
 
              <h2>CONTACT US</h2>
            <form class="col s12" action="mail.php" method="post">
                <div class='row'>

                    <div class='input-field col s12'>
                        <input type="text" class="" id="FullName" name="FullName" aria-describedby="emailHelp" placeholder="Full Name" required>
                        <label for='email'>Full Name</label>
                    </div>
                    <div class='input-field col s12 m6'>
                        <input type="email" class="" id="EmailAddress" name="EmailAddress" aria-describedby="emailHelp" placeholder="Email Address" required>
                        <label for='email'>Enter Email</label>
                    </div>
                    <div class='input-field col s12 m6'>
                        <input type="text" class="" id="ContactNumber" name="ContactNumber" aria-describedby="emailHelp" placeholder="Contuct Number" required>
                        <label for='email'>Contact Number</label>
                    </div>

                    <div class='input-field col s12'>
                        <textarea id="Msg" name="Msg" class="materialize-textarea" id="msg" rows="3"  placeholder="Message" required></textarea>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s6'>
                    <!--<div class="g-recaptcha" data-sitekey="6LdADDEUAAAAAGf1uSIBHMINHTLcfn5Oe7S3i8eS"></div>-->
                    </div>
                    <div class='input-field col s6'>
                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect '>Submit</button>
                    </div>
                </div>
          
            </form>
          
          </div>
      </div>
<!--CONTENT-->
<?php require('footer.php'); ?>