
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Register</title>
  <link href="application/css/bootstrap.css" rel="stylesheet" />

  <link href="application/css/css/signin.css" rel="stylesheet" />


  </head>

  <body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div>
      </div>
    </div>



    <div class="container">

      <form class="form-signin" method="POST" action="">

          

        <h2 class="form-signin-heading">Enter the fields to register</h2>
        <input type="text" name="voornaam" class="form-control" placeholder="First Name" autofocus>
        <input type="text" name="achternaam" class="form-control" placeholder="Last Name" >
        <input type="text" name="usernaam" class="form-control" placeholder="User Name" >
        <input type="text" name="email" class="form-control" placeholder="E-Mail">        
        <input type="password" name="passwoord" class="form-control" placeholder="Password">
        <input type="password" name="passwoord2" class="form-control" placeholder="retype Password">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

      </form>

    </div> 

  </body>
</html>
