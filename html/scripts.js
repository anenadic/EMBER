<!-- hide

/* sniff browser & version */

 	var agt=navigator.userAgent.toLowerCase();
  	var agt=navigator.userAgent.toLowerCase();
	var theVersion = navigator.appVersion.toLowerCase();
    var is_major = parseInt(navigator.appVersion);
    var is_minor = parseFloat(navigator.appVersion);
    var is_nav  = ((agt.indexOf('mozilla')!=-1) && (agt.indexOf('spoofer')==-1)
                && (agt.indexOf('compatible') == -1) && (agt.indexOf('opera')==-1)
                && (agt.indexOf('webtv')==-1));
    var is_nav2 = (is_nav && (is_major == 2));
    var is_nav3 = (is_nav && (is_major == 3));
    var is_nav4 = (is_nav && (is_major == 4));
    var is_nav4up = (is_nav && (is_major >= 4));
    var is_navonly      = (is_nav && ((agt.indexOf(";nav") != -1) ||
                          (agt.indexOf("; nav") != -1)) );
    var is_nav5 = (is_nav && (is_major == 5));
    var is_nav5up = (is_nav && (is_major >= 5));
    var is_ie   = (agt.indexOf("msie") != -1);
    var is_ie3  = (is_ie && (is_major < 4));
    var is_ie4  = (is_ie && (is_major == 4) && (agt.indexOf("msie 5.0")==-1) );
    var is_ie4up  = (is_ie  && (is_major >= 4));
    var is_ie5  = (is_ie && (is_major == 4) && (agt.indexOf("msie 5.0")!=-1) );
    var is_ie5up  = (is_ie  && !is_ie3 && !is_ie4);
	var is_iemac = (is_ie && navigator.userAgent.indexOf("Mac") != -1);
	var is_ie5mac = (is_iemac && theVersion.indexOf("msie 5.0") != -1);
    var is_aol   = (agt.indexOf("aol") != -1);
    var is_aol3  = (is_aol && is_ie3);
    var is_aol4  = (is_aol && is_ie4);
    var is_opera = (agt.indexOf("opera") != -1);
    var is_webtv = (agt.indexOf("webtv") != -1);

/* preload notepad background image */

var preLoadNotepadImage = new Image();
preLoadNotepadImage.src = 'Graphics/notepad.gif';
	
QueryStringKeys = new Array();
QueryStringValues = new Array();
realLoc = new Array();

/* parse query string in URL (parameters passed to the next page) */

function QueryString_Parse() {
	var query = '' + document.location;
	var questionmarkloc = query.indexOf('?');
	realLoc[0] = query.substring(0,questionmarkloc);
	if (realLoc[0] == '') {         // no query string in url
	 	realLoc[0] = query;
		query = '';
	} else {                    // query string in url
		var pos = (query.indexOf("?"));
		realLoc[0] = query.substring(0,pos);
		query = query.substring(pos+1,query.length);
		var pairs = query.split("&");
		for (var i=0;i<pairs.length;i++) {
			pos = pairs[i].indexOf('=');
			if (pos >= 0) {
				var argname = pairs[i].substring(0,pos);
				var value = pairs[i].substring(pos+1);
				QueryStringKeys[QueryStringKeys.length] = argname;
				QueryStringValues[QueryStringValues.length] = value;		
			}	
		}
	}
}

QueryString_Parse();

function QueryString(key) {
	var value = null;
	for (var i=0;i<QueryStringKeys.length;i++) {
		if (QueryStringKeys[i]==key) {
			value = QueryStringValues[i];
			break;
		}
	}
	return value;
}


/* quiz scripts */

function displayResetQuizButton()
{
	showLayer("ResetQuiz");	
}

function resetQuiz() {
	document.location = realLoc[0] ;
}

