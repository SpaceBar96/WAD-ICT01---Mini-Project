<html lang="en">
  <head>
    <title>Sign Up</title>

    <link href="/bootstrap/css/signin.css" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>

  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form class="container" action="register" method="post">
  @csrf
    <h1 class="h3 mb-3 fw-normal">Please Register</h1>

    <div class="form-floating">
      <input type="text" name="fullname" class="form-control" id="floatingInput" placeholder="Full Name">
      <label for="floatingInput">Full Name</label>
    </div>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Agree to our terms & services
      </label>
    </div>

    <button type="submit" class="w-100 btn btn-lg btn-primary">Sign Up</button><br/><br/>
    <a href="/">Already have an account? Sign In</a>
  </form>
</main>

  </body>
</html>
