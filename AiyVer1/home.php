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
						<h3>What is yoga?</h3>
						Yoga is based on one simple truth, mastery of the body is the gateway to mastery of the mind. Awareness is the key to that gateway. Asana and pranayama are the key tools of yoga to acieve the 
						awareness is the key to that gateway. Asana and pranayama are the key tools of yoga to achieve the awareness needed to attain supreme bliss. The intensity and depth of the asana has a proportional effect
						on the mind and spirit. Through asana, one learns application of ethics of life: Yama-social ethics and Niyama-personal disciplines.
						<br/>Pranayama is the essential prerequisite for correct and true meditation.
						<br/><br/>
						If you thought that yoga was all about bending and twisting your body in odd shapes, it's time to rethink. 
						Yoga is much more. In very simple words, giving care to your body, mind and breath is yoga. 
						This means that the century-old practice includes yoga postures (asanas), breathing techniques (pranayamas) and meditation. 
						Through these, the body, mind and breath come in harmony with each other and that very moment yoga happens.
						<br/>Yoga is the method by which the stressed mind is calmed and the energy directed into constructive channels- Yogacharya B.K.S.Iyengar
						<br/><br/>The problems addressed are:<br/>
						<ul>
							<li>Stress</li>
							<li>Diabetes</li>
							<li>Hypertension</li>
							<li>Thyroid problems</li>
							<li>Spinal problems</li>
							<li>Menstrual disorders</li>
							<li>Other ailments</li>
						</ul>
						
					</div>
				</div>
				
			</div>
		</div>
	</body>
</html>