function getQuizChoices()
{
	var numberOfElements = (document.quizform.elements.length)-1;
	var numberOfRadioButtons = 0;	// count number of radio buttons so we can calculate number of questions
	var numberAnswered = 0;	// 

	// concatenate all answers
	document.quizform.answers.value = '';
	for (i = 1; i <= numberOfElements; i++)
	{
		if (document.quizform.elements[i-1].type == "radio")
		{
			var thisQuestionName = document.quizform.elements[i-1].name;
			//alert(i);
			if (document.quizform.elements[i-1].checked)
			{
				numberAnswered = numberAnswered + 1;
				if(document.quizform.answers.value != '')
						document.quizform.answers.value += "," + i;
					else
						document.quizform.answers.value = i;
			}
			numberOfRadioButtons = numberOfRadioButtons + 1;
		}
	}
	document.quizform.nrquestions.value = numberOfRadioButtons / 4;
	return numberAnswered;
}

/* external window scripts */

function openxlink (thisurl,thistarget) {
	theWindowStyle ='menubar=yes,toolbar=yes,personalbar=no,location=yes,directories=no,status=yes,scrollbars=yes,resizable=yes,dependent=no';
	theWidth = 750;
	theHeight = 450;
	theTop = 2;
	theLeft = 2;
	if (screen.availLeft != null) { theLeft = screen.availLeft + 2}
	if (thistarget == 'right' && screen.availWidth != null) { theLeft += screen.availWidth - theWidth - 16 }
	if (screen.availHeight != null) { theHeight = screen.availHeight }
	
	if (is_nav5up && navigator.userAgent.indexOf("Mac") != -1) {
		// Netscape 6 or higher on Macintosh
		theHeight -= 100;
		theWindowStyle += ', width='+ theWidth + ', height='+ theHeight + ', outerWidth='+ theWidth + ', outerHeight='+ theHeight ;
		theWindowStyle += ', top =' + theTop + ', screenX=' + theLeft + ', screenY =' + theTop ;
	} else {
		if (is_ie && navigator.userAgent.indexOf("Mac") == -1) {
			// Internet Explorer on Windows
			theHeight -= 170;
		}
		if (screen.availTop != null) { theTop = screen.availTop + 2 } 
		theWindowStyle += ', width='+ theWidth + ', height='+ theHeight + ', outerWidth='+ theWidth + ', outerHeight='+ theHeight ;
		theWindowStyle += ', left=' + theLeft + ', top =' + theTop + ', screenX=' + theLeft + ', screenY =' + theTop ;
	}
	
	if (thistarget == 'left') {
		if (window.leftXWin) {
			leftXWin = window.open(thisurl,thistarget,theWindowStyle);
			leftXWin.focus();
			leftXWin.moveTo(theLeft,theTop);
			leftXWin.location = thisurl;
		} else {
			leftXWin = window.open(thisurl,thistarget,theWindowStyle);
			leftXWin.focus();
			leftXWin.moveTo(theLeft,theTop);
		}
	} else if (thistarget == 'right') {
		if (window.rightXWin) {
			rightXWin = window.open(thisurl,thistarget,theWindowStyle);
			rightXWin.location = thisurl;
		} else {
			rightXWin = window.open(thisurl,thistarget,theWindowStyle);
		}
		rightXWin.focus();
		rightXWin.moveTo(theLeft,theTop);
	} else { alert('Error: target window undefined') }
}

