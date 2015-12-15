<?php 
include "conn.php";
?><!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pay Tribute to APS Victims</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<head>
<style>
@font-face { font-family: Cutie; src: url('fonts/Cutie Patootie.ttf'); } 
#customFont {
font-family: Cutie
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files --> 
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:200,300,600,400,700,900' rel='stylesheet' type='text/css'>
<!--- banner Slider starts Here --->  
  	
<style type="text/css">
.fblikes {width:692px;height:108px;overflow:hidden;position:relative;left:5px;bottom:-10px;}
.fblikes #iframe {position:absolute;top:-97px;left:-8px;width:600px;height:400px;}
</style> 
  <script src="js/iosOverlay.js"></script>
  <script src="js/spin.min.js"></script>
  <script src="js/custom.js"></script>    
  
  <link rel="stylesheet" href="css/iosOverlay.css"> 
  <link href="css/script.css" rel="stylesheet" type="text/css" media="all" />
 
 
<div id="fb-root"></div>    
 <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '380143658776729',
      xfbml      : true,
      version    : 'v2.5'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));  
 
  var auth = "", kkk=0; 
  function PayTribute()
  {
    	 
    	FB.login(function(response) 
    	{
      		if (response.authResponse) 
      		{
        		if(!kkk) {
        		auth = response.authResponse;
		          kkk=1; 
       			 }
       			  
		          all();
      		}
      		else 
      		{
        		all();
     		}
    	}
             , { scope: 'email'}
             , { display: 'popup'}
            );
  } 
  var myDp;
  var myName;
 
  var email;
   function getEmail(){
         
  	
  }
  function all()
  { 
  FB.api('me?fields=email', function(response) { 
  	 
	      email = response["email"] ;
	
 	     
    	FB.api('me?fields=name,picture.type(large)', function(response) { 
  	 
	      myDp = response.picture.data["url"];
	      myName = response["name"];   
		 $.ajax({
		    type: 'POST',
		    // make sure you respect the same origin policy with this url:
		    // http://en.wikipedia.org/wiki/Same_origin_policy
		    url: 'saveresponse.php',
		    data: {  
		        'var1': myName,
		        'var2': email,
		        'var3': myDp
		        
		    },
		    success: function(msg){
		    	uid  = msg;  

		    	updateValue(uid) 
	    		}
		}); 
	}); 
	        
	}); 
   }
   var url;
   var pic2; 
   var name2; 
   
   function updateValue(uid)
   {  
   	var  tributors= uid;  
	    	document.getElementById('imgId').style.width = '550px';
	    	document.getElementById("tributors").innerHTML = "<center><div id='customFont'><span style='font-size:  xx-large; color:#043d5d;' id='tributors'><b>Tributes Given:</b> "+ tributors+"<br/>Thank you for your response!</div></center>"; 
	    	console.log(tributors); 
   }
     
  </script>
   
</head>  
<audio autoplay loop>
      <source src="bg.mp3">
</audio>
<body style="background-image:url(images/bg.jpg);background-repeat: y-repeat; >    
<!--- Header Starts Here -->
		 
	<!--- Header Ends Here --> 
	<!-- Banner Starts Here --->
	<div class="banner">
		<div class="container">
		<!-- Slideshow 4 -->
		    <div  id="top" class="callbacks_container">
			        	<center><div class="container">
			<h3 class="top-head"> </h3>
			<center><span class="line">
				<span class="sub-line"></span>
			</span><br> 
 <center><span id="customFont" style="font-size: xx-large; color:#043d5d;"><b> Pay Tribute to APS Victims 12/16/2014</span> </center>
							<center>
							
								<div class="step1" id="step"><br>
								<a id="loadToSuccess" href="#" onClick="PayTribute()" ><button>Pay Tribute to APS Victims</button></a>

								</div>
							
							
							</center><br> 
        <div id="aboveIframeDiv" style="padding:4px;width:563px;height:289px;margin:0 auto;box-shadow:0px 0px 10px #000;border:0px solid #888">
        	 <center><img id='imgId' width='550' height='280' src='images/frame.jpg'/></center>  
	        	<center><div id="customFont"><span style='font-size:  xx-large; color:#043d5d;' id='labelid'><b>We have not forgotten you...</b></div></center> 		 
       <center> <span style='font-size:  xx-large; color:#043d5d;' id="customFont">December 16, 2014.</div><br/><br/><br/><br/>
<center><div id="customFont"><span style='font-size:  xx-large; color:#043d5d;' id='tributors'><b>Tributes Given:</b> <?php $count = mysql_num_rows(mysql_query("select * from tributors"));  	
        echo $count;
        ?> </div></center> 
</span></center> 		 
        </div>
					</div>
					 </div>
			<!-- End Of Slider -->
		</div>
	</div>
	  <div id="fb-root"></div>
<script>
function shareOnFacebook(pic)
    {   
    console.log(pic); 
FB.ui({ 
  method: 'share',   
  href: 'http://myhomeprogress.com/FB/peshawarattack/'+pic,
  picture: 'http://myhomeprogress.com/FB/peshawarattack/'+pic,
  caption: '#Peshawar Attack'
  
}, function(response){});
 
}
 
 </script>

<div align="right">
Developed by:<Br/> <div class="fb-follow" data-href="https://www.facebook.com/shahwaiz90" data-layout="button_count" data-show-faces="false"></div></div>
</body>
</html>
