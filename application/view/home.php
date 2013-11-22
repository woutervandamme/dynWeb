<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welkom</title>
    <link href="<?php   echo baseUrl('/application/css/css/bootstrap.css'); ?>" rel="stylesheet" />
    <link href="<?php echo baseUrl('/application/css/css/signin.css'); ?>" rel="stylesheet" />

    
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Quiz app</a>
        </div>
        <div class="navbar-collapse">

          <ul class="nav navbar-nav">
            <li><a href="<?php echo baseUrl('index.php/Player/'); ?>">Speler overzicht</a></li>
          </ul>
        
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


    <h1>Home</h1>
    <p>lorem ipsum blLABLAELDFEferverregregreger</p>
    <a href="index.php/Login/register" class="btn btn-warning"> registreer</a>
</div>
</body>
</html>