function openpicwindow (thisurl,thePictureWidth,thePictureHeight) {
 	r = Math.random();
	rn = Math.round (r * 1000);
	randomwindowname = "window" + rn;
	getSizeOfPicture = new Image(); getSizeOfPicture.src=thisurl;
	
	if (thePictureWidth != 0 && thePictureHeight != 0 && thePictureWidth != null && thePictureHeight != null) {
		theScreenWidth = (screen.availWidth);
		theScreenHeight = (screen.availHeight);
		theWindowWidth = thePictureWidth;
		theWindowHeight = thePictureHeight;
		goFullScreen = "no";
		if (theWindowWidth > theScreenWidth) {
			theWindowWidth = theScreenWidth;
			goFullScreen = "yes";
		}
		if (theWindowHeight > theScreenHeight) {
			theWindowHeight = theScreenHeight;
			goFullScreen = "yes";
		}
		theX = (theScreenWidth - theWindowWidth) / 2;
		theY = (theScreenHeight - theWindowHeight) / 2;
		xWin = window.open('', randomwindowname,'width=' + theWindowWidth + ',height=' + theWindowHeight + ',' +
		 'menubar=no,toolbar=no,personalbar=no,location=no,directories=no,status=no,scrollbars=' + goFullScreen + 
		 ',resizable=' + goFullScreen + ',dependent=yes,left=' + theX +',top=' + theY +',screenx=' + theX +',screeny=' + theY);
		if (goFullScreen == "yes") {
			xWin.window.resizeTo(screen.availWidth,screen.availHeight);
			xWin.window.moveTo(0,0);
		}
		xWin.window.document.write("<HTML><HEAD><TITLE>Image</TITLE></HEAD><BODY bgcolor=white background='Graphics/loading.gif' bgproperties=fixed>");
		xWin.window.document.write("<div id='layer1' style='position: absolute; left: 0; top: 0; z-index:1'>");
		xWin.window.document.write("<IMG name='picture1' src='" + thisurl + "' BORDER=0>");
		xWin.window.document.write("</div><p>&nbsp;</p></body></HTML>");
	} else {
		xWin = window.open('', randomwindowname,'width=720,height=520,menubar=no,toolbar=no,personalbar=no,location=no,' +
		  'directories=no,status=no,scrollbars=auto,resizable=yes,dependent=yes,left=20,top=20,screenx=20,screeny=20');
		xWin.window.document.write("<HTML><HEAD><TITLE>Image</TITLE></HEAD><BODY bgcolor=white background='Graphics/loading.gif' bgproperties=fixed>");
		xWin.window.document.write("<div id='layer1' style='position: absolute; left: 0; top: 0; z-index:1'>");
		xWin.window.document.write("<IMG name='picture1' src='" + thisurl + "' BORDER=0>");
		xWin.window.document.write("</div><p>&nbsp;</p></body></HTML>");
	}
}

/* layer scripts */

function showLayer (lay) {
	if (lay == "QuizTab" && !layerExists("QuizTab")) { return '' }
	if (document.all) {document.all[lay].style.visibility = "visible";}
	else if (document.layers) {document.layers[lay].visibility = "show";}
	else if (document.getElementById) {document.getElementById([lay]).style.visibility = "visible";}
}

function hideLayer (lay) {
	if (lay == "QuizTab" && !layerExists("QuizTab")) { return '' }
	if (document.all) {document.all[lay].style.visibility = "hidden";}
	else if (document.layers) {document.layers[lay].visibility = "hide";}
	else if (document.getElementById) {document.getElementById([lay]).style.visibility = "hidden";}
}

function layerIsVisible(lay) {
  if (document.all) {return (document.all[lay].style.visibility == "visible");}
  else if (document.layers) {return (document.layers[lay].visibility == "show");}
  else if (document.getElementById) {return (document.getElementById([lay]).style.visibility == "visible");}
}

function layerExists(lay) {
	if (document.all) {
		layers = document.all.tags("DIV");
		for (layerIndex = 0; layerIndex<=layers.length - 1; layerIndex++) {
			if (layers[layerIndex].id == lay) { return true }
		}
	}
	return false;
}

/* TAB SCRIPTS */

if (document.images) {
  tab_instr_image = new Image(326, 27); tab_instr_image.src = "Graphics/tab_instr.gif";
  tab_aims_image = new Image(326, 27); tab_aims_image.src = "Graphics/tab_aims.gif";
  tab_info_image = new Image(326, 27); tab_info_image.src = "Graphics/tab_info.gif";
}

function switchTabs (newTab) {
  getCurrentSection();
  if (newTab=='InstructionsTab')
      document.location.href = 'ch'+currentChapter+'_1_instr.php';
  else if (newTab=='AimsTab')
      document.location.href = 'ch'+currentChapter+'_aims.php';
  else if (newTab=='InfoTab')
      document.location.href = 'ch'+currentChapter+'_info.php';
  else if (newTab=='QuizTab')
      document.location.href = 'ch'+currentChapter+'_quiz.php';
}

/* notepad scripts */

