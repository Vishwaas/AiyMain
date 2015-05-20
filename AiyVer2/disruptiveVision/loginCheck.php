<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile Information</title>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="underscore-min.js"></script>
<script type="text/javascript" src="backbone-min.js"></script>
<script type="text/javascript">
	var viewClass = Backbone.View.extend({		
		render:function()
		{				
			$("#userid").html(modelObj.get("socialId"));
			document.getElementById("name").innerHTML = modelObj.get("name");		
			$("#infoCont").slideDown("slow");
		}
		
	});
	
	var modelClass = Backbone.Model.extend({		
		defaults:
		{
			socialId:"user id",			
			name:"user name",
			
		}			
	});
	
	var modelObj = new modelClass();
	var viewObj = new viewClass();
	
	viewObj.listenTo(modelObj,"change",viewObj.render);		//adding a listen to model. Once changed the render function is called
	
	function login()		//This callback handles facebook login and then fetching information and adding it to model
	{
		if($("#emailId").val()=="")
		{
			alert("Kindly enter your email address");				//validation of email format not done
			$("#infoCont").slideUp("slow");
			return;
		}
		FB.getLoginStatus(function(response) 
		{			
			
			if (response.status === 'connected' && response.status != 'not_authorized') 		//If already logged in and authorized then fetch information
			{
					alert("Access token:"+response.authResponse.accessToken);
				document.getElementById("status").innerHTML = "Connection already exists";
				FB.api('/me', function(response) 
				{
						//alert("Access token inside api:"+response.authResponse.accessToken);
					modelObj.set("name",response.name);
					modelObj.set("socialId",response.id);					
				}); 
				
			} 
			else if (response.status === 'not_authorized')		//If logged in but not authorized request user to authenticate before proceeding
			{
				document.getElementById("status").innerHTML = " Authentication not provided, kindly login again and provide authorization for the app";
				$("#infoCont").slideUp("slow");
				
				FB.login(function(response) 
				{
					if (response.authResponse)
					{			
						alert("Access token:"+response.authResponse.accessToken);
						document.getElementById("status").innerHTML = "Logged in successfully";
						FB.api('/me', function(response) 
						{
							modelObj.set("name",response.name);
							modelObj.set("socialId",response.id);	//you need private extended permission for birthday, age etc						
			
						}); 
					} 
					else
					{			
						document.getElementById("status").innerHTML = "Could not log in";	
$("#infoCont").slideUp("slow");						
					}
				},
				{scope: 'email,user_about_me',auth_type: 'reauthenticate'}
				);
				//alert("Kindly login again and provide authorization for the app");
			}
			else			//If not logged in then log in and fetch information
			{
				FB.login(function(response) 
				{
					if (response.authResponse)
					{		
						alert("Access token:"+response.authResponse.accessToken);
						document.getElementById("status").innerHTML = "Logged in successfully";
						FB.api('/me', function(response) 
						{
							modelObj.set("name",response.name);
							modelObj.set("socialId",response.id);	//you need private extended permission for birthday, age etc							
						
						}); 
					} 
					else
					{			
						document.getElementById("status").innerHTML = "Could not log in";	
$("#infoCont").slideUp("slow");						
					}
				},
				{scope: 'email,user_about_me'}
				);
			}
		});
		
	}
</script>
<style type="text/css">
body *
{
	font-family: 'Roboto Condensed', sans-serif;
	color:rgb(50, 50, 50); 
	line-height:1.5em;
	font-size:1.05em;
} 

#bgCont
{
	position:fixed;
	z-index:-2000;
	width:110%;
	height:2000px;
	left:-5%;
	top:-5%;
	background-size:100% 100%;
	background-repeat:no-repeat;
	background-image:-webkit-linear-gradient(top,rgba(69,97,157,0.8) 0%,rgba(99,127,187,0.8) 100%);
	background-image:-moz-linear-gradient(top,rgba(69,97,157,0.8) 0%,rgba(99,127,187,0.8) 100%);
	background-image:-ms-linear-gradient(top,rgba(69,97,157,0.8) 0%,rgba(99,127,187,0.8) 100%);
	background-image:-o-linear-gradient(top,rgba(69,97,157,0.8) 0%,rgba(99,127,187,0.8) 100%);
	background-image:linear-gradient(top,rgba(69,97,157,0.8) 0%,rgba(99,127,187,0.8) 100%);
}

#mainCont
{
	position:absolute;
	border:0px solid rgb(50,50,200);
	width:40%;
	left:30%;
	top:200px;
	padding:20px;
	
	background-color:rgba(220,220,220,0.4);
	
	-webkit-box-shadow:inset 1px 1px 2px 2px rgba(39,67,97,0.8), inset -1px -1px 2px 2px rgba(39,67,97,0.8);
	-moz-box-shadow:inset 1px 1px 2px 2px rgba(39,67,97,0.8), inset -1px -1px 2px 2px rgba(39,67,97,0.8);
	-ms-box-shadow:inset 1px 1px 2px 2px rgba(39,67,97,0.8), inset -1px -1px 2px 2px rgba(39,67,97,0.8);
	-o-box-shadow:inset 1px 1px 2px 2px rgba(39,67,97,0.8), inset -1px -1px 2px 2px rgba(39,67,97,0.8);
	box-shadow:inset 1px 1px 2px 2px rgba(39,67,97,0.8), inset -1px -1px 2px 2px rgba(39,67,97,0.8);
	
	-webkit-border-radius:7px;
	-moz-border-radius:7px;
	-ms-border-radius:7px;
	-o-border-radius:7px;
	border-radius:7px;
}

.beLeft
{
	float:left;
}
.beRight
{
	float:right;
}
</style>
</head>

<body>
<div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '354644071343397',
		 // channelUrl : '//localhost:8080/project/backbone/proj3/loginCheck.php',
		  channelUrl : 'http://www.adityaiyengaryoga.com/disruptiveVision/loginCheck.php',		//make sure when you are entering in browser address bar it is exactly same as this and in developers/facebook.com i.e. have http://www.adit----- dont forget http://www especially www
          status     : true,
          xfbml      : true
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/all.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
	<div id="bgCont"></div>
	
	<div id="mainCont" align="center">
    	<div class="beLeft" >Enter your facebook email:&nbsp;&nbsp;&nbsp;</div> 
		<input type="email" id="emailId" class="beRight" value="" />
        <br/><br/>
		
        <div class="beLeft" id="status" style="text-decoration:underline;"></div> 
		<input onclick="login()" id="getInfo" type="button" value="Get Info" class="beRight"/>
        <br/><br/>
		
		<!-- InfoCont contains information to be shown -->
		<div id="infoCont" style="display:none;">				
			<div class="beLeft">Name:&nbsp;&nbsp;&nbsp;</div>
			<div class="beRight" id="name" ></div> 
			<br/><br/>       
			
		    <div class="beLeft">User Id:&nbsp;&nbsp;&nbsp;</div>
			<div class="beRight" id="userid"></div> 
		</div>
     </div>
</body>
</html>
