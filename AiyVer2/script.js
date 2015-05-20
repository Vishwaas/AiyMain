var lastScrollPosition = 0,
lastPhotoScrollPositon = 0,
isheaderMenuTopInView = true,
currentIntroImgNumber = 0
introImgList = ['introImg0.jpg', 'introImg1.jpg', 'introImg2.jpg'];

$(document).ready(function(){
	window.onscroll = handleScroll;
	if(!scrollStopFlag)	document.getElementById('photoListContainer').onscroll = handlePhotoListScroll;

	setInterval(handleChangeIntroImage, 5000);

});

function handleChangeIntroImage(){
	$('.intro-img:eq(0)').slideUp(300, 'linear', function () {
		$('.intro-img:eq(0)').attr('src', './res/' + introImgList[currentIntroImgNumber]);
		$('.intro-img:eq(0)').slideDown('slow', 'linear');
		
	});
	$('.intro-img:eq(1)').slideUp(500, 'linear', function () {
		$('.intro-img:eq(1)').attr('src', './res/' + introImgList[currentIntroImgNumber]);
		$('.intro-img:eq(1)').slideDown('slow', 'linear');
		
	});
	$('.intro-img:eq(2)').slideUp(700, 'linear', function () {
		$('.intro-img:eq(2)').attr('src', './res/' + introImgList[currentIntroImgNumber]);
		$('.intro-img:eq(2)').slideDown('slow', 'linear');
		
	});	
	$('.intro-img:eq(3)').slideUp(900, 'linear', function () {
		$('.intro-img:eq(3)').attr('src', './res/' + introImgList[currentIntroImgNumber]);
		$('.intro-img:eq(3)').slideDown('slow', 'linear');
		currentIntroImgNumber = (currentIntroImgNumber + 1) % 3;
	});
}

function handlePhotoListScroll(){
	
	setTimeout(function(){
		var currentPhotoScrollPosition = document.getElementById('photoListContainer').scrollTop;
		(currentPhotoScrollPosition - lastPhotoScrollPositon > 0) ? handlePhotoScrollDown(currentPhotoScrollPosition) : '';
		lastPhotoScrollPositon = currentPhotoScrollPosition;
	},0);
	

}

function handlePhotoScrollDown(scrollTopRef){
	/*console.log('handlePhotoListScroll down');
	console.log('scrollTopRef'+scrollTopRef);
	console.log('container height '+ $('#photoListContainer').height());
	console.log('photolist height ' + $('#photoList').height());*/

	if((scrollTopRef + $('#photoListContainer').height()) >= ($('#photoList').height() - 50))	loadMorePhotos();
}

function loadMorePhotos(){
	console.log('load more photos');
	
	curLen = (imgListArr.length - curLoadedCount > sectionLimit) ? sectionLimit : (imgListArr.length - curLoadedCount);
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
	$('#photoList').append(appendStr);

	curLoadedCount += curLen;
	scrollStopFlag = (curLoadedCount >= imgListArr.length) ? true : false;
	if(scrollStopFlag)	document.getElementById('photoListContainer').onscroll = null;
	
}

function selectThisPhotos(element){
	var selectedImageUrl = $(element).find('img').attr('src');
	$('#photoViewImg').attr('src',selectedImageUrl);
	
}

function handleScroll(){
	setTimeout(function(){
		var currentScrollPosition = window.pageYOffset;
		(currentScrollPosition - lastScrollPosition > 0) ? handleScrollDown() : handleScrollUp();	
		lastScrollPosition = currentScrollPosition;
	},0);
	
}

function handleScrollDown(){

	//if header menu is not in view then no point in checking if it is going out of view
	if(!isheaderMenuTopInView) return;		
	//console.log('inview going out');
	var windowTop = $(window).scrollTop(),
	headerMenuTop = $('#header-menu').offset().top,
	headerMenuBottom = headerMenuTop + $('#header-menu').height();
	if(headerMenuBottom < (windowTop+$('#fixed-header-menu').height()))	{
		//console.log('went out of view');
		$('#fixed-header-menu').show(0);
		isheaderMenuTopInView = false;
	}
}

function handleScrollUp(){

	//if header menu is in view then no point in checking if it is coming in view
	if(isheaderMenuTopInView) return;
	//console.log('not in view coming in');
	var windowTop = $(window).scrollTop(),
	headerMenuTop = $('#header-menu').offset().top,
	headerMenuBottom = headerMenuTop + $('#header-menu').height();
	if(headerMenuBottom > (windowTop+$('#fixed-header-menu').height())){
		//console.log('came in view');
		$('#fixed-header-menu').hide(0);
		isheaderMenuTopInView = true;
	}
}