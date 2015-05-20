<!DOCTYPE html>
<html>
	<head>
		<meta name = 'viewport' content ='width = device-width, initial-scale = 1, maximum-scale = 1, user-scalable = no' />
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700italic' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css' />
		<link rel='stylesheet' type = 'text/css' href='./style.css?ver=1' />
		<link rel='shortcut icon' type = 'image/png' href='./res/Logo.png' />
		<script type = 'text/javascript' src = 'jquery-min.js'></script>
		<script type = 'text/javascript' src = 'script.js?ver=1'></script>
		<title>Aditya Iyengar Yoga</title>
	</head>
	<body>
		<div id='main-container' >
			<header>
				<div id = 'headerContainer' class = 'span-12-of-12'>
					<nav>
						<div id = 'fixed-header-menu' class = 'span-12-of-12 menu section group'>						
							<img class = 'menu-bg' src = './res/MenuBar.png' />
							<div class = 'col span-1-of-5 menu-item'><a href="#container1"><img src = './res/home.png' />Home</a></div>
							<div class = 'col span-1-of-5 menu-item'><a href="#container3"><img src = './res/aboutUs.png' />About Us</a></div>
							<div class = 'posture-position pp1 menu-item col span-1-of-5'>
								<img class = 'p1' src = './res/posture/p1.png' />
								<img class = 'p2' src = './res/posture/p12.png' />
							</div>
							<div class = 'col span-1-of-5 menu-item'><a href="#container5"><img src = './res/contactUs.png' />Contact Us</a></div>
							<div class = 'col span-1-of-5 menu-item'><a href="#container2"><img src = './res/gallery.png' />Gallery</a></div>		
						</div>	
					</nav>

					<div class = 'section group'>					
						<div class='logo-name  span-3-of-12'>
							<img src = './res/LogoName.png' />
						</div>					
					</div>	
					<nav>
						<div id = 'header-menu' class = 'menu section group'>						
							<img class = 'menu-bg' src = './res/MenuBar.png' />
							<div class = 'col span-1-of-5 menu-item'><a href="#container1"><img src = './res/home.png' />Home</a></div>
							<div class = 'col span-1-of-5 menu-item'><a href="#container3"><img src = './res/aboutUs.png' />About Us</a></div>
							<div class = 'posture-position pp1 menu-item col span-1-of-5'>
								<img class = 'p1' src = './res/posture/p1.png' />
								<img class = 'p2' src = './res/posture/p12.png' />
							</div>
							<div class = 'col span-1-of-5 menu-item'><a href="#container5"><img src = './res/contactUs.png' />Contact Us</a></div>
							<div class = 'col span-1-of-5 menu-item'><a href="#container2"><img src = './res/gallery.png' />Gallery</a></div>		
						</div>	
					</nav>
				</div>
			</header>
			<section id = 'body-container'>

				<!--CONTAINER 1 START-->

				<section id = 'container1'>
					<div id = 'intro-img-container'>
						<img class="intro-img" src = './res/introImg2.jpg' />
						<img class="intro-img" src = './res/introImg2.jpg' />
						<img class="intro-img" src = './res/introImg2.jpg' />
						<img class="intro-img" src = './res/introImg2.jpg' />
					</div>
					
					<div id = 'intro-info' class = 'group text-container'>
						<div class = 'yoga_heading h1 italic'>What is yoga</div>
						<p>Yoga is based on one simple truth - <em>"mastery of the body is gateway to mastery of the mind"</em>. Awareness is the key to that gateway. Asana and pranayama are key tools of yoga to achieve the awareness needed to attain supreme bliss. 
						The intensity and depth of the asana has a proportional effect on the mind and spirit.<br/>
						Through asana, one learns application of ethics of life:
						<ul>
							<li>Yama-social ethics</li>
							<li>Niyama-personal disciplines</li>
						</ul>
					Pranayama is the essential pre-requisite for correct and true meditation. 
					If you thought that yoga was all about bending and twisting your body in odd shapes, it's time to rethink. 
					Yoga is much more. In very simple words, giving care to your body, mind and breath is yoga. This means that the century-old practice includes yoga postures (<em>asanas</em>), breathing techniques (<em>pranayamas</em>) and <em>meditation</em>. Through these, the body, mind and breath come in harmony with each other and that very moment yoga happens. 
					Yoga is the method by which the stressed mind is calmed and the energy directed into constructive channels
						</p>
						<div class = 'h3'><em>-Yogacharya B.K.S.Iyengar</em></div>
					</div>
				</section>
				<br/>
				
				<!--CONTAINER 2 START-->

				<section id = 'container2'>
					<div class = 'menu section group'>						
						<img class = 'menu-bg' src = './res/MenuBar.png' />						
						<div class = 'posture-position pp2 span-1-of-5'>
							<img class = 'p1' src = './res/posture/p2.png' />
							<img class = 'p2' src = './res/posture/p11.png' />
						</div>							
					</div>
					<div align = 'center'>
							<div id = 'photo-gallery-link' class = 'span-2-of-12 col selected-link'>Photo Gallery</div>
							<div class = 'span-1-of-12 col'>|</div>
							<div id = 'photo-gallery-link' class = 'span-2-of-12 col'>Video Gallery</div>
					</div>
					<div class = 'galleryToggle'>
						<div id = 'photoGallery' class = 'section group'>
							<div id = 'photoViewer' class = 'col span-10-of-12-as-1' align = 'center'>
								<img id = 'photoViewImg' src = './res/photogallery/AiyGallery0001.jpg' />
							</div>							
							<div id = 'photoListContainer' class = 'col span-2-of-12-as-1'>
								<div id = 'photoList'>

								</div>
							</div>
							<?php						
									$dirhandle = dir("./res/photogallery");
									$imageList = array();									
									$extArr = array("jpg","png");
									while(($fileh = $dirhandle->read())!= false)
									{
										if($fileh != "." && $fileh!=".."  && $fileh!= basename($_SERVER['PHP_SELF']) && !is_dir($fileh))
										{									
												
											$tmp = $fileh;
											$extValArr = explode(".",$tmp);
											$extVal = strtolower(end($extValArr));
											//echo $extVal;
											if(!in_array($extVal,$extArr))
											{										
												continue;
											}	
											array_push($imageList,$fileh);									
										}
									}								
								?>
								<script type = 'text/javascript'>
								var imgList = '<?php echo json_encode($imageList);?>',
								upperLimit = 0,
								imgListArr = JSON.parse(imgList),
								sectionLimit = 24,
								curLen = (imgListArr.length > sectionLimit) ? sectionLimit : imgListArr.length,
								curLoadedCount = 0,
								scrollStopFlag = false,
								appendStr = '';

								upperLimit = curLoadedCount + curLen;

								for(var i = curLoadedCount; i < upperLimit; i++){
									if(!(i%2)){

										appendStr+= '<div onclick = "selectThisPhotos(this)" class = "rowBeg span-1-of-2 generic-col photo-item"><img src = "./res/photogallery/'+imgListArr[i]+'" /></div>';
									}
									else{
										appendStr+= '<div onclick = "selectThisPhotos(this)" class = "generic-col span-1-of-2 photo-item"><img src = "./res/photogallery/'+imgListArr[i]+'" /></div>';
									}								
								}

								curLoadedCount += curLen;
								scrollStopFlag = (curLoadedCount >= imgListArr.length) ? true : false;
								$('#photoList').append(appendStr);
								</script>
						</div>
					</div>
				</section>

				<!--CONTAINER 3 START-->

				<section id = 'container3'>
					<div id = 'about-guruji' >
						<div class = 'menu section group'>						
							<img class = 'menu-bg' src = './res/MenuBar.png' />						
							<div class = 'posture-position pp3 span-1-of-5'>
								<img class = 'p1' src = './res/posture/p3.png' />
								<img class = 'p2' src = './res/posture/p10.png' />
							</div>							
						</div>
						<div class = 'group text-container'>
							<img class="display-photo" src="res/SirIyengarDp.jpg"/>
							<div class = 'h1'>About Guruji</div>
							<p>Guruji i.e. <span class = 'bold'>Bellur Krishnamachar Sundararaja (BKS) Iyengar</span> was born in a humble hamlet "Bellur" of Kolar district, Karnataka in South India in the year 1918. Through the blessings of his guru, T Krishnamacharya and immense dedication to the yogic way of life, he achieved the peaks of awareness that he set out to reach and also give direction to millions of lives that sought him to enable them to walk in to te universe of yoga. 
							</p>
							<br/>The iyengar method of yoga is known for its:
							<dl>
								<dt>Technique</dt>
								<dd>Fine and subtle adjustments to the postures to increase awareness.</dd>

								<dt>Sequence</dt>
								<dd>Order of the asanas to heighten the mental and emotional effects of the practice</dd>

								<dt>Timing</dt>
								<dd>Postures should not be done swiftly without awareness. It takes time to intensify the depth of the posture and to extract its benefits</dd>
							</dl>							
						</div>		
					</div>	
				</section>

				<!--CONTAINER 4 START-->

				<section id = 'container4'>
					<div id = 'about-institute' >
						<div class = 'menu section group'>						
							<img class = 'menu-bg' src = './res/MenuBar.png' />						
							<div class = 'posture-position pp4 span-1-of-5'>
								<img class = 'p1' src = './res/posture/p4.png' />
								<img class = 'p2' src = './res/posture/p9.png' />
							</div>							
						</div>
						<div class = 'group text-container'>
							<img class="display-photo" src="res/SirNarayanDp.JPG"/>
							<div class = 'h1'>About the institute</div>
							<p>The institute had a humble start with the blessings of the Guruji and a prayer to Pathanjali in the year 2002. 
								Aditya institute of Iyengar Yoga has devised a unique process of evaluation the physical body of the student when he or she is initiated into yoga 
								and identifying the general weakness that are specific to him/her. Focus on those weaknesses to help the progress of the student towards a 
								physically more comfortable and a mentally more confident identity. This has been made as a result of years of exhaustive experience 
								and a comprehensive knowledge of the effects of the modern lifestyle.
							</p>
								<br/><div class = 'h2'>Why us?</div>
								How we make a difference is by keeping the essence of yoga alive. Here is how we do that:<br>
								<ul>
									<li>We use uniquely designed props and techniques to suit modern needs of the human body.</li>
									<li>Offering not just regular art classes but unique and specialized classes.</li>
									<li>Flexible timings especially for housewives</li>
									<li>Special therapy programmes</li>									
								</ul>
								<p>								
								<div class = 'h3'>V Narayan</div>
								<div class = 'italic'>Founder of Aditya Institute of Iyengar Yoga</div>
								V Narayan who has been practicing in the iyengar metod of yoga for 27 years is the faculty at the institute, has kept the Iyengar method at its purest form and believes that the techniques of this method as the solutions to the ills of the modern world like stress, bad postures, low immunity, materialistic way of like to name a few. He believes that yoga is the antidote that most humans need to lead a preaceful and satisfying life. This main intention is to lead other people like how his way was led by Guruji in to the bliss of yoga and the immense satisfaction of being aware of oneself.	
								</p>							
						</div>		
					</div>	
				</section>

				<!--CONTAINER 5 START-->

				<section id = 'container5'>
				
					<div class = 'menu section group'>						
						<img class = 'menu-bg' src = './res/MenuBar.png' />						
						<div class = 'posture-position pp5 span-1-of-5'>
							<img class = 'p1' src = './res/posture/p5.png' />
							<img class = 'p2' src = './res/posture/p8.png' />
						</div>							
					</div>
					<div class = 'group text-container'>
						

						<div id = 'contact-information-section' class = 'span-8-of-12-as-0 section group'>
						Contact Info:
						<div class = 'clearFix'></div>
						<div class='contactLabels col'>
							Email:
							<br />Mobile:
							<br />Location:
						</div>
						<div class = 'contactInformations col'>
							<span class = 'contactInfo'>info@adityaiyengaryoga.com</span>
							<br /><span class = 'contactInfo'>+91-9845615277</span>
							<br /><span class = 'contactInfo'>1st main road,Prashanth Nagar, Nagarbhavi main road, Vijayanagar, Bengaluru- 560040</span>
						</div>
						
						<hr/>
						</div>
						Kindly enter your email and send your suggestions/queries.
						</br>Your Email:
						</br><input type="textbox" id="sugMail" style="width: 35%; height: 38.4px;">
						</br>Suggestion/query:
						</br><textarea id="sugBody" style="width: 60%; height: 115.2px;"></textarea>
						<div class="btn">Suggest</div>
						</br>											
																	
					</div>		
						
				</section>

				<!--CONTAINER 6 START-->

				<section id = 'container6'>
				
					<div class = 'menu section group'>						
						<img class = 'menu-bg' src = './res/MenuBar.png' />						
						<div class = 'posture-position pp6 span-1-of-5'>
							<img class = 'p1' src = './res/posture/p6.png' />
							<img class = 'p2' src = './res/posture/p7.png' />
						</div>							
					</div>
					<div id = 'closing-image'>
						
						<img id = 'closingImageOfYoga' src = './res/closingImage.png' />		<!-- May be a collage, or a beautiful scenary and BKS sir`s saying on it -->
																	
					</div>		
						
				</section>

			</section>
			<footer>
			</footer>
		</div>
		
	</body>
</html>