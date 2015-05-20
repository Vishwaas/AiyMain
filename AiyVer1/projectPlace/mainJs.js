var refH= 768;//screen.height;
var refW = 1366;//screen.width;
var tmpH,tmpW;

var curItemInfo;				//This object contains information on the current object fetched
var favouriteList = [];			//This is an array of cuiteminfo objects.


function screenComparePercentWidth(val)
{
	
	return (val*refW)/100;
}

function screenComparePercentHeight(val)
{
	return (val*refH)/100;
}

function setHeight(idVal,heightVal)
{
	document.getElementById(idVal).style.height = screenComparePercentHeight(heightVal)+"px";
	
}

function setWidth(idVal,widthVal)
{
	document.getElementById(idVal).style.width = screenComparePercentWidth(widthVal)+"px";
	
}

function writeToTable()		//this function is used to write information obtained from Facebook Api to the table element
{
	var tableEle = document.getElementById("infoTable");
	tableEle.innerHTML = "";
	
	tableEle.innerHTML = tableEle.innerHTML + '<tr><th style="width:30%;">Topic</th><th style="width:70%;">Information</th></tr>';
	if(curItemInfo["name"]!=undefined)
	{
		tableEle.innerHTML = tableEle.innerHTML + "<tr><td>Name</td><td>"+curItemInfo["name"]+"</td></tr>";
	}
	if(curItemInfo["likes"]!=undefined)
	{
		tableEle.innerHTML = tableEle.innerHTML + "<tr><td>Likes</td><td>"+curItemInfo["likes"]+"</td></tr>";
	}
	if(curItemInfo["category"]!=undefined)
	{
		tableEle.innerHTML = tableEle.innerHTML + "<tr><td>Category</td><td>"+curItemInfo["category"]+"</td></tr>";
	}
	if(curItemInfo["about"]!=undefined)
	{	
		tableEle.innerHTML = tableEle.innerHTML + "<tr><td>About</td><td>"+curItemInfo["about"]+"</td></tr>";
	}
	if(curItemInfo["description"]!=undefined)
	{
		tableEle.innerHTML = tableEle.innerHTML + "<tr><td>Description</td><td>"+curItemInfo["description"]+"</td></tr>";
	}

	document.getElementById("infoTableCaption").innerHTML = curItemInfo["name"];
	document.getElementById("favIcon").dataName = curItemInfo["name"];
	document.getElementById("infoCont").style.display="block";
	
	var pos = checkItemInFavourites(document.getElementById("favIcon").dataName);
	var tmpFavIconPtr = document.getElementById("favIcon");
	if(pos!=-1)
	{
		tmpFavIconPtr.dataCurState = "1";
		tmpFavIconPtr.style.backgroundPosition =  "0 -30px";
	}
	else
	{
		tmpFavIconPtr.dataCurState = "0";
		tmpFavIconPtr.style.backgroundPosition =  "0 0px";
	}
}

function clearWhiteSpace(str)		//Since coffee day will not return a value but coffeeday will clearing whitespaces involved
{
	str.trim();
	if(str.indexOf(" ") == -1)
	{
		return str;
	}
	var tmpStr = "";
	for(var i =0;i<str.length;i++)
	{
		if(str.charAt(i)!=" ")
		{
			tmpStr = tmpStr+str.charAt(i);
		}
	}

	return tmpStr;
}

