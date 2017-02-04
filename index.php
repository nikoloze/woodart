<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Wood Art</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>                                          

/**
 * Make an element's height equal to its width and sets an event handler to keep doing it
 * @param {string} element - Selector of the element to make square
 * @param {float} [ratio=1] - What ratio to keep between the width and height
 * @param {integer} [minLimit=0] - Only square the element when the viewport width is above this limit
 */
function squareThis (element, ratio, minLimit)
{
    // First of all, let's square the element
    square(ratio, minLimit);

    // Now we'll add an event listener so it happens automatically
    window.addEventListener('resize', function(event) {
        square(ratio, minLimit);
    });
    
    // This is just an inner function to help us keep DRY
    function square(ratio, minLimit)
    {
        if(typeof(ratio) === "undefined")
        {
            ratio = 1;
        }
        if(typeof(minLimit) === "undefined")
        {
            minLimit = 0;
        }
        var viewportWidth = window.innerWidth;
                                                   
            var newElementHeight = $('.effect-oscar').width() * ratio;
            $(element).height(newElementHeight);
            $(element).width(newElementHeight);
    }
}


$().ready(
function() {
	squareThis('.square-grid');
});
</script>

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="images/logo.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home">Home</a></li>
                 <li ><a href="#works">Works</a></li>
                 <li ><a href="#about">About</a></li>         
                 <li ><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->




<div id="home">
<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">     
      <div class="carousel-inner">
<?php
$thumbs = glob("images/slideshow/*.jpg");

if(count($thumbs)) {
  natcasesort($thumbs);
  $first = True;
  foreach($thumbs as $thumb) {
    ?>                                 
     <div class="item
<?php
   if ($first) {
   ?>
	active
<?php
      $first = False;
   }
?>
">
        <img src="<?php echo $thumb ?>" alt="banner">
    </div>
    <?php
  }
} else {
  echo "No images";
}                        
?>        
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left"></i></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right"></i></span></a>
    </div>
<!-- #Slider Ends -->
</div>                                                 
                               

<!-- works -->
<div id="works"  class=" clearfix grid"> 
<?php
$thumbs = glob("images/portfolio/*.jpg");

if(count($thumbs)) {
  natcasesort($thumbs);
  foreach($thumbs as $thumb) {
    ?>
    <figure class="effect-oscar  wowload fadeInUp">
        <img class="square-grid" src="<?php echo $thumb ?>" alt="img01"/>
        <figcaption>
            <a href="<?php echo $thumb ?>" data-gallery></a></p>            
        </figcaption>
    </figure>                 
<?php
  }
} else {
  echo "No images";
}                        
?>
       

     
</div>
<!-- works -->
                     

<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">About Us</h2>  
  <div class="row">
  <div class="col-sm-12 wowload fadeInLeft">
    <h4><i class="fa fa-camera-retro"></i> Introduction </h4>
    <p>Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs, lead by passionate and uber progressive team that lives and breathes design. Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs.</p>
  </div>
  </div>

</div>
<!-- #Cirlce Ends -->
                    
<div id="contact" class="spacer">



<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX">
	<a href="https://www.facebook.com/woodart.bynino/"><i class="fa fa-facebook fa-3x"></i></a>  
	<a href="https://www.instagram.com/_woodart__/"><i class="fa fa-instagram fa-3x"></i></a> 
	<i class="fa fa-phone fa-3x"></i>  +995 591117889
</p>                                                      
</div>

</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>                    
