<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.includes.loginHead')
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            @include('admin.includes.loginForm')
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            @include('admin.includes.registerForm')
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