if (is_nav5up) { thePixelsToMove = 15; } else { thePixelsToMove = 10; }
var theLeft = 260;
var theNotepadLeft = 260;
var theWidth = 450;
var theHeight = 180;
if (is_ie5mac) {
	theHeight = 310;
}
var theTop = 0-theHeight;

function openNotepad () {
	if (layerIsVisible("Notepad")) {
		// do nothing
	} else {
		// check for cookies
		myNotepadContents = getCookie('ember_np');
		myCookieTest = setCookie('ember_np', "checking if cookies are enabled", null) ;
		myCookieTest = getCookie('ember_np');
		if (myCookieTest != "checking if cookies are enabled") {
			alert ("Warning: the notepad will not work properly because 'cookies' are disabled. \n" +
				"The notepad contents will be lost when you leave this Web page. \n\n" + 
				"Please enable 'cookies' in your browser's preferences settings.");
		}
		myCookieTest = setCookie('ember_np', myNotepadContents, "") ;
		
		if (myNotepadContents == null) {
			document.notepadform.notes.value = '' ;
		} else {
			document.notepadform.notes.value = myNotepadContents ;
		}
			
		theTop = 0-theHeight;
			
		setNotepadPosition();
		showLayer("Notepad");
		document.notepadform.notes.focus();
		setTimeout("slideTheObjectDown()",1);
	}
}

function closeNotepad () {
	if (layerIsVisible("Notepad")) {
		hideNotepad = true;
		notes = document.notepadform.notes.value;
		if (notes == '') {
			deleteCookie('ember_np') ;
		 } else {
		 	myNewCookie = setCookie('ember_np', notes, null);
			myCookieTest = getCookie('ember_np');
			if (myCookieTest != notes) {
				hideNotepad = confirm("Warning: too much text! If you hide the notepad now, your text will not be saved.\n \n To save all your text, click Cancel, then copy and paste it to a text or word processing file.\n \n Are you absolutely sure you that you want to close the notepad?");
			}
		}
		if (hideNotepad == true) {
			hideLayer("Notepad");
			theTop = 0-theHeight;
			setNotepadPosition();
		}
	}
}

function slideTheObjectDown()  {
	if (theTop < -1) {
		theTop = theTop + thePixelsToMove;
		if (theTop > -1) { theTop = -1; }
		setNotepadPosition();
		setTimeout("slideTheObjectDown()",1);
	}
}

function setNotepadPosition() {
	if (document.all) {
		whichone = document.all.Notepad.style;
		whichone.posLeft = theNotepadLeft;
		whichone.posTop = theTop;
    } else if (document.layers) {
		whichone = document.layers["Notepad"];
    	whichone.left = theNotepadLeft;
    	whichone.top = theTop;
	} else if (document.getElementById) {
		whichone = document.getElementById("Notepad").style;
    	whichone.left = theNotepadLeft;
    	whichone.top = theTop;
	}
}

/* Fireworks scripts */

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
   var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
   if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) {
  	location.reload();
  }
}
MM_reloadPage(true);

<!-- cookie scripts -->

// name - name of the cookie
// value - value of the cookie
// [expires] - expiration date of the cookie (defaults to end of current session)
// [path] - path for which the cookie is valid (defaults to path of calling document)
// [domain] - domain for which the cookie is valid (defaults to domain of calling document)
// [secure] - Boolean value indicating if the cookie transmission requires a secure transmission
// * an argument defaults when it is assigned null as a placeholder
// * a null placeholder is not required for trailing omitted arguments

function setCookie(name, value, expires, path, domain, secure) {
  var curCookie = name + "=" + escape(value) +
      ((expires) ? "; expires=" + expires.toGMTString() : "") +
      ((path) ? "; path=" + path : "") +
      ((domain) ? "; domain=" + domain : "") +
      ((secure) ? "; secure" : "");
//alert(curCookie);
  document.cookie = curCookie;
//alert(document.cookie);
  return (document.cookie == curCookie);
}

// name - name of the desired cookie
// * return string containing value of specified cookie or null if cookie does not exist
function getCookie(name) {
  var dc = document.cookie;
  var prefix = name + "=";
  var begin = dc.indexOf("; " + prefix);
  if (begin == -1) {
    begin = dc.indexOf(prefix);
    if (begin != 0) return null;
  } else
    begin += 2;
  var end = document.cookie.indexOf(";", begin);
  if (end == -1)
    end = dc.length;
  return unescape(dc.substring(begin + prefix.length, end));
}

