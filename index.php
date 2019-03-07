<!DOCTYPE html>
<html>
<head>
	
<title>Humanity a Society & People Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Humanity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script src="js/angular.min.js"></script>
		<script src="js/angular-route.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
<style>
			.std_loadingBackground {
    font-family: Verdana,Arial;
    filter: Alpha(Opacity=30);
    -moz-opacity: .3;
    opacity: .6;
    width: 100%;
    height: 1000px;
    background-color: #000;
    position: fixed;
    z-index: 500;
    top: 0;
    left: 0;

}
.std_modalContainer {
    position: fixed;
    left: 40%;
    top: 40%;
    z-index: 750;
    background-color: #f2f4f5;
    padding: 6px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    box-shadow: 5px 5px 5px rgba(0,0,0,.3);
    /*border: 0 solid #d0d0d0;*/
     border: 3px solid rgb(170, 0, 0)
    -webkit-box-shadow: 5px 5px rgba(0,0,0,.3);
    -moz-box-shadow: 5px 5px rgba(0,0,0,.3);

}
.std_processing {
 font-family: Verdana,Arial;
    text-align: center;color: rgb(0, 0, 0);
    padding: 15px 15px 0 15px;
    width: 40%;
    /*border: 'none',
    padding: '15px',
    backgroundColor: '#000',
    '-webkit-border-radius': '10px', 
    '-moz-border-radius': '10px',
    opacity: .5,
    color: '#fff'
    /* border: 'none', 
            padding: '15px', 
            backgroundColor: '#000', 
            '-webkit-border-radius': '10px', 
            '-moz-border-radius': '10px', 
            opacity: .5, 
            color: '#fff'*/
}
		</style>
</head>
<body ng-app="myapp">
	
<div ng-include="'views/socialhead.html'"></div>
<div ng-include="'views/Menu.html'"></div>
	<div data-loading> </div>
	<div class="ng-view"></div>
	<div ng-include="'views/footer.html'"></div>
</body>
</html>