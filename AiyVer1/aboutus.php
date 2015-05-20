<!DOCTYPE html>
<html>
	<head>
		<title>Aditya Iyengar Yoga</title>
		<script type="text/javascript">
		var uA = navigator.userAgent.toUpperCase();
		if(uA.indexOf("MSIE")!=-1 && !uA.indexOf("MSIE 10")!=-1)
		{
			alert("This webpage is not supported by Internet explorer versions below 10. Kindly use other browsers");
			//window.stop(); //should work in all major browsers
			document.execCommand("Stop"); //is necessary to support IE
		}	
			var refH= 768;//screen.height;
			var refW = 1366;//screen.width;
		</script>
		<link rel="stylesheet" href="style/mainStyleAditya.css" type="text/css" />
		<link rel="shortcut icon" href="res/titleImage.png" type="image/png" />
		<script type ="text/javascript" src="js/jquery.js"></script>				
		<script type ="text/javascript" src="js/mainJsAditya.js"></script>	
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
	</head>
	<body onload="onLoad()">
	<div id= "bgCont">	
	<script type="text/javascript">
			$("#bgCont").css({"height":screenComparePercentHeight(110),"width":screenComparePercentWidth(110),"left":-screenComparePercentWidth(5),"top":-screenComparePercentHeight(5)});
	if(screen.width>$("#bgCont").width())
	{
		var leftVal = (screen.width-$("#bgCont").width())/2;
		$("#bgCont").css({"left":leftVal});						
	}
	if(screen.height>$("#bgCont").height())
	{
		/* var topVal = (screen.height-$("#bgCont").height())/2;
		$("#bgCont").css({"top":topVal}); */
		var bgHt = (110*screen.height)/100;
		$("#bgCont").css({"height":bgHt});
	}
	</script>
	</div>
		<div id="mainCont" >
		<script type="text/javascript">
			$("#mainCont").css({"width":screenComparePercentWidth(100)});
			$("#mainCont").css({"height":screenComparePercentHeight(100),"top":0});
			
			if(screen.width>$("#mainCont").width())
			{
				var leftVal = (screen.width-$("#mainCont").width())/2;
				//$("#mainCont").css({"overflow-x":"auto","left":leftVal});			//overflow-x not working properly with safari				
				$("#mainCont").css({"left":leftVal});						
			}
		</script>
			
			<div id="bodyCont" class="roundEdge" >				
			<script type="text/javascript">
				$("#bodyCont").css({"min-height":screenComparePercentHeight(100),"top":screenComparePercentHeight(5)});					
			</script>
			<div id="bodyContBg" ></div>
				<div id="headerCont">
				<script type="text/javascript">
					$("#headerCont").css({"height":screenComparePercentHeight(50)});					
				</script>
					<div id="logoCont" align="center">
						<img src="res/logo.png" />
					</div>
												<!-- Top row start -->		
					<div class="circle end1" style="left:1%;top:2%;" align="center">
						<img class = "circleImg" id="circleImg0" src="res/p1.png" style="" onload="imgLoad(this)"/>
					</div>
					<div class="circle mid1" style="left:22%;top:2%;" align="center">
						<img class = "circleImg" id="circleImg1" src="res/p2.png" style="" onload="imgLoad(this)"/>
					</div>
					<div class="circle horCenter" style="top:2%;" align="center">
						<img class = "circleImg" id="circleImg2" src="res/p3.png" style="" onload="imgLoad(this)"/>
					</div>
					<div class="circle mid2" style="right:22%;top:2%;" align="center">
						<img class = "circleImg" id="circleImg3" src="res/p4.png" style="" onload="imgLoad(this)"/>
					</div>
					<div class="circle end2" style="right:1%;top:2%;" align="center">
						<img class = "circleImg" id="circleImg4" src="res/p5.png" style="" onload="imgLoad(this)"/>
					</div>
					
												<!-- Top row end -->
												<!-- Middle row start -->
					<div class="circle vMid2" style="right:1%;top:40%;" align="center">
						<img class = "circleImg" id="circleImg5" src="res/p6.png" style="" onload="imgLoad(this)"/>
					</div>							
					<div class="circle vMid1" style="left:1%;top:40%;" align="center">
						<img class = "circleImg" id="circleImg6" src="res/p7.png" style="" onload="imgLoad(this)"/>
					</div>		
												<!-- Middle row end -->
					
												<!-- bottom row start -->
					<div class="circle end2" style="left:1%;bottom:-5%;" align="center">
						<img class = "circleImg" id="circleImg7" src="res/p8.png" style="" onload="imgLoad(this)"/>
					</div>
					<div class="circle mid2" style="left:22%;bottom:-5%;" align="center">
						<img class = "circleImg" id="circleImg8" src="res/p9.png" style="" onload="imgLoad(this)"/>
					</div>
					<div class="circle horCenter" style="bottom:-5%;" align="center">
						<img class = "circleImg" id="circleImg9" src="res/p10.png" style="" onload="imgLoad(this)"/>
					</div>
					<div class="circle mid1" style="right:22%;bottom:-5%;" align="center">
						<img class = "circleImg" id="circleImg10" src="res/p11.png" style="" onload="imgLoad(this)"/>
					</div>
					<div class="circle end1" style="right:1%;bottom:-5%;" align="center">
						<img class = "circleImg" id="circleImg11" src="res/p12.png" style="" onload="imgLoad(this)"/>
					</div>				
												<!-- bottom row end -->
											
												
					<script type="text/javascript">		
						$(".circle").css({"width":screenComparePercentWidth(8),"height":screenComparePercentWidth(8)});	//even height shud be w.r.t to screen width since height and width shud be same for circle
						for(var i = 0; i< $(".horCenter").size(); i++)
						{
							var tmpCL = (parseInt($(".horCenter").eq(i).parent().width()) - parseInt($(".horCenter").eq(i).width()))/2;
							$(".horCenter").eq(i).css({"left":tmpCL});
						}						
						var curItem = 0;
						$(".circle").fadeIn("slow");
						var appearTimeInterval = setInterval(appearPostures,500);
						
					</script>
					
				</div>
				<br/><hr>
				<!--div id="menuCont">
				<script type="text/javascript">
					$("#menuCont").css({"height":screenComparePercentHeight(5)});					
				</script>
					<div class="menuBlock" align="center">Home</div>
					<div class="menuBlock" align="center">Gallery</div>
					<div class="menuBlock" style="border:none;" align="center">About Us</div>
				</div-->
				<div id="contentCont">
				<script type="text/javascript">
					$("#contentCont").css({"min-height":screenComparePercentHeight(50)});					
				</script>
					<div id="menuCont">
						<div class="menuBox" id="menuBox1">
							<img src="res/home.png" />
							<div class="menuBoxName">Home</div>
						</div>
						<script type="text/javascript">
							$("#menuBox1").click(function(){window.location="home.php";});
						</script>
						<div class="menuBox" id="menuBox2">
						<script type="text/javascript">							
							$("#menuBox2").mouseenter(function(){slideGalleryMenu();});
							$("#menuBox2").mouseleave(function(){slideGalleryMenuRemove();});
						</script>
							<img src="res/gallery.png" />
							<div class="menuBoxName">Gallery</div>	
							<div class='slideMenu orangeGrad' id='slideMenu0'>
								<div id="photosBut" class='inlineBlockPart innerMenu roundEdge embed'>
									<span>Photos</span>
								</div>
								<div id="vidoesBut" class='inlineBlockPart innerMenu roundEdge embed'>
									<span>Videos</span>
								</div>
							</div>							
						</div>
						<div class="menuBox" id="menuBox3" >	
						<script type="text/javascript">							
							$("#menuBox3").mouseenter(function(){slideAboutMenu();});
							$("#menuBox3").mouseleave(function(){slideAboutMenuRemove();});
						</script>
							<img src="res/aboutus.png" />
							<div class="menuBoxName">About Us</div>
							<div class='slideMenu orangeGrad' id='slideMenu1'>
								<div id="gurujiBut" class='inlineBlockPart innerMenu roundEdge embed'>
									<span>Guruji</span>
								</div>
								<div id="instituteBut" class='inlineBlockPart innerMenu roundEdge embed'>
									<span>Institute</span>
								</div>
							</div>							
						</div>
						<div class="menuBox" id="menuBox4">						
							<img src="res/contactus.png" />
							<div class="menuBoxName">Contact Us</div>
						</div>
						<script type="text/javascript">
							$("#menuBox4").click(function(){window.location="contactus.php";});
							$(".menuBox").css({"height":screenComparePercentHeight(12),"margin-top":screenComparePercentHeight(2)});		
							$(".innerMenu").click(function(){handleInnerMenuClicked(this);});
						</script>
					</div>
					<div id="textCont">
					<script type="text/javascript">
						$("#textCont").css({"min-height":screenComparePercentHeight(45),"margin-top":screenComparePercentHeight(2)});								
					</script>
						The institute had a humble start with the blessings of the Guruji and a prayer to Pathanjali in the year 2002.
						Aditya institute of Iyengar Yoga has devised a unique process of evaluation the physical body of the student when he or she is initiated into yoga
							and identifying the general weakness that are specific to him/her.
							Focus on those weaknesses to help the progress of the student towards a physically more comfortable and a mentally more confident identity. This has been
							made as a result of years of exhaustive experience and a comprehensive knowledge of the effects of the modern lifestyle
						<br /><br /><h3 style="line-height:1.5px;">Why us?</h3>
						How we make a difference is by keeping the essence of yoga alive. Here is how we do that:<br/>
						<ul>
							<li>We use uniquely designed props and techniques to suit modern needs of the human body.</li>
							<li>Offering not just regular art classes but unique and specialized classes.</li>
							<li>Special therapy programmes</li>
							<li>Flexible timings especially for housewives</li>
						</ul>
						<br/><hr >
						<div name ="dp1" style="min-height:150px;width:100%;">
							<div style="float:left;left:2.5%;position:relative;">
								<img src="res/dp1.jpg" width="150px" height="150px" />
							</div>
							<div style="float:left;width:5%;height:150px;"></div>
							<div>
								<div style="font-size:20px;color:rgb(238, 124, 69);">V Narayan</div>
								<span style="font-style:italic;">Founder of Aditya Institute of Iyengar Yoga</span><br/>
								<br /> V Narayan who has been practicing in the iyengar metod of yoga for 27 years is the faculty at the institute, has kept the Iyengar method at its purest form and believes that the techniques
						of this method as the solutions to the ills of the modern world like stress, bad postures, low immunity, materialistic way of like to name a few. 
						He believes that yoga is the antidote that most humans need to lead a preaceful and
						satisfying life. This main intention is to lead other people like how his way was led by Guruji in to the bliss of yoga and the immense satisfaction of being aware of oneself.
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</body>
</html>