// name - name of the cookie
// [path] - path of the cookie (must be same as path used to create cookie)
// [domain] - domain of the cookie (must be same as domain used to create cookie)
// * path and domain default if assigned null or omitted if no explicit argument proceeds
function deleteCookie(name, path, domain) {
  if (getCookie(name)) {
    document.cookie = name + "=" + 
    ((path) ? "; path=" + path : "") +
    ((domain) ? "; domain=" + domain : "") +
    "; expires=Thu, 01-Jan-70 00:00:01 GMT";
  }
}

// date - any instance of the Date object
// * hand all instances of the Date object to this function for "repairs"
function fixDate(date) {
  var base = new Date(0);
  var skew = base.getTime();
  if (skew > 0)
    date.setTime(date.getTime() - skew);
}

// COLLAPSIBLE/EXPANDABLE MENU SCRIPTS

currentChapter = "";
currentSection = "";

function getCurrentSection() {
	currentURL = document.location.href.split("/");
	currentPage = currentURL[currentURL.length - 1].toLowerCase();
	theHTMLExtensionOffSet = currentPage.indexOf(".");
	if (theHTMLExtensionOffSet != 0) {
		currentPage = currentPage.substr(0,theHTMLExtensionOffSet);
		if(currentPage.indexOf("aims") > 0)
		{
			currentPage = currentPage.split("_");
			currentChapter = parseInt(currentPage[0].substr(2,currentPage[0].length));
			currentSection = 'aims';
		}
	else if(currentPage.indexOf("quiz") > 0)
		{
			currentPage = currentPage.split("_");
			currentChapter = parseInt(currentPage[0].substr(2,currentPage[0].length));
			currentSection = 'quiz';
		}
	    else if ((currentPage.substr(0,2) == "ch") && (currentPage.indexOf("_") != 0)) {
			currentPage = currentPage.split("_");
			currentChapter = parseInt(currentPage[0].substr(2,currentPage[0].length));
			currentSection = parseInt(currentPage[1]);
		}
	}
}

// NAVIGATION SCRIPTS

function goStep(thisStep) {
	currentURL = document.location.href.split("/");
	currentPage = currentURL[currentURL.length - 1].toLowerCase();
	thisExtension = currentPage.substr(currentPage.indexOf("."));
	targetStepURL = thisStep + '_instr' + thisExtension;
	document.location.href = targetStepURL;
}

function goPreviousStep() {
	currentURL = document.location.href.split("/");
	currentPage = currentURL[currentURL.length - 1].toLowerCase();
	thisExtension = currentPage.substr(currentPage.indexOf("."));
	thisChapter = currentPage.substr(0,currentPage.indexOf("_"));
	thisSection = currentPage.substr(currentPage.indexOf("_")+1);
	thisSection = thisSection.substr(0,thisSection.indexOf("."));
	prevStepURL = thisChapter +"_"+ (parseInt(thisSection)-1) + '_instr' + thisExtension;
	document.location.href = prevStepURL;
}

function goNextStep() {
	currentURL = document.location.href.split("/");
	currentPage = currentURL[currentURL.length - 1].toLowerCase();
	thisExtension = currentPage.substr(currentPage.indexOf("."));
	thisChapter = currentPage.substr(0,currentPage.indexOf("_"));
	thisSection = currentPage.substr(currentPage.indexOf("_")+1);
	thisSection = thisSection.substr(0,thisSection.indexOf("."));
	nextStepURL = thisChapter +"_"+ (parseInt(thisSection)+1) + '_instr' + thisExtension;
	document.location.href = nextStepURL;
}

function goChapter(thisChapter) {
	currentURL = document.location.href.split("/");
	currentPage = currentURL[currentURL.length - 1].toLowerCase();
	thisExtension = currentPage.substr(currentPage.indexOf("."));
	document.location.href = "ch" + thisChapter + "_1" + thisExtension;
}

