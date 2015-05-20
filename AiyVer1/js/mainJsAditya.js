var galleryArr = ["Photos", "Videos"];

function bodyAdjustment()
{
	var onLoadBodyHt = parseInt($(document).height());
	$("#bodyCont").css({"height":onLoadBodyHt});
}

function alignmentAdjustment()
{
	for(var i= 0;i<$(".imgCont").length;i++)
	{										
		//var leftP = (parseInt($(".imgCont").eq(i).width()) - parseInt($(".imgCont").eq(i).find("img").width()))/2; //left not needed since it is center aligned
		var topP = (parseInt($(".imgCont").eq(i).height()) - parseInt($(".imgCont").eq(i).find("img").height()))/2;
		//alert("Image"+i+"Is left:"+leftP+"And"+"is top:"+topP);
		$(".imgCont").eq(i).find("img").css({"top":topP});							
	} 
}

function onLoad()
{	
	bodyAdjustment();	
	//alignmentAdjustment()
}

function screenComparePercentWidth(val)
{	
	return (val*refW)/100;
}

function screenComparePercentHeight(val)
{
	return (val*refH)/100;
}

/* var appearPostureInterval = "";
function appearPosturesCircle()
{
	$(".circle").eq(curItem).fadeIn("fast");
	if(curItem ==11)
	{
		clearInterval(appearTimeInterval);
		curItem = (curItem+1)%12;
		appearPostureInterval = setInterval(appearPostures,1000);
	}
	else
	{
		curItem = (curItem+1)%12;
	}						
	//imgLoad($(".circle").eq(curItem).children().eq(0));
} */

function suggest()
{	
	var xmlhttp;
	
	if(window.XMLHttpRequest)
		xmlhttp = new XMLHttpRequest();
	else
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

	xmlhttp.onreadystatechange = function()
	{
		//alert("onreadyand state="+xmlhttp.readyState+"&status="+xmlhttp.status);
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				
				//alert("success:"+xmlhttp.responseText);
				$("#busy").hide();
				if(xmlhttp.responseText=="1")
				{
					alert("Thank you for your suggestion");
				}
				else
				{
					alert("suggestion not sent kindly resend it");
				}
			}
			else
			{
				//alert("fail");
			}
	}
	//alert("send");//+document.getElementById("sug").value);
	$("#busy").show();
	//xmlhttp.open("POST","/cartworld/sendSuggestion.php",true);	
	xmlhttp.open("POST","sendSuggestion.php",true);		//for actual server on godaddy dont include /cartworld/
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("subject=Suggestion from c-artworld school&body="+document.getElementById("sug").value);
}

function slideGalleryMenu()
{
	/* var temp = "<div class='slideMenu orangeGrad' id='slideMenu0'><div id="vidoesBut" class='inlineBlockPart innerMenu roundEdge embed'><span>Photos</span></div>";
	temp = temp+"<div id="vidoesBut" class='inlineBlockPart innerMenu roundEdge embed'><span>Videos</span></div></div>";
	//document.getElementById("slideMenu0").style.display = "block";
	document.getElementById("menuBox2").innerHTML = document.getElementById("menuBox2").innerHTML+temp; */
	document.getElementById("slideMenu0").style.display = "block";
	//$("#slideMenu0").show('slide',{direction:'up'},5000);
	
}

function slideGalleryMenuRemove()
{
	document.getElementById("slideMenu0").style.display = "none";
	//$("#slideMenu0").hide("slide",{direction:"down"},5000);
}

function slideAboutMenu()
{
	document.getElementById("slideMenu1").style.display = "block";
}

function slideAboutMenuRemove()
{
	document.getElementById("slideMenu1").style.display = "none";
}

function handleInnerMenuClicked(thisvar)
{
	var compStr = thisvar.innerHTML.toLowerCase();
	
	if(compStr.indexOf("institute")!=-1)
	{
		window.location="aboutus.php";
	}
	else if(compStr.indexOf("guruji")!=-1)
	{
		window.location="aboutGuruji.php";
	}
	else if(compStr.indexOf("photos")!=-1)
	{
		window.location="photoGallery.php";
	}
	else if(compStr.indexOf("videos")!=-1)
	{
		window.location="videoGallery.php";
	}
}

