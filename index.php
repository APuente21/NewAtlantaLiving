<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Atlanta Blog</title>
        <meta charset="utf-8"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/NewAtlantaLiving.css"/>
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet">  
    </head>
    <body>
        <!--|||||||||||||||||||||||||||||||CONTAINER FOR NAV and HEADER|||||||||||||||||||||||||||||||||| -->
        <div class="container">
            <h1 class="text-uppercase"><a href="http://newatlantaliving.com/">New<span class="text-danger"> Atlanta</span> Living</a></h1>
        </div>
        <div style="background-color: black; color: white;">
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <h2 class="discover-h2">Come Discover Atlanta</h2>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav nav-pills navbar-right">
                            <li id="nav-item"><a href="post/About.php" class="text-uppercase" >About</a></li>
                            <li><a href="#" class="text-uppercase">Neighborhood Watch</a></li>
                            <li><a href="gallery/index.php" class="text-uppercase">Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--|||||||||||||||||||||||||||||||CONTAINER FOR NAV and HEADER|||||||||||||||||||||||||||||||||| -->
        
        <!--|||||||||||||||||||||||||||||||CONTAINER FOR THUMB||||||||||||||||||||||||||||||||||||||||||| -->
        <div class="container">
            <div class="row post-thumb div-bord-color-container polaroid">
                <div class="col-xs-6 col-md-3 text-center">
                    <div class="thumbnail">
                        <a href="gallery/index.php">
                          <img src="img/Silver%20Comit%20Trail.jpg" class="img-responsive" alt="Responsive image">
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 text-center">
                    <div class="thumbnail">
                        <a href="gallery/index.php">
                          <img src="img/veggie_thumb.jpg" alt="...">
                        </a>
                    </div>
                </div>
            </div>
             
        </div>
        <!--|||||||||||||||||||||||||||||||CONTAINER FOR THUMB||||||||||||||||||||||||||||||||||||||||||| -->
        
                         
        <div class="container">
            <div class="row">
                <!--|||||||||||||||||||||||||||||||CONTAINER FOR POSTS||||||||||||||||||||||||||||||||||||||||||| -->
                <div class="col-md-8 post">
                    <?php include("thumb/thumb3.php");?>
                    <?php include("thumb/thumb2.php");?>
                    <?php include("thumb/thumb1.php");?>
                </div>
                
                <!--|||||||||||||||||||||||||||||||CONTAINER FOR POSTS||||||||||||||||||||||||||||||||||||||||||| -->
                
                <!--|||||||||||||||||||||||||||||||CONTAINER FOR SIDE PANEL|||||||||||||||||||||||||||||||||||||| -->
                <div class="col-md-offset-1 col-md-3 side-panel">
                    <div>
                        <h4 class="text-center">Who Is Behind The Blog</h4>
                        <hr>
                        <a href="post/About.php"><img src="img/newMe.jpg" class="img-responsive" alt"me"></a>
                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <?php include("tags.php");?>
                      <?php include("neighborhood-tags.php");?>
                    </div>
                </div>
                <!--|||||||||||||||||||||||||||||||CONTAINER FOR SIDE PANEL|||||||||||||||||||||||||||||||||||||| -->
                
            </div>
        </div>
        
        <!--|||||||||||||||||||||||||||||||CONTAINER FOR FOOTER|||L|||||||||||||||||||||||||||||||||||||| -->
        
        <?php include("footer.php");?>
        <!--|||||||||||||||||||||||||||||||CONTAINER FOR FOOTER|||L|||||||||||||||||||||||||||||||||||||| -->
        
    </body>
</html>