function goNextChapter() {
	currentURL = document.location.href.split("/");
	currentPage = currentURL[currentURL.length - 1].toLowerCase();
	thisExtension = currentPage.substr(currentPage.indexOf("."));
	thisChapter = currentPage.substr(2,currentPage.indexOf("_"));
	nextChapterURL = "ch" + (parseInt(thisChapter)+1) + "_aims" + thisExtension;
	document.location.href = nextChapterURL;
}

function goInfoSection(thisAnchor) {
	document.location.href = 'ch'+currentChapter+'_info.php' + thisAnchor;
}

function goQuiz(thisChapter) {
	document.location.href = 'ch'+thisChapter+'_quiz.php';
}

// login system

function checkUserInput()
{
	var user = document.getElementById('webusername').value;
	var passwd = document.getElementById('webpassword').value;
	if(passwd.length < 4)
	{
		alert('The password should be at least 4 characters.');
		return false;
	}
	else
		return true;
}

function submitNewUser(item)
{
	document.getElementById('hidden' + item).value = document.getElementById(item).value;
}

function checkNewUser()
{
	if(document.getElementById('webfirstname').value == '')
		alert('Please enter your first name.');
	else if(document.getElementById('weblastname').value == '')
		alert('Please enter your last name.');
	else if(document.getElementById('webmailaddress').value.indexOf('@') == -1)
		alert('Please enter a valid email address.');
	else if(document.getElementById('webinstitution').value == '')
		alert('Please enter the institution name.');
	else if(document.getElementById('webcountry').value == '')
		alert('Please enter the country name.');
	else if(document.getElementById('webusername').value.length < 4 || document.getElementById('webusername').value.length > 15)
		alert('Please enter a user name of 4 to 15 characters.');
	else if(document.getElementById('webpassword').value.length < 4 || document.getElementById('webpassword').value.length > 10)
		alert('Please enter a password of 4 to 10 characters.');
	else if(document.getElementById('webpasswordconfirm').value == '')
		alert('Please confirm your password.');
	else if(document.getElementById('webpasswordconfirm').value != document.getElementById('webpassword').value)
		alert('Your password and confirmation do not match. Please retry.');
	else if(document.getElementById('webhint').value == '')
		alert('Please enter a hint for your password.');
	else if(document.getElementById('webcourse').value == '0')
		alert('Please select your course number. Consult your coordinator when in doubt.');
	else if(document.getElementById('webcourse').value > 1 && (document.getElementById('webunique').value.length < 4 || document.getElementById('webunique').value.length > 10))
		alert('Please enter an access code of 4 to 10 characters.');
	else
		return true;
	return false;
}

function check_input(item)
{
 var checkstr = "0123456789";
 var i = 0;
 var str = item;
 for(; i < str.length; i++)
 {
      if(checkstr.indexOf(str.substr(i,1)) < 0)
         return false;
 }
 return true;
}

function checkNewCourse()
{
	var start = document.getElementById('hiddenwebstartdate').value;
	var end = document.getElementById('hiddenwebenddate').value;

	if(document.getElementById('weborganisername').value == '')
		alert('Please enter your name.');
	else if(start == '')
		alert('Please select a start date.');
	else if(end == '')
		alert('Please select an end date.');
	//else if(start > end)
	//	alert('Please select an end date after the start date.');
	else if(document.getElementById('webpassword').value.length < 4 || document.getElementById('webpassword').value.length > 10)
		alert('Please enter a password of 4 to 10 characters.');
	else if(document.getElementById('webpasswordconfirm').value == '')
		alert('Please confirm your password.');
	else if(document.getElementById('webpasswordconfirm').value != document.getElementById('webpassword').value)
		alert('Your password and confirmation do not match. Please retry.');
	else if(document.getElementById('webhint').value == '')
		alert('Please enter a hint for your password.');
	else if(document.getElementById('webmailaddress').value.indexOf('@') == -1)
		alert('Please enter a valid email address.');
	else if(document.getElementById('webinstitution').value == '')
		alert('Please enter the institution name.');
	else if(document.getElementById('webcountry').value == '')
		alert('Please enter the country name.');
	else if(document.getElementById('webstudentsnr').value == '')
		alert('Please enter the number of students.');
	else if(check_input(document.getElementById('webstudentsnr').value) == false)
		alert('Please enter the number of students as digits.');
	else if(document.getElementById('webcomputersnr').value == '')
		alert('Please enter the number of computers.');
	else if(check_input(document.getElementById('webcomputersnr').value) == false)
		alert('Please enter the number of computers as digits.');
	else if(document.getElementById('webdemonstratorsnr').value == '')
		alert('Please enter the number of demonstrators');
	else if(check_input(document.getElementById('webdemonstratorsnr').value) == false)
		alert('Please enter the number of demonstrators as digits.');
	else if(document.getElementById('webunique').value.length < 4 || document.getElementById('webunique').value.length > 10)
		alert('Please enter an access code of 4 to 10 characters.');
	else
		return true;
	return false;
}

