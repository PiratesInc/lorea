<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Loreal Voyage</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>


        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/flexslider.css">
        <link rel="stylesheet" href="./css/main.css">
        

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="./js/vendor/bootstrap.js"></script>
        <script src="./js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="http://flexslider.woothemes.com/js/jquery.flexslider.js"></script>
		<script type="text/javascript" charset="utf-8">
		    $(function(){
		      SyntaxHighlighter.all();
		    });
		    $(window).load(function(){
		      $('#carousel').flexslider({
		        animation: "slide",
		        controlNav: false,
		        animationLoop: false,
		        slideshow: false,
		        itemWidth: 100,
		        itemMargin: 5,
		        asNavFor: '#slider'
		      });
		      
		      $('#slider').flexslider({
		        animation: "slide",
		        controlNav: false,
		        animationLoop: false,
		        slideshow: false,
		        sync: "#carousel",
		        start: function(slider){
		          $('body').removeClass('loading');
		        }
		      });
		    });
  		</script>


    </head>
    <body>

