<!-- MAIN CONTENT -->

<div class="container">

<?php include_once "Http/home/navegations/titlePag.php";?>

  <div class="row sidebar_right sidebar_off">
    <div class="column_center">
      <div id="main_content" class="col-sm-12">
        <div id="template" class="customer customer__login">
          <div id="customer">
            <h2 class="page_heading">Login</h2>
            <div class="form-horizontal">

              <?php
              if (isset($_POST['loginEmail'])) {
                $ingreso = new Auth();
                $ingreso->login();
              }
              ?>

              <form method="post" action="" id="formlogin" accept-charset="UTF-8" data-login-with-shop-sign-in="true">
                <input type="hidden" name="form_type" value="customer_login">
                <input type="hidden" name="utf8" value="✓">
                <div id="loginEmail" class="clearfix large_form form-group">
                  <label for="loginEmail" class="login control-label col-sm-4">Email Address</label>
                  <div class="col-sm-4">
                    <input type="email" value="" name="loginEmail" id="loginEmail" class="form-control" size="30" required>
                  </div>
                </div>

                <!-- Customer Account Login -->
                <div id="loginPassword" class="clearfix large_form form-group">
                  <label for="loginPassword" class="login control-label col-sm-4">Password</label>
                  <div class="col-sm-4">
                    <input type="password" value="" name="loginPassword" id="loginPassword" class="form-control" size="16" required>
                  </div>
                </div>

                <div class="form-group">
                  <div id="forgot_password">
                    <div class="col-sm-4 col-sm-offset-4">
                      <a href="#" onclick="showRecoverPasswordForm();return false;">Olvidaste tu contraseña?</a>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="action_bottom col-sm-offset-4 col-sm-4">
                    <input class="btn btn-primary" type="submit" name="btnlogin" id="btnlogin" value="Sign In">
                    <span class="note">or <a href="../index.htm">Regresar al Inicio</a></span>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <!-- Recover Password Form -->
          <div id="recover-password" style='display:none' class="customer customer__recover">
            <h2 class="page_heading">Reset Password</h2>
            <p class="note">Le enviaremos un correo electrónico para restablecer su contraseña.</p>
            <form method="post" action="/account/recover" accept-charset="UTF-8">
              <input type="hidden" name="form_type" value="recover_loginPassword"><input type="hidden" name="utf8" value="✓">

              <div id="recover_email" class="clearfix form-horizontal">
                <div class="form-group">
                  <label for="email" class="large col-sm-4">Email</label>
                  <div class="col-sm-4">
                    <input class="form-control" type="email" value="" size="30" name="email" id="recover-email">
                  </div>
                </div>
                <div class="form-group action_bottom ">
                  <div class="col-sm-4 col-sm-offset-4">
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <span class="note">or <a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a></span>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <!-- Guest Login form for shops with optional customer accounts. This form is displayed only when users click on the checkout link on the cart page. -->


        </div>

        <script type="text/javascript">
          function showRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'block';
            document.getElementById('customer').style.display = 'none';
          }

          function hideRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'none';
            document.getElementById('customer').style.display = 'block';
          }

          if (window.location.hash == '#recover') {
            showRecoverPasswordForm()
          }
          
        </script>
      </div>
    </div>
  </div>
</div>