var highlightPostures = "";
function appearPostures()
{
	
	var curCI = document.getElementById("circleImg"+curItem);//document.getElementsByClassName("circleImg")[curItem];//$(".circleImg").eq(curItem);
	//alert(curCI.id);
	$("#"+curCI.id).fadeIn("fast");
	imgLoad(curCI);
	if(curItem == 11)
	{
		clearInterval(appearTimeInterval);
		curItem = (curItem+1)%12;		
		highlightPostures = setInterval(highlightPostureAnimation,1000);
	}
	else
	{
		curItem = (curItem+1)%12;
		
	}						
	//imgLoad($(".circle").eq(curItem).children().eq(0));
}

function highlightPostureAnimation()
{
	if(curItem == 0)
	{
		document.getElementsByClassName("circle")[11].style.backgroundImage = "-webkit-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(227, 69, 77) 30%, rgb(252, 190, 60) 100%)";
		document.getElementsByClassName("circle")[11].style.backgroundImage = "linear-gradient(top, rgb(252, 190, 60) 0%, rgb(227, 69, 77) 30%, rgb(252, 190, 60) 100%)";
		document.getElementsByClassName("circle")[11].style.backgroundImage = "-o-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(227, 69, 77) 30%, rgb(252, 190, 60) 100%)";
		document.getElementsByClassName("circle")[11].style.backgroundImage = "-ms-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(227, 69, 77) 30%, rgb(252, 190, 60) 100%)";
		document.getElementsByClassName("circle")[11].style.backgroundImage = "-moz-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(227, 69, 77) 30%, rgb(252, 190, 60) 100%)";
	}
	else
	{
		document.getElementsByClassName("circle")[curItem-1].style.backgroundImage = "-webkit-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(227, 69, 77) 30%, rgb(252, 190, 60) 100%)";
		document.getElementsByClassName("circle")[curItem-1].style.backgroundImage = "linear-gradient(top, rgb(252, 190, 60) 0%, rgb(227, 69, 77) 30%, rgb(252, 190, 60) 100%)";
		document.getElementsByClassName("circle")[curItem-1].style.backgroundImage = "-o-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(227, 69, 77) 30%, rgb(252, 190, 60) 100%)";
		document.getElementsByClassName("circle")[curItem-1].style.backgroundImage = "-ms-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(227, 69, 77) 30%, rgb(252, 190, 60) 100%)";
		document.getElementsByClassName("circle")[curItem-1].style.backgroundImage = "-moz-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(227, 69, 77) 30%, rgb(252, 190, 60) 100%)";
	}
	document.getElementsByClassName("circle")[curItem].style.backgroundImage = "-webkit-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(252, 190, 60) 100%)";
	document.getElementsByClassName("circle")[curItem].style.backgroundImage = "-moz-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(252, 190, 60) 100%)";
	document.getElementsByClassName("circle")[curItem].style.backgroundImage = "-ms-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(252, 190, 60) 100%)";
	document.getElementsByClassName("circle")[curItem].style.backgroundImage = "-o-linear-gradient(top, rgb(252, 190, 60) 0%, rgb(252, 190, 60) 100%)";
	document.getElementsByClassName("circle")[curItem].style.backgroundImage = "linear-gradient(top, rgb(252, 190, 60) 0%, rgb(252, 190, 60) 100%)";
	curItem = (curItem+1)%12;
}

function imgLoad(thisVar)
{		
	//alert(thisVar.id);
	//var tmpH = thisVar.parentNode.offsetHeight-thisVar.offsetHeight;//($(".circle").eq(0).height()-$(".circleImg").eq(0).height())/2;
	var tmpH = ($("#"+thisVar.id).parent().height()-$("#"+thisVar.id).height())/2;
	$("#"+thisVar.id).css({"top":tmpH});
}