function checkLogin()
{
	if(document.getElementById('webusername').value.length < 4 || document.getElementById('webusername').value.length > 15)
		alert('Please enter a user name of 4 to 15 characters.');
	else if(document.getElementById('webpassword').value.length < 4 || document.getElementById('webpassword').value.length > 10)
		alert('Please enter a password of 4 to 10 characters.');
	else
		return true;
	return false;
}

function checkCourseLogin()
{
	if(document.getElementById('webcourse').value == '0')
		alert('Please select your course number.');
	else if(document.getElementById('webpassword').value.length < 4 || document.getElementById('webpassword').value.length > 10)
		alert('Please enter a password of 4 to 10 characters.');
	else
		return true;
	return false;
}

function enter(E)
{
	return (E.keyCode == 13);
}

function checkFeedback(nr)
{
	var numberOfElements = (document.forms[1].elements.length)-1;
	var numberSelected = 0;
	for (i = 0; i <= numberOfElements; i++)
		if(document.forms[1].elements[i].checked == true)
			numberSelected = numberSelected + 1;
	return numberSelected == nr;
}

<!-- Original:  Ben McFarlin (mcfarlin@netscape.net) -->
<!-- Web Site:  http://sites.netscape.net/mcfarlin -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function populatestartdate()
{
	var startyear = document.getElementById('startyear');
	var startmonth = document.getElementById('startmonth');
	var startday = document.getElementById('startday');

	timeA = new Date(startyear.options[startyear.selectedIndex].text, startmonth.options[startmonth.selectedIndex].value,1);
	timeDifference = timeA - 86400000;
	timeB = new Date(timeDifference);
	var daysInMonth = timeB.getDate();
	for (var i = 0; i < startday.length; i++)
		startday.options[0] = null;
	
	for (var i = 0; i < daysInMonth; i++) {
		startday.options[i] = new Option(i+1);
		startday.options[i].value = i + 1;
	}
	startday.options[0].selected = true;

	recalcstartdate();
}

function populateenddate()
{
	var endyear = document.getElementById('endyear');
	endmonth = document.getElementById('endmonth');
	var endday = document.getElementById('endday');

	timeA = new Date(endyear.options[endyear.selectedIndex].text, endmonth.options[endmonth.selectedIndex].value,1);
	timeDifference = timeA - 86400000;
	timeB = new Date(timeDifference);
	var daysInMonth = timeB.getDate();
	for (var i = 0; i < endday.length; i++)
		endday.options[0] = null;
	
	for (var i = 0; i < daysInMonth; i++) {
		endday.options[i] = new Option(i+1);
		endday.options[i].value = i + 1;
	}
	endday.options[0].selected = true;

	recalcenddate();
}

function recalcstartdate()
{
	var year = document.getElementById('startyear').value;
	var month = document.getElementById('startmonth').value;
	var day = document.getElementById('startday').value;
	document.getElementById('hiddenwebstartdate').value = year + '-' + month + '-' + day;
}

function recalcenddate()
{
	var year = document.getElementById('endyear').value;
	var month = document.getElementById('endmonth').value;
	var day = document.getElementById('endday').value;
	document.getElementById('hiddenwebenddate').value = year + '-' + month + '-' + day;
}

//  End -->


// done hiding -->

