<!doctype html>
<html lang="en">

<!-- Mirrored from preview.uiuxassets.com/opalin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jan 2023 05:41:58 GMT -->
<head>
  <title>Opalin HTML Template - Log In</title>
  <meta charset="utf-8">
  <meta name="description" content="A minimal and responsive HTML5 landing page built on lightweight, clean and customizable code.">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon-precomposed" href="media/favicon.png">
  <link rel="icon" href="media/favicon.png">
  <link rel="mask-icon" href="media/favicon.svg" color="rgb(36,38,58)">
  <link rel="shortcut icon" href="media/favicon.png">
  <link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
</head>
<body class="page page-onboarding preload">

  <main>

    <a href="userhome" class="button button-close" role="button">X</a>

    <section class="row no-gutter reverse-order">
      <div class="col-one-half middle padding">
        <div class="max-width-s">
          <h5>Welcome back.</h5>
          <p class="paragraph">Enter your details below.</p>
          <form>
            <div class="form-group">
              <label for="email">Email:</label>
              <input id="email" type="email" name="email">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input id="password" type="password" name="login-password">
              <a href="forgot-password.html" class="form-help">Forgot password?</a>
            </div>
            <div class="form-group">
              <input id="remember-me" type="checkbox" name="remember-me">
              <label for="remember-me" class="checkbox">Remember Me</label>
            </div>
            <a href="#" class="button button-primary full-width" role="button">Log In</a>
          </form>
        </div>
        <div class="center max-width-s space-top">
          <span class="muted">Don't have an account? </span><a href="signup.html">Sign Up</a>
        </div>
      </div>
      <div class="col-one-half bg-image-04 featured-image"></div>
    </section>

  </main>

  <script src="{{url('frontend/js/main.js')}}"></script>
</body>

<!-- Mirrored from preview.uiuxassets.com/opalin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jan 2023 05:41:58 GMT -->
</html>