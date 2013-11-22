<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welkom</title>
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
                    
                    <li><a href="#">players</a></li>
                </ul>
            </div>
    </div>

<div class="container">

    <h1>Speleroverzicht</h1>

     <table class=" table table-striped">
        <tr>
                <td>id</td>
                <td>naam</td>
                <td>detail</td>
              
        </tr>
        <tr>
               <?php foreach ($this->_player as $player) { ?>
 
             
                <td><?php echo $player->getId(); ?></td>
                <td><?php echo $player->getNaam(); ?></td>
                <td><a href="<?php echo baseUrl('index.php/player/detail/' . $player->getid()); ?>">detail</a></td>
 
            </tr>
 
            <?php } ?>
    </table>       
<hr>

</div>
</body>
</html>