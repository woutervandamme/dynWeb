<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dynamische Websites</title>
    <link href="<?php   echo baseUrl('/application/css/css/bootstrap.css'); ?>" rel="stylesheet" />
    <link href="<?php echo baseUrl('/application/css/css/signin.css'); ?>" rel="stylesheet" />

   
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo baseUrl('index.php/home'); ?>">Quiz app</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    
                    <li><a href="<?php echo baseUrl('index.php/player'); ?>">players</a></li>
<!--                     <li class=""><a href="application/view/display">Display</a></li>
 -->                </ul>
            </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">

           <h1>Player overview</h1>

            <table class=" table table-striped">

                <td>id</td>
                <td>naam</td>
                <td>email</td>
        </tr>
        <tr>
            
                 <tr>
                       <td><?php echo  $this->_player->getId(); ?> </td>
                       <td><?php echo  $this->_player->getNaam(); ?> </td>
                       <td><?php echo  $this->_player->getEmail(); ?> </td>
            </tr>
                  
    </table>   
        </div>
    </div>

    <hr>
    
</div>
</body>

</html>