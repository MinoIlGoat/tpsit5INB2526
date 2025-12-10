<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" media="all" rel="stylesheet">
    <link href="../css/custom.css" media="all" rel="stylesheet">
  </head>

  <body>
     <?php 
       include 'parsing.php'; 
       $config = parser(); 
       $header = $config['header']; 
       $footer = $config['footer']; 
       $menu   = $config['menu']; 
       $title  = $config['title'];
     ?> 

    <div class="container-fluid vh-100">

        <div class="row text-center" style="background-color:#003B3A; color:white; height: 10%">
            <?php require('files/header.php'); ?>
        </div> 

        <div class="row" style="color:white; height: 80%;">
            <div class="col-md-2" style="background-color:#0D1B2A; border-right: 1px solid #455465;">
                <?php require('files/menu.php'); ?>
            </div>

            <div class="col-md-10" style="background-color:#0D1B2A;">
                <?php require('files/body.php'); ?>                 
            </div>
        </div>

        <div class="row text-center" style="background-color:#003B3A; color:white; height: 10%">
            <?php require('files/footer.php'); ?>   
        </div>
    </div>
  </body>
</html>