function search(ptrVar)		//This callback handles facebook login and then fetching information and adding the data.
{
	
	curItemInfo = {};
	if(document.getElementById("pageName").value=="" && ptrVar.dataset.searchname == "")
	{						
		document.getElementById("status").innerHTML = "Kindly enter a name to search";
		document.getElementById("infoCont").style.display="none";
		return;
	}
	FB.getLoginStatus(function(response) 
	{		
	
		if (response.status === 'connected' && response.status != 'not_authorized') 		//If already logged in and authorized then fetch information
		{			
			var curName = "";
			if(ptrVar.className == "defBut")
			{
				curName = document.getElementById("pageName").value;
		
			}
			else
			{
				curName = ptrVar.dataset.searchname	;		
				
			}
			
			FB.api('/'+encodeURIComponent(clearWhiteSpace(curName)),"GET", function(response) //FB.api('/subway',"GET", function(response) 
			{
				
				if(!response.name)
				{
		
					document.getElementById("status").innerHTML = "Could not find this page";
					document.getElementById("infoTable").innerHTML = "";
					document.getElementById("infoCont").style.display="none";
				}
				else
				{
					curItemInfo["searchName"] = curName;
					curItemInfo["name"] = response.name;
					curItemInfo["likes"] = response.likes;
					curItemInfo["about"] = response.about;
					curItemInfo["category"] = response.category;
					curItemInfo["description"] = response.description
					writeToTable();

				}
							
			}); 
			
		
			document.getElementById("status").innerHTML = "Connection already exists";			
			
		} 
		else if (response.status === 'not_authorized')		//If logged in but not authorized request user to authenticate before proceeding
		{		
			document.getElementById("infoCont").style.display="none";
			document.getElementById("infoTable").innerHTML = "";					
			document.getElementById("status").innerHTML = "Authentication not provided, kindly login again and provide the same.";
			
			FB.login(function(response) 
			{
				if (response.authResponse)
				{			 
										
					document.getElementById("status").innerHTML = "Logged in successfully";
					var curName = "";
					if(ptrVar.className == "defBut")
					{
						curName = document.getElementById("pageName").value;
					}
					else
					{
						curName = ptrVar.dataset.searchname	;		
						
					}
					
					FB.api('/'+encodeURIComponent(clearWhiteSpace(curName)),"GET", function(response) //FB.api('/subway',"GET", function(response) 
					{
						
						if(!response.name)
						{
					
							document.getElementById("status").innerHTML = "Could not find this page";
							document.getElementById("infoTable").innerHTML = "";
							document.getElementById("infoCont").style.display="none";
						}
						else
						{
							curItemInfo["searchName"] = curName;
							curItemInfo["name"] = response.name;
							curItemInfo["likes"] = response.likes;
							curItemInfo["about"] = response.about;
							curItemInfo["category"] = response.category;
							curItemInfo["description"] = response.description
							writeToTable();

						}
									
					}); 
			 
					
				} 
				else
				{				
					
					document.getElementById("status").innerHTML = "Could not log in. Kindly retry";
					document.getElementById("infoTable").innerHTML = "";
					document.getElementById("infoCont").style.display="none";	
					
				}
			},
			{scope: 'email,user_about_me',auth_type: 'reauthenticate'}
			);
			
		}
		else			//If not logged in then log in and fetch information
		{
			FB.login(function(response) 
			{
				if (response.authResponse)
				{			 
					
					document.getElementById("status").innerHTML = "Logged in successfully";
										
					var curName = "";
					if(ptrVar.className == "defBut")
					{
						
						curName = document.getElementById("pageName").value;
					
					}
					else
					{
						curName = ptrVar.dataset.searchname	;		
						
					}
					
					FB.api('/'+encodeURIComponent(clearWhiteSpace(curName)),"GET", function(response) //FB.api('/subway',"GET", function(response) 
					{
						
						if(!response.name)
						{
					
							document.getElementById("status").innerHTML = "Could not find this page";
							document.getElementById("infoTable").innerHTML = "";
							document.getElementById("infoCont").style.display="none";
						}
						else
						{
							curItemInfo["searchName"] = curName;
							curItemInfo["name"] = response.name;
							curItemInfo["likes"] = response.likes;
							curItemInfo["about"] = response.about;
							curItemInfo["category"] = response.category;
							curItemInfo["description"] = response.description
							writeToTable();

						}
									
					}); 
									
				} 
				else
				{							
				
					document.getElementById("status").innerHTML = "Could not log in. Kindly retry.";					
					document.getElementById("infoCont").style.display="none";	
					
					document.getElementById("infoTable").innerHTML = "";					
				}
			},
			{scope: 'email,user_about_me'}
			);
		}
	});
	
}

function checkItemInFavourites(name)
{
	for(var k = 0;k<favouriteList.length;k++)
	{
		if(favouriteList[k]["name"] == name)
		{
			return k;
		}
	}
	return -1;
}


function addToFav()
{	

	var facIconPtr = document.getElementById("favIcon");
	if(facIconPtr.dataCurState == "1")
	{
		facIconPtr.dataCurState = "0";
		facIconPtr.style.backgroundPosition =  "0 0";
		var pos = checkItemInFavourites(facIconPtr.dataName);
		if(pos!=-1)
		{
			favouriteList.splice(pos,1);
		}
		localStorage.setItem("favList",JSON.stringify(favouriteList));

	}
	else
	{	
		favouriteList.splice(0,0,curItemInfo);
		facIconPtr.style.backgroundPosition =  "0 -30px";
		facIconPtr.dataCurState = "1";
		localStorage.setItem("favList",JSON.stringify(favouriteList));

	}

	favouriteListChanged();
}

function favouriteListChanged()
{		
	var favList = document.getElementById("favSectionWrapper");
	favList.innerHTML = "";
	for(var k = 0;k<favouriteList.length;k++)
	{		
		var tempEle = "<br/><div onclick='search(this)' class='favouriteItem' data-name='"+favouriteList[k]["name"]+"' data-searchName='"+favouriteList[k]["searchName"]+"'>"+favouriteList[k]["searchName"]+"</div>";
		favList.innerHTML = favList.innerHTML+tempEle;
	}
}

function load()
{
	
	if(localStorage.getItem("favList") != null)
	{
	favouriteList = JSON.parse(localStorage.getItem("favList"));	
	favouriteListChanged();
	
	}
}

