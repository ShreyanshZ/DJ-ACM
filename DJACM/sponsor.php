<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Learn technical courses online with Parallel Branch, an e-learning portal offering self-paced technical and functional courses. Grow your skills today" />
<meta name="keywords" content="Parallel Branch Online Education Portal- Home" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="Author" content="Parallel Branch " />
<meta name="exactseek" content="Online Education Portal" />
<title>Learn Technical Courses Online ,Grow IT Skills Today</title>

<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="https://www.parallelbranch.com/css/ie.css" />
<![endif]-->
<!--[if chrome]>-->
<style>
form input[type=text]{line-height:normal !important;}
</style>
<!--<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://www.parallelbranch.com/css/style.css" />
<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="https://www.parallelbranch.com/dist/css/bootstrap.css" />

<link rel="stylesheet" type="text/css" href="https://www.parallelbranch.com/css/easy-responsive-tabs.css" />

<link rel="stylesheet" type="text/css" href="https://www.parallelbranch.com/css/validationEngine.jquery.css" />

<link rel="stylesheet" type="text/css" href="https://www.parallelbranch.com/css/smoothness/jquery-ui-1.8.16.custom.css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://www.parallelbranch.com/assets/js/html5shiv.js"></script>
      <script src="https://www.parallelbranch.com/assets/js/respond.min.js"></script>
    <![endif]-->
<script src="https://www.parallelbranch.com/assets/js/jquery.js"></script>
<script type="text/javascript">
//var jquery = $.noConflict(true);
</script>
<script src="https://www.parallelbranch.com/dist/js/bootstrap.js"></script>
<script src="https://www.parallelbranch.com/assets/js/holder.js"></script>

<script src="https://www.parallelbranch.com/js/jquery1_8JQ.js"></script>
<script type="text/javascript">
var jquery1_8JQ = $.noConflict(true);
//var jquery-1.9.1 = $.noConflict(true);
</script>

<script type="text/javascript" src="https://www.parallelbranch.com/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="https://www.parallelbranch.com/js/jquery-ui-1.8.16.custom.min.js"></script>
<script src="https://www.parallelbranch.com/js/jquery-ui.min.js"></script>
<!--<script src="jquery-ui-1.10.3/jquery-1.9.1.js"></script>-->

<script src="https://www.parallelbranch.com/js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="https://www.parallelbranch.com/js/basic.js"></script>
<script type="text/javascript" src="https://www.parallelbranch.com/js/jquery.simplemodal.js"></script>-->
<script type="text/javascript" src="https://www.parallelbranch.com/js/jquery.form.js"></script>


<script src="https://www.parallelbranch.com/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="https://www.parallelbranch.com/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>



<!-- courses Slider Start-->
<script type="text/javascript" src="https://www.parallelbranch.com/js/jquery.jcarousel.js"></script>

<script src="https://www.parallelbranch.com/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
		
		if (document.all && !document.querySelector) {
window.location="https://www.parallelbranch.com/ie.php";
}

        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
           // activate: function(event) { // Callback function if tab is switched
              //  var $tab = $(this);
               // var $info = $('#tabInfo');
               // var $name = $('span', $info);

              //  $name.text($tab.text());

              //  $info.show();
          //  }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
	$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: false,
		hoverPause:true,
		visible: 1,
		auto:4000,
		speed:1500
	});
});
</script>

<script language="javascript">

jQuery(document).ready(function() {
var ipad=1;

 if ((navigator.userAgent.indexOf('iPhone') != -1) || (navigator.userAgent.indexOf('Android') != -1) || (navigator.userAgent.indexOf('iPod') != -1))
        {
          
		   //alert("sss")
		   var i=1;
        }
		else
		{
			//alert('else');
			 var i=5;
		}
    //deviceType = checkDeviceType();
    jQuery('#mycarousel').jcarousel();
	
    jQuery('#mycarousel1').jcarousel();
    jQuery('#mycarousel2').jcarousel();
    jQuery('#mycarousel3').jcarousel();
	jQuery('#mycarousel8').jcarousel(
		{	
			scroll:i
	   
	   
			//alert(deviceType);
		
		}
	);
	
	
	
    function mycarousel_initCallback(carousel)
    {
        // Disable autoscrolling if the user clicks the prev or next button.
        carousel.buttonNext.bind('click', function() {
            carousel.startAuto(0);
        });

        carousel.buttonPrev.bind('click', function() {
            carousel.startAuto(0);
        });

        // Pause autoscrolling if the user moves with the cursor over the clip.
        carousel.clip.hover(function() {
            carousel.stopAuto();
        }, function() {
            carousel.startAuto();
        });
    };
	
    jQuery('#mycarousel4').jcarousel(
        {
            vertical: true,
            auto:1,
            wrap: 'circular',
            initCallback: mycarousel_initCallback
        }
    );
    jQuery('#mycarousel6').jcarousel(
        {
            vertical: true,
            auto:3, //delay 3 seconds
            wrap: 'circular',
            initCallback: mycarousel_initCallback
        }
    );

    jQuery('#mycarousel5').jcarousel(
		
	);
	
    jQuery('.mycarousel_rec').jcarousel();
});

</script>
<!-- Courses slider End-->

<!-- DD Menu Script Start-->
<script type="text/javascript">
jQuery(document).ready( function()
    {
        jQuery("#JqueryForm").validationEngine('attach', {promptPosition : "topLeft"});
        
    });
</script>
<script language="javascript" type="text/javascript">
       //------------used for default text-------------------------------//
    $(function()
    {
        //$("form").jqTransform();
        /* ----------for showing default text---------------*/
        $("#defaultText").focus(function(srcc)
        {
                if ($(this).val() == $(this)[0].title)
                {
                        $(this).removeClass("defaultTextActive");
                        $(this).val("");
                }
        });
        $("#defaultText").blur(function()
        {
                if ($(this).val() == "")
                {
                        $(this).addClass("defaultTextActive");
                        $(this).val($(this)[0].title);
                }
        });
        $("#defaultText").blur();
        $(".defaultText").focus(function(srcc)
        {
                if ($(this).val() == $(this)[0].title)
                {
                        $(this).removeClass("defaultTextActive");
                        $(this).val("");
                }
        });
        $(".defaultText").blur(function()
        {
                if ($(this).val() == "")
                {
                        $(this).addClass("defaultTextActive");
                        $(this).val($(this)[0].title);
                }
        });
        $(".defaultText").blur();
    });
</script>
<script type="text/javascript">
 function show(id, value)
{
//alert(value);
	//document.getElementById("page").innerHTML='<span style="color:#0F79A5;">'+value+'</span>';
	for(var i=1;i<=2;i++)
	{
		if(i==id)
		{
                    
			//document.getElementById(i).style.display='block';
			$(document.getElementById(i)).show(500);
			//document.getElementById(i+"a").style.color='#0F79A5';
		}
		else
		{
			//document.getElementById(i).style.display='none';
			$(document.getElementById(i)).hide(500);
			//document.getElementById(i+"a").style.color='#7a7a7a';
		}
	}
}
//-->
</script>


<script type="text/javascript">
$(document).ready(function(){
$('#fcourse').click(function(){
    $("#ViewAllDiv").show();
    $('#fcourse').addClass('fTitleActive');
    });
$('#upCourse').click(function(){
    $("#ViewAllDiv").hide();
    $('#upCourse').addClass('fTitleActive');
    });

$('#upCourse').click(function(){
    $('#fcourse').removeClass('fTitleActive');
    });
$('#fcourse').click(function(){
    $('#upCourse').removeClass('fTitleActive');
    });

});
</script>
<script type="text/javascript">	
            function heightAdjIE6()
            {
                var heigh= 0;
                var width= 0;			
                if (document.body && document.body.offsetWidth)
                {
                    width = document.body.offsetWidth;
                    heigh = document.body.offsetHeight;
                }
                if (document.compatMode=='CSS1Compat' && document.documentElement && document.documentElement.offsetWidth ) 
                {
                    width = document.documentElement.offsetWidth;
                    heigh = document.documentElement.offsetHeight;
                }
                if (window.innerWidth && window.innerHeight) 
                {
                    width = window.innerWidth;
                    heigh = window.innerHeight;
                }
            
               // $(".overflowDiv").css({'width':width -80});	
               // $(".jcarousel-skin-tango5 .jcarousel-clip-horizontal").css({'width':width});
				//$(".jcarousel-skin-tango5 .jcarousel-item ").css({'width':width -100});
			//alert(width);
			//console.log(width);
                
            }
            
            $(document).ready(function() 
            {
                heightAdjIE6();
                $(window).resize(function() 
                {
                    heightAdjIE6();
                });                
            });
			
			$(function(){
				$(".someClass").tipTip({maxWidth: "auto", edgeOffset: 10});
				//$(".someClass").css({margin-top: "10"});
			});
            </script>
<!-- For ToolTip-->
<script type="text/javascript" src="https://www.parallelbranch.com/js/jquery.tipTip.js"></script>
<!-- For Tooltip End-->
<link type="text/css" href="https://www.parallelbranch.com/css/ui-lightness/jquery-ui-1.8.custom.css" rel="stylesheet" />



<link rel="stylesheet" href="https://www.parallelbranch.com/alert/jquery.css" type="text/css"/>
<script type="text/javascript" src="https://www.parallelbranch.com/alert/jquery.js"></script>
<script type="text/javascript" src="https://www.parallelbranch.com/alert/jquery_002.js"></script>
<script type="text/javascript" src="https://www.parallelbranch.com/alert/jquery_003.js"></script>

<script>
    var JQ = $.noConflict(true);
</script>

<!--course start-->
<script type='text/javascript' src='https://www.parallelbranch.com/js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='https://www.parallelbranch.com/js/jquery.dcmegamenu.1.2.js'></script>
<script type="text/javascript">
$(document).ready(function($){
	$('#mega-menu-tut').dcMegaMenu({
		rowItems: '3',
		speed: 'fast'
	});
});
</script>
<link href="https://www.parallelbranch.com/css/menu2.css" rel="stylesheet" type="text/css" />
<!--course end-->

<!--<script type="text/javascript" lang="javascript" src="https://www.parallelbranch.com/js/directmonster1.3.1.js"></script>-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-43428879-1']);
  _gaq.push(['_setDomainName', 'parallelbranch.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Hmae Page Slider-->
<link rel="stylesheet" href="https://www.parallelbranch.com/jquery/jRating.jquery.css" type="text/css" />
<script src="https://www.parallelbranch.com/js/jquery.anythingslider.js"></script>
<!-- AnythingSlider video extension; optional, but needed to control video pause/play -->
<script src="https://www.parallelbranch.com/js/jquery.anythingslider.video.js"></script>
<script type="text/javascript">
    // DOM Ready
    $(function(){
            $('#slider').anythingSlider({
                    resizeContents      : true,
                    //controls          : false,
                    addWmodeToObject    : 'transparent',
                    navigationFormatter : function(index, panel){ // Format navigation labels with text
                            return ['', '', '', '', ''][index - 1];
                    }
            });
    });                
function ViewCourseVideo(course_id)
{
            var data1="course_id="+course_id+'&action=ViewCourseVideo' ;
           //alert(data1);
           $.ajax({
               url: "https://www.parallelbranch.com/course_ajax_process.php", type: "post", data: data1, cache: false,
               success: function (html)
                {
                    $("#ViewVideoPopup123").html(html);
                    $.extend($.modal.defaults, {closeClass: "CloseVideo"});                                          
                    $('#ViewVideoPopup').modal();  
                }
           });
           return false;
}
function ReferYourFrnd()
{
    //$.extend($.modal.defaults, {closeClass: "Close",});								
    //$('#referfriend').modal();
    
		// Getting the variable's value from a link 
		var loginBox = '#Usersetting';
		//Fade in the Popup and add close button
                //alert(loginBox);
		$(loginBox).fadeIn(300);		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);		
		return false;
}
$('a#closeSetting').live('click', function() { 
	  $('#mask , #Usersetting').fadeOut(300 , function() {
		$('#mask').remove();
                }); 
                document.getElementById('referYuorFriendS').reset();
	return false;
	});
function SendReferrerMsg()
{
    error = 'no';
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
    if($("#course_id").val() == '')
        {
            alert('Please select course');
            $("#course_id").focus();
            return false;
        }
    if($("#friend_email_id").val() == '')
        {
            alert('Please enter friends email Id');
            $("#friend_email_id").focus();
            return false;
        }
    if($("#friend_email_id").val() != '')
        {
            emailIds = $("#friend_email_id").val();
            var email_split = emailIds.split(","); 
            var j;            
            for(j=0;j<email_split.length;j++)
                {
                    separedEmail_id = $.trim(email_split[j]);
                    if (separedEmail_id.search(filter) == -1) 
                    {
                        var error = 'yes';
                    }
                }
            if(error == 'yes')
                {
                    alert ("Please enter valid email Id");
                    return false;
                }
        }
    if($("#Message").val() == '')
        {
            alert('Please enter message');
            $("#Message").focus();
            return false;
        }
    else
        {
            $("#referYuorFriendS").ajaxForm({
                               // target: '#LatestStatus',
                                success: function (html)
                                {    
                                    alert('Mail sent successfully');
                                    $('#mask , #Usersetting').fadeOut(300 , function() {
                                                                                            $('#mask').remove();
                                                                                        }); 
                                    document.getElementById('referYuorFriendS').reset();
                                    //$.modal.close();
                                }
                            }).submit();
        }
}
function PleaseLogin()
{
    alert('Please login to refer a friend ');
    var loginBox = $(".login-window").attr('href');
		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2;
		var popMargLeft = ($(loginBox).width() + 24) / 2;
		
		$(loginBox).css({
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		return false;
    
}
function PleaseLogin1()
{
    alert('You have no course, first you join minimum one course then after refer your friend.');
    return false;
}
function OpenHeaderVideo(id)
{
    var data1="ImageNo="+id+'&action=ViewHeaderVideo' ;
           //alert(data1);
           $.ajax({
               url: "https://www.parallelbranch.com/course_ajax_process.php", type: "post", data: data1, cache: false,
               success: function (html)
                {
                    $("#ViewVideoPopup123").html(html);
                    $.extend($.modal.defaults, {closeClass: "CloseVideo"});                                          
                    $('#ViewVideoPopup').modal();  
                }
           });
           return false;
}
function SelectCourseLang(language,course_id)
{
    var data1="language="+language+'&course_id='+course_id+'&action=SelectLanguage' ;
           $.ajax({
               url: "https://www.parallelbranch.com/course_ajax_process.php", type: "post", data: data1, cache: false,
               success: function (html)
                {
                   //alert(html);
                }
           });
           return false;
}
</script>
<script type='text/javascript'><!--
			$(document).ready(function() {
				enableSelectBoxes();
			});
			
			function enableSelectBoxes(){
				$('div.selectBox').each(function(){
					$(this).children('span.selected').html($(this).children('div.selectOptions').children('span.selectOption:first').html());
					$(this).attr('value',$(this).children('div.selectOptions').children('span.selectOption:first').attr('value'));
					
					$(this).children('span.selected,span.selectArrow').click(function(){
						if($(this).parent().children('div.selectOptions').css('display') == 'none'){
							$(this).parent().children('div.selectOptions').css('display','block');
						}
						else
						{
							$(this).parent().children('div.selectOptions').css('display','none');
						}
					});
					
					$(this).find('span.selectOption').click(function(){
						$(this).parent().css('display','none');
						$(this).closest('div.selectBox').attr('value',$(this).attr('value'));
						$(this).parent().siblings('span.selected').html($(this).html());
					});
				});
			}//-->
                        
       $(document).ready(function (){
                         $('div.selectBox').click(function(event){                                                    
                         $('body').one('click',function() {                                                                            
                                             //alert(event.target.value);
                                             $("div.selectOptions").css('display','none');
                                          });
                                          event.stopPropagation();
                                  });
                     });
</script>
    <script src="https://www.parallelbranch.com/js/swfobject.js"></script>
    <!--scroll start-->
<script type="text/javascript" src="https://www.parallelbranch.com/js/jquery.tinyscrollbar.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
            $('#scrollbar2').tinyscrollbar();	
    });
</script>
<!--scroll end-->
<!-- home Page Slider End-->
<style>
	.jcarousel-skin-tango2 .jcarousel-item
	{
		width:270px !important;
	}
	.jcarousel-skin-tango2 .jcarousel-clip-horizontal
	{
		width:270px !important;
	}
	.jcarousel-skin-tango2 .jcarousel-next-horizontal{right:1px !important;}
	.jcarousel-skin-tango2 .jcarousel-prev-horizontal{right:30px !important;}
</style>
</head>
<body>
<!-- Header Start-->
<script type="text/javascript">
    
$(document).ready(function() {
if (document.all && !document.querySelector) {
window.location="https://www.parallelbranch.com/ie.php";
}
});

/*window.onbeforeunload = function()
{
if ((window.event.clientX<0) && (window.event.clientY<0))
      {  
          alert("windows close");          
      }

//if (event.clientY < 0 || event.altKey) {
//            
//            alert('windows close');
//            return;
//        }
    
}*/
//window.onunload = function(){alert("Bye now!");}

/*window.onbeforeunload = function(e)
{
    //alert(e.clientY);
    
    //alert(window.screenLeft);    
}*/

/*$(window).unload(function() {
                if(event.clientY < 0) {
                    alert('windows close');
                    //do whatever you want when closing the window..
                }
            });*/
</script>
<script type="text/javascript">
function base64_encode (data) {
      var b64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
      var o1, o2, o3, h1, h2, h3, h4, bits, i = 0,
        ac = 0,
        enc = "",
        tmp_arr = [];
      if (!data) {
        return data;
      }
      do { // pack three octets into four hexets 
        o1 = data.charCodeAt(i++);
        o2 = data.charCodeAt(i++);
        o3 = data.charCodeAt(i++);
        bits = o1 << 16 | o2 << 8 | o3;
        h1 = bits >> 18 & 0x3f;
        h2 = bits >> 12 & 0x3f;
        h3 = bits >> 6 & 0x3f;
        h4 = bits & 0x3f;
        // use hexets to index into b64, and append result to encoded string
        tmp_arr[ac++] = b64.charAt(h1) + b64.charAt(h2) + b64.charAt(h3) + b64.charAt(h4);
      } while (i < data.length);
      enc = tmp_arr.join('');
      var r = data.length % 3;
      return (r ? enc.slice(0, r - 3) : enc) + '==='.slice(r || 3);
}

</script>


<script>
	$(document).bind("orientationchange", function(e){
	window.location.reload();
	}); 
</script>


<!--Start of Zopim Live shital Chat Script-->
<!--<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?10YPvkyraGim8nBkW2AvCqxLv9t8qCNP';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

  $zopim(function() {
    $zopim.livechat.set({
      language: 'en',
      name: 'Visitor'
    });
  });

$(document).ready(function(){
   // $(".gsc-control-cse").css({"padding:":"0!important"}); 
   // $(".gsc-control-cse-en").css({"padding:":"0!important"}); 
    //gsc-control-cse-en
});
</script>-->

<style>
.cse .gsc-control-cse,
.gsc-control-cse {
  padding: 0!important;
  width: 230px !important;
  
}
.cse .gsc-search-button input.gsc-search-button-v2, input.gsc-search-button-v2
{
    height: 13px;
    margin-top: 2px;
    min-width: 13px;
    padding: 6px 8px;
    width: 13px;
}
</style>
<!--End of Zopim Live Chat Script-->

<!-- Header Start-->
<!--<script type="text/javascript" src="http://cdn.gigya.com/js/gigyaGAIntegration.js"></script>
<script  type="text/javascript" lang="javascript">
    var expire5min = (new Date()).getTime() + 120000; // expiration time - 5 min from now
</script>
<script type="text/javascript" lang="javascript" src="http://cdn.gigya.com/JS/socialize.js?apikey=3_RmEK4ydaRcKb0AEE0yGPfHOpelv3rDzdkaq_sOGL5hFv6rt8ykiqDSW8IY27bBzO">
	{ 
		sessionExpiration:0 // expire the user login session when the browser closes
		,connectWithoutLoginBehavior: 'alwaysLogin' // This will cause Gigya's 'Adding Connection' operation (i.e. when the user clicks one of the social network buttons within the Social Plugins) 
													// to behave like a call to login in case the current user is not logged in.
		,autoShareExpiration: expire5min // User's auto-share selection will expire after 5 min
	}
</script>
<script type="text/javascript" lang="javascript" src="https://www.parallelbranch.com/js/json2.js"></script>
<script src="https://www.parallelbranch.com/js/login_handlers.js" type="text/javascript"></script>
<meta name="msapplication-tap-highlight" content="no" />
<meta property="fb:app_id" content="">
<meta property="og:url" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:type" content="article">
<meta property="og:image" content="">
<meta property="og:site_name" content=""/>-->

        
<script type="text/javascript">
function LoginSubmit()
{    
    var email_id = $("#email_id").val();
    var password = $("#password").val();
    var remembers;
    if($("#remember").is(':checked'))
        remembers="Yes";  // checked
    else
        remembers=""; 
    //jAlert(base64_encode(password));
    if(email_id && email_id != 'Email Id' && password != 'Password' && password )
           {
               $("#LoaderDiv").show();
               $('#UserLogin').css('opacity', '0.6');
               encoded_password = base64_encode(password);
               var data1="email_id="+email_id+'&password='+encoded_password+'&remembers=' + remembers + '&country=USA&action=LoginUser' ;
               //jAlert(data1);
               $.ajax({
                   url: "https://www.parallelbranch.com/user_ajax_process.php", type: "post", data: data1, cache: false,async: false,
                   success: loginSuccess
               });
               return false;
           }
       else
           {
                jAlert('Please enter a valid email id and password.', 'Parallel Branch');
                return false;
           }
}
function loginSuccess(html)
{
    //jAlert($.trim(html));
    //jAlert(html);
    var contents = $.trim(html);
    if(contents == 'success')
        {
            //$('#UserLogin').css('opacity', '');

            var url_link = '';

            if(url_link == 'course' || url_link == 'courses')
                 var Prev_url = 'https://www.parallelbranch.com//';
            else
                 var Prev_url = 'https://www.parallelbranch.com/My-Dashboard';

            setTimeout("window.location='"+Prev_url+"';",1000);
            setTimeout('$("#LoaderDiv").hide()',2000);
            //$("#LoaderDiv").hide();
        }
    else
        {
            //jAlert(contents);
            jAlert(contents, 'Parallel Branch');
            /*$("#password").val('');
            $("#passwordPlain").val('');
            $("#password").focus();*/
            $('#UserLogin').css('opacity', '');
            $("#LoaderDiv").hide();
                                            //document.getElementById(popup_overlay).style.display = 'block';
                                            //$("#popup_overlay").show();
        }

}
function RegisterSubmit()
{
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;    
    var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?_0123456789";

    for (var i = 0; i < $("#first_name").val().length; i++) 
        {
            if (iChars.indexOf($("#first_name").val().charAt(i)) != -1) 
                {
                    jAlert ("Only alphabets are allowed in first name.", 'Parallel Branch');
                    return false;
                }
         }
    if($("#first_name").val().match(/\s/g))
    {
        jAlert('Sorry, you are not allowed to enter any spaces in first name', 'Parallel Branch');
        $("#first_name").val()=$("#first_name").val().replace(/\s/g,'');    
    }
    for (var i = 0; i < $("#last_name").val().length; i++) 
        {
            if (iChars.indexOf($("#last_name").val().charAt(i)) != -1) 
                {
                    jAlert ("Only alphabets are allowed in last name.", 'Parallel Branch');
                    return false;
                }
         }
    if($("#last_name").val().match(/\s/g))
    {    
    
        jAlert('Sorry, you are not allowed to enter any spaces in last name', 'Parallel Branch');

        $("#last_name").val()=$("#last_name").val().replace(/\s/g,'');
    
    }
    
    if($("#first_name").val() == '' || $("#first_name").val() == 'First Name')
        {
            jAlert('Please enter first name', 'Parallel Branch');
            //$("#UserRegi").css('opacity',0.7);
            $("#first_name").focus();
            return false;
        }
    if($("#last_name").val() == '' || $("#last_name").val() == 'Last Name')
        {
            jAlert('Please enter last name', 'Parallel Branch');
            $("#last_name").focus();
            return false;
        }
    if($("#email_id_reg").val() == '' || $("#email_id_reg").val() == 'Email ID')
        {
            jAlert('Please enter a valid email Id', 'Parallel Branch');
            $("#email_id_reg").focus();
            return false;
        }
    if($("#email_id_reg").val() != '' && $("#email_id_reg").val() != 'Email ID')
        {
            if($("#email_id_reg").val().search(filter) == -1)
                {
                    jAlert('Please enter valid email Id', 'Parallel Branch');
                    $("#email_id_reg").focus();
                    return false;
                }
        }
    if($("#passwords").val() == '' || $("#passwords").val() == 'Password')
        {
            jAlert('Please enter password', 'Parallel Branch');
            $("#passwords").focus();
            return false;
        }
    if($("#conf_password").val() == '' || $("#conf_password").val() == 'Confirm Password')
        {
            jAlert('Please confirm password again', 'Parallel Branch');
            $("#conf_password").focus();
            return false;
        }
    if($("#passwords").val() != $("#conf_password").val())
        {
            jAlert('Please confirm password again', 'Parallel Branch');
            $("#conf_password").focus();
            return false;
        }
     else
         {
             $("#LoaderDiv").show();
            $('#UserRegi').css('opacity', '0.6');
             $("#JqueryRegisterForm").ajaxForm({
                               // target: '#LatestStatus',
                                success: function (html)
                                {                                    
                                   var recievehtml = $.trim(html);
                                   //jAlert(recievehtml);
                                    if(recievehtml == 'error')
                                        {
                                            jAlert('This email id is already registered with us. Please use a different email id.', 'Parallel Branch');
                                            return false;
                                        }                                        
                                    else
                                        {
                                            $('#UserRegi').css('opacity', '');
                                            $("#LoaderDiv").hide();
                                            $("#registerss").show();                                           
                                            $(document).ready(function() {
                                            $( "#registerss" ).dialog({
                                                modal: true,
                                                buttons: {
                                                             OK: function() { $( this ).dialog( "close" ); }
                                                         }
                                                });                                                
                                                $("#registerss").parent().css("width","490px");
                                            });
											
                                            $('#mask , #UserRegi').fadeOut(300 , function() {$('#mask').remove(); });
                                            $('.modal-backdrop').remove();
                                            $('body').removeClass('modal-open');
//                                            jAlert(recievehtml);
                                            //$("#error_nos").val('no');
                                            /*document.getElementById('JqueryRegisterForm').reset();
                                            $('#first_name').focus();
                                            $('#last_name').focus();
                                            $('#email_id_reg').focus();
                                            $('#passwords').focus();
                                            $('#conf_password').focus();*/
											
											
                                           
                                        }
                                }
                            }).submit();
         }    
}
function OpenLoginDiv()
{
    $("#loginBox").slideToggle();
}

        $(document).ready(function()
        {
    		$("#showProfile").mouseover(function() { $(".editPicture").css('visibility','visible'); });
    		$("#showProfile").mouseout(function() { $(".editPicture").css('visibility','hidden'); });
                
                jQuery("#JqueryForgotForm").validationEngine('attach', {promptPosition : "topLeft"});
        });
        
 function ForgotPass()
 {
     var emails = $("#forgot_email_id").val();
     if(emails == '')
         {
             jAlert('Enter registered E-mail', 'Parallel Branch');
             return false;
         }
     else
         {
             var data1="email_id="+emails+"&action=ForgotPassword12" ;
                           //jAlert(data1);
                           $.ajax({
                               url: "https://www.parallelbranch.com/user_ajax_process.php", type: "post", data: data1, cache: false, async: false,
                               success: function (html)
                                {
                                    //alert(html);
                                    var returnpath = $.trim(html);
                                    if(returnpath == 'found')
                                        {
                                            $("#forgotss").show();
                                            $(document).ready(function() {
                                            $( "#forgotss" ).dialog({
                                                modal: true,
                                                buttons: {
                                                            OK: function() { $( this ).dialog( "close" ); }
                                                         }
                                                });
                                            });                                            
                                            //jAlert('Your username &  password have been sent to your email address(If not received please check your spam folder)');
                                            $.modal.close();
                                        }
                                    else
                                      { jAlert('There is no user registered with this email address', 'Parallel Branch'); }
									  
									  						$('#mask , #UserLogin').fadeOut(300 , function() {$('#mask').remove(); });
															$('#ForgotPasswords').fadeOut(300 , function() {$('#mask').remove(); });
															$('.modal-backdrop').remove();
															$('body').removeClass('modal-open');
                                   
                                }
                           });
                           return false;
         }
 }
 
 
$(document).ready(function() 
   {
       textboxes = $("input.login-data");
       if ($.browser.mozilla) 
       {
           $(textboxes).keypress (checkForEnter);
       } 
       else 
       {
           $(textboxes).keydown (checkForEnter);
       }
   });
function checkForEnter (event) 
   {
       if (event.keyCode == 13) 
       {
           LoginSubmit();
           /* var email_id = $("#email_id").val();
            var password = $("#password").val();
            var remembers;
            if($("#remember").is(':checked'))
                remembers="Yes";  // checked
            else
                remembers=""; 
            //jAlert(base64_encode(password));
            if(email_id && email_id != 'Email Id' && password != 'Password' && password )
                   {
                       encoded_password = base64_encode(password);
                       var data1="email_id="+email_id+'&password='+encoded_password+'&remembers=' + remembers + '&action=LoginUser' ;
        //               jAlert(data1);
                       $.ajax({
                           url: "https://www.parallelbranch.com/user_ajax_process.php", type: "post", data: data1, cache: false,async: false,
                           success: function (html)
                            {
                                //jAlert($.trim(html));
                                var contents = $.trim(html);
                                if(contents == 'success')
                                    {
                                        var url_link = '';
                                        if(url_link == 'course' || url_link == 'courses')
                                             Prev_url = 'https://www.parallelbranch.com//';
                                        else
                                             Prev_url = 'https://www.parallelbranch.com/my-courses.php';
                                        window.location=Prev_url;//user-dashboard.php
                                    }
                                else
                                    {
                                        //jAlert(contents);
                                        jAlert(contents, 'Parallel Branch');
					return false;
                                        $("#password").val('');
                                        $("#passwordPlain").val('');
                                        $("#password").focus();
                                    }
                            }
                       });
                       //return false;
                   }
            else
               {
                    jAlert('Please enter a valid email id and password.', 'Parallel Branch');
                    return false;
               }*/
       } 
   }
function SubCourses(alphabate)
   {
       //jAlert(alphabate);
       var data1="alphabates="+alphabate+'&action=AlphabeticCourses' ;
       //jAlert(data1);
       $.ajax({
                   url: "https://www.parallelbranch.com/course_ajax_process.php", type: "post", data: data1, cache: false,
                   success: function (html)
                    {
                        //jAlert(html);
                        $("#AtoZcourses").html(html);
                    }
               });
               return false;
   }
</script>
<script type="text/javascript">
    
function openLoginss()
{   
    $("#GiftDiv").hide();
    $("#LoginViewDashboard").hide();
    LoginPopUp();
}
function openRegisters()
{
    RegisterPopUp();
    $("#GiftDiv").hide();
}


    function LoginPopUp()
    {
		$('#UserLogin').modal('toggle');
       // var loginBox ='#UserLogin';
//        //Fade in the Popup and add close button
//        $(loginBox).fadeIn(300);		
//        //Set the center alignment padding + border
//        var popMargTop = ($(loginBox).height() + 24) / 2;
//        var popMargLeft = ($(loginBox).width() + 24) / 2;
//
//        $(loginBox).css({
//                'margin-top' : -popMargTop,
//                'margin-left' : -popMargLeft
//        });		
//        // Add the mask to body
//        $('body').append('<div id="mask"></div>');
//        $('#mask').fadeIn(300);
//        resetdata();
//
//        //$('#forgotPass').focus();
//        return false;
    }
    function RegisterPopUp()
    {
		$('#UserRegi').modal('toggle');
       // var loginBox ='#UserRegi';//$(this).attr('href');
//        //Fade in the Popup and add close button
//        $(loginBox).fadeIn(300);		
//        //Set the center alignment padding + border
//        var popMargTop = ($(loginBox).height() + 24) / 2; 
//        var popMargLeft = ($(loginBox).width() + 24) / 2; 
//
//        $(loginBox).css({ 
//                'margin-top' : -popMargTop,
//                'margin-left' : -popMargLeft
//        });
//
//        // Add the mask to body
//        $('body').append('<div id="mask"></div>');
//        $('#mask').fadeIn(300);
//        resetdata();
//
//        return false;
    }
$(document).ready(function() {
   /* -------- Login Div start   --------- */    
	/*$('a.login-window').click(function() {		
		// Getting the variable's value from a link
		var loginBox = $(this).attr('href');
		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2;
		var popMargLeft = ($(loginBox).width() + 24) / 2;
		
		$(loginBox).css({
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
                resetdata();
		
                //$('#forgotPass').focus();
		return false;
	});*/
	
	// When clicking on the button close or the mask layer the popup closed
	$('a#closeLogin').live('click', function() {
	  $('#mask , #UserLogin').fadeOut(300 , function() {
                                                            $('#mask').remove();  
                                                        });
                                                        resetdata();
                            
                            return false;
	});
 /* -------- Login Div end   --------- */  	
 
  /* -------- Register Div start   --------- */ 
        
	/*$('a.regi-window').click(function() {		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');
		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
                resetdata();
		
		return false;
	});*/
	
	// When clicking on the button close or the mask layer the popup closed
	$('a#closeRegi').live('click', function() { 
	  $('#mask , #UserRegi').fadeOut(300 , function() {
		$('#mask').remove();                  
	}); 
        resetdata();
        
	return false;
	});
   /* -------- Register Div End   --------- */ 
   
   /* -------- offer Div start   --------- */  
	$('a.offer').click(function() {		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');
		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		//$('body').append('<div id="mask"></div>');
		//$('#mask').fadeIn(300);
                resetdata();
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.closeoffer').live('click', function() { 
	  $('#mask , #OffersDIV').fadeOut(300 , function() {
		$('#mask').remove();                  
	}); 
        resetdata();
        
	return false;
	});
   /* -------- offer Div End   --------- */ 
   
   /* -------- Gift Div start   --------- */  
	$('a#GiftDiv').click(function() {		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');
		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
                resetdata();
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a#closeGift').live('click', function() { 
	  $('#mask , #GiftDiv').fadeOut(300 , function() {
		$('#mask').remove();  
LoginPopUp();                
	}); 
        resetdata();
        
	return false;
	});
   /* -------- Gift Div End   --------- */ 
   
        $('a.OpenLoginDivs').live('click', function() { 
            $('#mask , #UserRegi').fadeOut(300 , function() {
                                                                //$('#mask').remove();                                                                  
                                                        }); 
                                                        resetdata();
               
            var loginBox = $(this).attr('href');
		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});		
		// Add the mask to body
		//$('body').append('<div id="mask"></div>');
		//$('#mask').fadeIn(300);
		
		return false;
        
	});
        
        $('a.OpenSignUpDiv').live('click', function() { 
            $('#mask , #UserLogin').fadeOut(300 , function() {
                                                                //$('#mask').remove();   
                                                        }); 
                                                        resetdata();               
            var loginBox = $(this).attr('href');
		$(loginBox).fadeIn(300);
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});		
		// Add the mask to body
	//	$('body').append('<div id="mask"></div>');
		//$('#mask').fadeIn(300);		
		return false;        
	});
     
 /* -------- Forgot Div start   --------- */       
        $('#forgotPass').click(function (e) {
            $('#mask , #UserLogin').fadeOut(300 , function() {
                                                            // $('#UserLogin').fadeOut(300 , function() {$('#mask').remove(); });
															//$('.modal-backdrop').remove();
															//$('body').removeClass('modal-open');
                                                        }); 
		$.extend($.modal.defaults, {closeClass: "Close"});								
		$('#ForgotPasswords').modal();
		return false;
	});
 /* -------- Forgot Div End  --------- */
  
 /* -------- PopUp div of change password   --------- */       
        $('a.changesetting').click(function() {		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');
		//Fade in the Popup and add close button
                //jAlert(loginBox);
		$(loginBox).fadeIn(300);		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);		
		return false;
	});
        $('a#closeSetting').live('click', function() { 
	  $('#mask , #Usersetting').fadeOut(300 , function() {
		$('#mask').remove();
                }); 
                document.getElementById('referFriendS').reset();
	return false;
	});
 /* -------- PopUp div of change password End  --------- */
 
 function SaveSettings()
 {
     $("#email_id_setting").val();
 }
});
function resetdata()
{
    document.getElementById('JqueryRegisterForm').reset();
    document.getElementById('passwords').style.display = "none";
    document.getElementById('passwordsPlain').style.display = "inline";
    document.getElementById('first_name').style.display = "none";
    document.getElementById('first_namePlain').style.display = "inline";
    document.getElementById('last_name').style.display = "none";
    document.getElementById('last_namePlain').style.display = "inline";
    document.getElementById('email_id_reg').style.display = "none";
    document.getElementById('email_id_regPlain').style.display = "inline";
    document.getElementById('conf_password').style.display = "none";
    document.getElementById('conf_passwordPlain').style.display = "inline";
    
    document.getElementById('JqueryLoginForm').reset();
    document.getElementById('password').style.display = "none";
    document.getElementById('passwordPlain').style.display = "inline";
    document.getElementById('email_id').style.display = "none";
    document.getElementById('email_idPlain').style.display = "inline";
}


</script>
<script type="text/javascript">
$(document).ready(function(){
$('#regiterBg').mouseover(function(){
    $('#loginBg').removeClass('activeli');
    });
$('#regiterBg').mouseout(function(){
    $('#loginBg').addClass('activeli');
    });

});

function SiteSearch()
{
    //jAlert('hi');
}
</script>

<script type="text/javascript">
function OpenMyaccount()
{
    //jAlert('https://www.parallelbranch.com/');
    window.location="https://www.parallelbranch.com/my-account.html";
}
</script>
    <div id="forgotss" style="display:none;" title="Welcome to Parallel Branch"><center><br><p>Your username & password have been sent to your email address.<br/> If you haven’t received it, please check your spam folder. </p></center></div>

    <div id="registerss" style="width:490px!important; display:none; line-height:22px; font-size:12px; padding:20px; font-weight:bold;" title="Welcome to Parallel Branch"><p>
        Thank you for registering with ParallelBranch. <br /> We have emailed you a link with instructions to verify your e-mail address.
        <br />If you haven’t received it, please check your SPAM folder. 
        </p>
</div>
    <!-- Top Menu  -->
    
<div class="topMenu">

<div class="topmenuWraper">

<div class="navbar navbar-default">
<div id="mobMenu">

<div style="width:150px; float:left;">
<ul>
	<li style="list-style:none; padding:17px;" class="activeli">
    <a href="https://www.parallelbranch.com/courses/online-courses-from-parallel-branch/" style="color:#fff; font-size:13px;">Course Catalog</a>
    </li>
</ul>
</div>
<!-- For Ipad Verticle Menu start-->
<div class="IpadTopMenu">
          <ul>
                  
          </ul>
          </div>
</div>
<!-- For Ipad Verticle Menu End-->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div class="navbar-collapse collapse">
        	<ul class="welcome nav navbar-nav rightNavi mycartDisplay">
           


	<!--courses start-->
<div class="dcjq-mega-menu" id="deskMenu" style=" float:right; text-align:center;">
<ul id="mega-menu-tut" class="menu">
	<li><a href="https://www.parallelbranch.com/courses/online-courses-from-parallel-branch/" style="color:#fff; font-size:13px;">Course Catalog</a>
 		 <ul>
         	<li class="subMenu new_drop_down">
            <div class="subject">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                        <!--                        <td align="left" class="subject_font">Subjects</td>-->
                        <td align="right"><a href="https://www.parallelbranch.com/courses/online-courses-from-parallel-branch/" class="view_font" style="text-decoration:underline!important;">View All</a></td>
                        </tr>
                    </table>
                </div>
            <div class="submenu_div" id="AtoZcourses" style="z-index:9999 !important;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="5">
                              <tr><td><a href="https://www.parallelbranch.com/learn-erp-functional-course-online/"> ERP - Functional <span class="greenText"> (6) </span></a></td><td><a href="https://www.parallelbranch.com/learn-oracle-course-online/"> Oracle <span class="greenText"> (8) </span></a></td></tr></tr><td><a href="https://www.parallelbranch.com/learn-database-administration-course-online/"> Database Administration <span class="greenText"> (2) </span></a></td><td><a href="https://www.parallelbranch.com/learn-business-intelligence-course-online/"> Business Intelligence <span class="greenText"> (1) </span></a></td></tr></tr><td><a href="https://www.parallelbranch.com/learn-apache-hadoop-course-online/"> Apache Hadoop <span class="greenText"> (5) </span></a></td><td><a href="https://www.parallelbranch.com/learn-finance-course-online/"> Finance <span class="greenText"> (1) </span></a></td></tr></tr><td><a href="https://www.parallelbranch.com/learn-software-testing-course-online/"> Software Testing <span class="greenText"> (2) </span></a></td><td><a href="https://www.parallelbranch.com/learn-microsoft-course-online/"> Microsoft <span class="greenText"> (6) </span></a></td></tr></tr><td><a href="https://www.parallelbranch.com/learn-programming-course-online/"> Programming <span class="greenText"> (7) </span></a></td><td><a href="https://www.parallelbranch.com/learn-web-development-course-online/"> Web Development <span class="greenText"> (3) </span></a></td></tr></tr><td><a href="https://www.parallelbranch.com/learn-free-course-online/"> Free Course<span class="greenText"> (3) </span></a></td></tr>
                          </table><!--               <table width="100%" border="0" cellspacing="0" cellpadding="5">
                      <tr>
                        <td><a href="javascript:void(0);">3D + Animation<span class="greenText"> (38)</span></a></td>
                        <td><a href="javascript:void(0);">3D + Animation<span class="greenText"> (38)</span></a></td>
                      </tr>                       
                    </table>-->
                </div>  
                
            </li>            
  		</ul>
  	</li>
</ul>
</div>
<!--courses end-->

</ul>
<ul class="nav navbar-nav navbar-right login">
            <li style="cursor:pointer; " class="activeli padding" data-toggle="modal" data-target="#UserLogin" id="loginBg" onclick="LoginPopUp();"><a href="javascript:void(0);">Login</a></li><li id="regiterBg" data-toggle="modal" data-target="#UserRegi" onclick="RegisterPopUp();" class="pd" style="cursor:pointer;"><a href="javascript:void(0);" class="padding">Register</a></li>         <li style="background:none !important;">
         	 <form method="get" name="search" action="https://www.parallelbranch.com/site_search.php">
            <div class="searchBox">
                <div class="textbox">
                    <input type="text" value="" name="s" id="s" title="Search" class="defaultText watermarkOn" style="height:16px !important;" />
                </div>
                <div style="width:16px; float:right;"><input type="image" style="width:16px; height:16px;" src="https://www.parallelbranch.com/images/serchBtn.png"  alt="Search" onclick="SiteSearch();" /></div>        
            </div>
        </form>
         </li>
          </ul>
          
          
          
        </div><!--/.nav-collapse -->
      </div>
  
<div style="float:left; width:44%; text-align:left;">
 

</div>


  
</div>
    <div class="loginBtnHolder">    
    <div style="float:left; width:42%; margin-right:2%;">
    
       
        <ul class="login">	
        <!-- ToolTip-->
        		<div id="tiptip_holder">
                <div id="tiptip_content">
                <div id="tiptip_arrow">
                <div id="tiptip_arrow_inner"></div>
                </div>
                </div>
                </div>
        <!-- ToolTip End-->
       
       
        </ul>
 <!--<div class="activeli login" style="width:100px; float:right !important; margin-left:auto; margin-right:auto;"><a href="https://www.parallelbranch.com/courses/all.html">Courses</a></div>-->
    </div>
   
  </div>
</div>
    <div class="loginBtnHolder">    
    <div style="float:left; width:42%; margin-right:2%;">
    
       
        <ul class="login">	
        <!-- ToolTip-->
        		<div id="tiptip_holder">
                <div id="tiptip_content">
                <div id="tiptip_arrow">
                <div id="tiptip_arrow_inner"></div>
                </div>
                </div>
                </div>
        <!-- ToolTip End-->
       
       
        </ul>
 <!--<div class="activeli login" style="width:100px; float:right !important; margin-left:auto; margin-right:auto;"><a href="https://www.parallelbranch.com/courses/all.html">Courses</a></div>-->
    </div>
   
  </div>
</div>
<!-- Top Menu End-->
<div class="clearIt"></div>
<div class="headerHolder">
  <div class="header">
     <div class="logo"><a href="https://www.parallelbranch.com/Home"><img src="https://www.parallelbranch.com/UploadedData/1379573337logo.jpg"  border="0" alt="Logo" /></a></div>
   <div class="otherView" style="width:auto;">
   		 <!-- Header Slider-->
    <div class="weOfferholder">
    <div class="offer">
    <div class="weHolder">We offer</div>
    <div class="weText" style="height:26px; overflow:hidden;">
        <div id="newsticker-demo">  
            <div class="newsticker-jcarousellite" >
                <ul>
                    <li> <div class="info">Self Paced Online Courses</div><div class="clear"></div></li><li> <div class="info">Industry Focused Courses</div><div class="clear"></div></li><li> <div class="info">Path To Certification</div><div class="clear"></div></li>               
                                                
                </ul>
            </div>                
        </div>
    </div>
    	</div>
    </div>
    <!-- header Slider End-->
        
       </div>
    
    
    <div class="ipadView">
    	 
    <!-- header Slider End-->
            
    <div class="weOfferholder">
    <div class="offer">
    <div class="weHolder">We offer</div>
    <div class="weText">
        <div id="newsticker-demo">  
            <div class="newsticker-jcarousellite">
                <ul>
                    <li> <div class="info">Self Paced Online Courses</div><div class="clear"></div></li><li> <div class="info">Industry Focused Courses</div><div class="clear"></div></li><li> <div class="info">Path To Certification</div><div class="clear"></div></li>                <!--    <li>                        
                        <div class="info">  Self Paced Online Courses </div>
                        <div class="clear"></div>
                    </li>                       
                    <li>                        
                        <div class="info">Industry Focused Courses</div>
                        <div class="clear"></div>
                    </li>
                    <li>                        
                        <div class="info">  Path To Certification </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="info">Demos to make learning easy</div>
                        <div class="clear"></div>
                    </li>-->
                                                
                </ul>
            </div>                
        </div>
    </div>
    	</div>
    </div>
    </div>
    
    
    
    <div class="search Holder">  
        <form method="get" name="search" action="https://www.parallelbranch.com/courses.php">         
<!--         <div class="searchBox" >   <div class="textbox">
          <div class="searchBox_google" >   
            <script>
                (function() {
                    var cx = '000605101738465525515:kpffcdjtmk4';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                    '//www.google.com/cse/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                })();
            </script>
            <gcse:search></gcse:search>
            </div></div>
        </div>-->
<style>

    .ui-autocomplete {
		max-height: 150px;
        width:15%!important;       
		overflow-y: auto;
		/* prevent horizontal scrollbar */
		overflow-x: hidden;
		/* add padding to account for vertical scrollbar */		
		background:#ffffff;
		/*border:solid 1px #D6D6D6;
    border-radius: 5px 5px 5px 5px;*/
    box-shadow: 0 0 4px 1px #C9C9C9 inset;
    padding: 3px 8px 10px;
    font-size: 13px;
	top:27px;
	right:2% !important;
	left:auto !important;
	}
    * html .ui-autocomplete {
		height: 100px; 
		
	}
DIV.list_item_container {
    height: auto;
    padding: 5px;
}
DIV.image {
    width: 30px;
    height: 30px;
    float: left;
    padding:5px;
}
</style>
<script type="text/javascript">
$(document).ready(function() 
    {
          var availableTags = [
                                                                {url:'1', value:'Oracle-Applications-R12-Inventory-Fundamentals',image:'https://www.parallelbranch.com/UploadedData/13812995441376730828R12_20Inventory_20Fundamentals_120dpi__a729b6dc685c43b5bb7ef640e7a11eda.jpg'},
                                                                            {url:'2', value:'Oracle-Applications-R12-Inventory-Advance',image:'https://www.parallelbranch.com/UploadedData/13812997111376730884R12_20Inventory_20Advance_120dpi__cfaf88bffef8c34e2982e36a88e20f25.jpg'},
                                                                            {url:'3', value:'Oracle-Applications-R12-Inventory-Fundamentals-and-Advance',image:'https://www.parallelbranch.com/UploadedData/1376730946R12 Inventory Fundamentals & Advance(120dpi).jpg'},
                                                                            {url:'4', value:'Oracle-Applications-R12-Order-Management-and-Pricing',image:'https://www.parallelbranch.com/UploadedData/13812998121378875445R12_OM__20__20Pricing_20_120_20dpi__10b8ec851eef48273c2219e10421ed78.jpg'},
                                                                            {url:'6', value:'Oracle-SQL-11g-Advance',image:'https://www.parallelbranch.com/UploadedData/1376731125Oracle SQL 11g_Advance(120dpi).jpg'},
                                                                            {url:'10', value:'Oracle-Business-Intelligence-Enterprise-Edition-(OBIEE)-11g',image:'https://www.parallelbranch.com/UploadedData/1376729927Banner_BusinessIntelligence9(120dpi).jpg'},
                                                                            {url:'11', value:'Big-Data-and-Apache-Hadoop-for-Developers-Fundamentals',image:'https://www.parallelbranch.com/UploadedData/1376729712Apache Hadoop_Fundamentals(120dpi).jpg'},
                                                                            {url:'14', value:'Accounting-Concepts-For-Technocrats',image:'https://www.parallelbranch.com/UploadedData/1385726085288 - 135.jpg'},
                                                                            {url:'15', value:'Basics-of-Software-Testing',image:'https://www.parallelbranch.com/UploadedData/1376731394Basics of Software Testing(120dpi).jpg'},
                                                                            {url:'16', value:'Test-Automation-using-Selenium',image:'https://www.parallelbranch.com/UploadedData/13812997641376731417Test_20Automation_20using_20Selenium_120_c2ee6292a2953fc842420da11e3af7df.jpg'},
                                                                            {url:'17', value:'Microsoft-SharePoint-for-Developers-Fundamentals',image:'https://www.parallelbranch.com/UploadedData/1386077331Microsoft SharePoint for Developers - Fundamentals.jpg'},
                                                                            {url:'105', value:'Oracle-E-Business-Suite-R12-Fundamentals-for-Implementers',image:'https://www.parallelbranch.com/UploadedData/1382610435Oracle E-Business Suite R12 Fundamentals for Implementers  .jpg'},
                                                                            {url:'109', value:'Oracle-SQL-11g-Fundamentals',image:'https://www.parallelbranch.com/UploadedData/1383139431Oracle SQL 11g_Fundamentals.jpg'},
                                                                            {url:'110', value:'Oracle-SQL-11g-Fundamentals-and-Advance',image:'https://www.parallelbranch.com/UploadedData/1383285000Oracle SQL 11g_Fundamentals & Advance.jpg'},
                                                                            {url:'111', value:'Apache-Hadoop-for-Developers-–-Advance',image:'https://www.parallelbranch.com/UploadedData/1384149781Apache Hadoop_Advance.jpg'},
                                                                            {url:'112', value:'Apache-Hadoop-for-Developers-Fundamentals-and-Advance',image:'https://www.parallelbranch.com/UploadedData/1384158650Apache Hadoop_Fundamentals & Advance.jpg'},
                                                                            {url:'113', value:'Oracle-E-Business-Suite-R12-Applications-DBA',image:'https://www.parallelbranch.com/UploadedData/1384839744Oracle E-Business Suite R12 Applications DBA.jpg'},
                                                                            {url:'114', value:'Oracle-SQL-11g--Oracle-Apps-R12-DBA',image:'https://www.parallelbranch.com/UploadedData/1384862081Oracle SQL 11g  Oracle Apps R12 DBA.jpg'},
                                                                            {url:'115', value:'Microsoft-SharePoint-for-Developers-Advance',image:'https://www.parallelbranch.com/UploadedData/1386071477Microsoft SharePoint for Developers - Advance.jpg'},
                                                                            {url:'117', value:'Step-by-step-HTML-and-CSS-for-absolute-beginners',image:'https://www.parallelbranch.com/UploadedData/1389599000Step-by-step HTML and CSS for absolute beginners - 1.jpg'},
                                                                            {url:'118', value:'Getting-to-Know-WordPress-The-Basics',image:'https://www.parallelbranch.com/UploadedData/1389598938Getting to Know world press -The Basics - 3.jpg'},
                                                                            {url:'119', value:'Data-Extraction-Tips-and-Tricks',image:'https://www.parallelbranch.com/UploadedData/1389172064Data Extraction Tips and Tricks - 1a.jpg'},
                                                                            {url:'120', value:'Developing-Your-Spreadsheet-Skills',image:'https://www.parallelbranch.com/UploadedData/1389598808Developing Your Spreadsheet Skills 1.jpg'},
                                                                            {url:'121', value:'Getting-to-Know-Drupal-The-Basics',image:'https://www.parallelbranch.com/UploadedData/1389598859Getting to Know Drupal- The Basics 1.jpg'},
                                                                            {url:'122', value:'C--Programming',image:'https://www.parallelbranch.com/UploadedData/1387866122C++ Programming 4.jpg'},
                                                                            {url:'123', value:'Ethical-Hacking-and-Web-Application-Security',image:'https://www.parallelbranch.com/UploadedData/1387789399Ethical Hacking and Web Application Security - 1.jpg'},
                                                                            {url:'124', value:'Microsoft-Visual-C.Net-Fundamentals',image:'https://www.parallelbranch.com/UploadedData/1388037548MicrosoftVisualC1.jpg'},
                                                                            {url:'132', value:'Apache-Hadoop-Developers-Track',image:'https://www.parallelbranch.com/UploadedData/1389163409Apache hadoop Fr devp track 1.jpg'},
                                                                            {url:'133', value:'Oracle-PL/SQL-11g-Advance',image:'https://www.parallelbranch.com/UploadedData/1390827688Oracle PLSQL 11g - Advance 6.jpg'},
                                                                            {url:'136', value:'Oracle-PL/SQL-11g-Fundamentals',image:'https://www.parallelbranch.com/UploadedData/1391578279Oracle PLSQL 11g - Fundamentals (a).jpg'},
                                                                            {url:'137', value:'Oracle-PL/SQL-11g-Fundamentals-and-Advance',image:'https://www.parallelbranch.com/UploadedData/1391585005Oracle PLSQL 11g - Fundamentals & Advance (b).jpg'},
                                                                            {url:'138', value:'Oracle-SQL-and-PL/SQL-11g',image:'https://www.parallelbranch.com/UploadedData/1391591115Oracle SQL & PLSQL 11g (b).jpg'},
                                                                            {url:'139', value:'Core-Java-Programming',image:'https://www.parallelbranch.com/UploadedData/1392637695Core Java Programming 1.jpg'},
                                                                            {url:'142', value:'Learn-XML-Programming',image:'https://www.parallelbranch.com/UploadedData/1393307477XML 5.jpg'},
                                                                            {url:'143', value:'Microsoft-Excel-Fundamentals',image:'https://www.parallelbranch.com/UploadedData/1393307683Microsoft Excel 2010 - Fundamentals 2.jpg'},
                                                                            {url:'144', value:'Apache-Hadoop-Machine-Learning-and-Hadoop-Eco-System',image:'https://www.parallelbranch.com/UploadedData/1396519924Apache Hadoop - Machine Learning and Hadoop Eco system 2.jpg'},
                                                                            {url:'145', value:'Microsoft-SharePoint-Administration-Fundamentals-',image:'https://www.parallelbranch.com/UploadedData/1397128982Microsoft Sharepoint Administration - Fundamentals 1.jpg'},
                                                                            {url:'146', value:'Oracle-XML-Publisher-for-Developers-Essentials',image:'https://www.parallelbranch.com/UploadedData/1397122782Oracle XML Publisher for Developers- Essentials 1.jpg'},
                                                                            {url:'147', value:'Advance-Java-Programming',image:'https://www.parallelbranch.com/UploadedData/1399293225Advance Java Course 2 (1).jpg'},
                                                                            {url:'148', value:'Oracle-EBS-R12-AOL-and-System-Administrator-for-Developers',image:'https://www.parallelbranch.com/UploadedData/1400054872AOL SysAdmin.jpg'},
                                                                            {url:'149', value:'Microsoft-Visual-C.Net-Advance-Programming',image:'https://www.parallelbranch.com/UploadedData/1400067514Microsoft1.jpg'},
                                                        ];
                    $("#s" ).autocomplete({
                                source: availableTags,
                                select: function(event, ui) 
                                {
                                    courses = ui.item.value;
                                    replacestring =courses.replace(" ","-");
                                    coursename = replacestring.replace("'","-");  
                                    coursesLoc = base64_encode(ui.item.url);
                                    window.location  = ('https://www.parallelbranch.com/course/learn-'+coursename+'-online/');
                                    //window.location  = ('https://www.parallelbranch.com/course/'+coursename+'/'+coursesLoc);
                                    return false;
                                }
                            }).data( "autocomplete" )._renderItem = function( ul, item ) {
        var inner_html = '<a><div class="list_item_container"><div class="image"><img src="https://www.parallelbranch.com/'&#32;+&#32;item.image&#32;+&#32;'" height="30" width="30"></div><div class="label">' + item.value + '</div></div></a>';
        return $( "<li></li>" )
            .data( "item.autocomplete", item )
            .append(inner_html)
            .appendTo( ul );
    };
                            
                    /*$("#keyword_cat" ).autocomplete({
                                source: availableTags,
                                select: function(event, ui) 
                                {
                                    courses = ui.item.value;
                                    replacestring =courses.replace(" ","-");
                                    coursename = replacestring.replace("'","-");
                                    coursesLoc = base64_encode(ui.item.url);                                    
                                    window.location  = ('https://www.parallelbranch.com/course/'+coursename+'/'+coursesLoc);
                                    return false;
                                }
                            });*/
    }); 
    jQuery(document).ready(function() {
	document.getElementById('passwords').style.display = "none";
	document.getElementById('passwordsPlain').style.display = "inline";
        document.getElementById('last_name').style.display = "none";
	document.getElementById('last_namePlain').style.display = "inline";
        document.getElementById('first_name').style.display = "none";
	document.getElementById('first_namePlain').style.display = "inline";
        document.getElementById('email_id_reg').style.display = "none";
	document.getElementById('email_id_regPlain').style.display = "inline";
        document.getElementById('email_id').style.display = "none";
	document.getElementById('email_idPlain').style.display = "inline";
        document.getElementById('password').style.display = "none";
	document.getElementById('passwordPlain').style.display = "inline";
               
});
function swapPasswordBoxes(funcType) {
	if(funcType == "click") {
		document.getElementById('passwordsPlain').style.display = "none";
		document.getElementById('passwords').style.display = "inline";
		document.getElementById('passwords').focus();
	} else {
		if(document.getElementById('passwords').value.length == 0) {
			document.getElementById('passwordsPlain').style.display = "inline";
			document.getElementById('passwords').style.display = "none";
		}
	}
}
function swapPasswordBoxes1(funcType)
{
    if(funcType == "click") {
		document.getElementById('last_namePlain').style.display = "none";
		document.getElementById('last_name').style.display = "inline";
		document.getElementById('last_name').focus();
	} else {
		if(document.getElementById('last_name').value.length == 0) {
			document.getElementById('last_namePlain').style.display = "inline";
			document.getElementById('last_name').style.display = "none";
		}
	}
}
function swapPasswordBoxes2(funcType)
{
    if(funcType == "click") {
		document.getElementById('first_namePlain').style.display = "none";
		document.getElementById('first_name').style.display = "inline";
		document.getElementById('first_name').focus();
	} else {
		if(document.getElementById('first_name').value.length == 0) {
			document.getElementById('first_namePlain').style.display = "inline";
			document.getElementById('first_name').style.display = "none";
		}
	}
}
function swapPasswordBoxes3(funcType)
{
    if(funcType == "click") {
		document.getElementById('email_id_regPlain').style.display = "none";
		document.getElementById('email_id_reg').style.display = "inline";
		document.getElementById('email_id_reg').focus();
	} else {
		if(document.getElementById('email_id_reg').value.length == 0) {
			document.getElementById('email_id_regPlain').style.display = "inline";
			document.getElementById('email_id_reg').style.display = "none";
		}
	}
}
function swapPasswordBoxes4(funcType)
{
    if(funcType == "click") {
		document.getElementById('conf_passwordPlain').style.display = "none";
		document.getElementById('conf_password').style.display = "inline";
		document.getElementById('conf_password').focus();
	} else {
		if(document.getElementById('conf_password').value.length == 0) {
			document.getElementById('conf_passwordPlain').style.display = "inline";
			document.getElementById('conf_password').style.display = "none";
		}
	}
}
function swapPasswordBoxes5(funcType)
{
    if(funcType == "click") {
		document.getElementById('email_idPlain').style.display = "none";
		document.getElementById('email_id').style.display = "inline";
		document.getElementById('email_id').focus();
	} else {
		if(document.getElementById('email_id').value.length == 0) {
			document.getElementById('email_idPlain').style.display = "inline";
			document.getElementById('email_id').style.display = "none";
		}
	}
}
function swapPasswordBoxes6(funcType)
{
    if(funcType == "click") {
		document.getElementById('passwordPlain').style.display = "none";
		document.getElementById('password').style.display = "inline";
		document.getElementById('password').focus();
	} else {
		if(document.getElementById('password').value.length == 0) {
			document.getElementById('passwordPlain').style.display = "inline";
			document.getElementById('password').style.display = "none";
		}
	}
}
</script>
<div style="float:right; width:50%;">
         
        </form>
<!--      <div class="callUs">Call Us: <span>123456789</span></div>-->
     <!-- <div class="liveChat"><a href="javascript:void(0);">Live Chat</a></div>-->
    </div>
    <!-- Menu Start-->
    <div class="clearIt"></div>
    <div class="mainMenu">
      <div class="oe_wrapper">
     
        <div style="float:left;">
        	<!--<ul id="oe_menu" class="oe_menu">
          <li><a href="Home">Home</a></li>
          
        </ul>-->
        </div>
        <!--<div style="float:right;">
        	<ul id="oe_menu" class="oe_menu" style="margin:0px;">
            	<li><a href="Allpage/about-us/1.html">About Us</a></li>
          		<li><a href="FAQ.html"> FAQ</a></li>
          		<li class="last"><a href="contact-us.html">Contact Us</a></li>
            </ul>
        </div>-->
      </div>
    </div>
    <!-- Menu End--> 
    </div>
    </div>
  
</div>



<!-- Login Div Start-->    

<div class="modal" id="UserLogin">
<div style="position:relative; display:none;" id="LoaderDiv" >
    <div style="position:absolute; height:32px; width:32px; top:10px; left:47%;"><img src="https://www.parallelbranch.com/images/loading.gif" /></div>
</div>
  <div class="modal-dialog smallpop">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" id="closemodal" class="close" data-dismiss="modal">&times;</button>
       <h1 class="modal-title">Login and start learning</h1>
      </div>
     
      <div class="modal-footer">
        <p> 
        <div class="loginNew">
        <form name="LoginForm" method="post" id="JqueryLoginForm">
          <div class="signText">Login with your ParallelBranch credentials:</div>
          <div>
              <input type="text" name="email_idPlain" id="email_idPlain" class="login-data" value="Email Id" onfocus="swapPasswordBoxes5('click')" style="display:none;"/>
              <input type="text" name="email_id" id="email_id" class="login-data" value="" onblur="swapPasswordBoxes5('blur')" />
<!--              <input type="text" value="" class="defaultText watermarkOn  login-data" name="email_id" id="email_id" title="Email Id" />-->
          </div>
          <div style="margin-top:20px;">
              <input type="text" name="passwordPlain" id="passwordPlain" class="login-data" value="Password" onfocus="swapPasswordBoxes6('click')" style="display:none;"/>
              <input type="password" name="password" id="password" class="login-data" value="" onblur="swapPasswordBoxes6('blur')" />         
<!--              <input type="checkbox" name="remember_me" value="yes"   /> Keep Me Signed In-->
<!--              <input type="password" value="" class="defaultText watermarkOn  login-data" name="password" id="password" title="Password" />-->
          </div>
          <div style="margin-top:8px;">
          <input style="margin-top:3px;" type="checkbox" name="remember" id="remember" value="Yes" ><span style="padding-left:10px;">Remember Me</span>
          </div> 
          <div style="margin-top:20px; width:100%; float:left;">
            <table cellpadding="0" cellspacing="0" width="100%">
            	<tr>
                	<td align="left"> <input type="button" name="submit" value="Submit" class="submitBtn" style="cursor:pointer;"  onclick="LoginSubmit();" /></td>
                    <td align="right"><a href="javascript:void(0);" data-toggle="modal" data-dismiss="modal" data-target="#ForgotPasswords" class="forgotpass" id="forgotPass">Forgot password?</a></td>
                </tr>
            </table>
          </div>
         
        </form>
    </div>
        <div  class="loginOr">&nbsp;</div>
        <div class="loginNew">
    <div class="signText">Login with your Social Network</div>
        <div class="networkHolder" width="100%" style="margin:0px!important;">
            <table cellpadding="0" cellspacing="8" align="center">
                <tr>
<!--                    <td><a href="index.php?login&oauth_provider=twitter&" target="_blank" onClick="_gaq.push(['_trackEvent', 'social media', 'Login', 'PB_Twitter']);" ><img src="images/reg_twitter.png" width="55" height="54" alt="Twitter" /></a></td>-->
                    <td><a href="https://www.parallelbranch.com/index.php?login&oauth_provider=google&" onClick="_gaq.push(['_trackEvent', 'social media', 'Login', 'PB_Google+']);" ><img src="https://www.parallelbranch.com/images/reg_google.png" width="55" height="54" alt="Google" /></a></td>
                    <td><a href="https://www.parallelbranch.com/index.php?login&oauth_provider=facebook&" onClick="_gaq.push(['_trackEvent', 'social media', 'Login', 'PB_Facebook']);"  ><img src="https://www.parallelbranch.com/images/reg_facebook.png" width="55" height="54" alt="Facebook" /></a></td>
                    <td><a href="https://www.parallelbranch.com/index.php?login&oauth_provider=LinkedIn&" onClick="_gaq.push(['_trackEvent', 'social media', 'Login', 'PB_LinkedIn']);" ><img src="https://www.parallelbranch.com/images/reg_linkdin.png" width="55" height="54" alt="LinkedIn" /></a></td>
                    <td><a href="https://www.parallelbranch.com/index.php?login&oauth_provider=yahoo&" onClick="_gaq.push(['_trackEvent', 'social media', 'Login', 'PB_Yahoo']);" ><img src="https://www.parallelbranch.com/images/reg_yahoo.png" width="55" height="54" alt="Yahoo" /></a></td>
<!--                <td><div class="login-buttons" id="loginDiv"></div></td>-->
                </tr>
            </table>
<!--            <div class="login-buttons" id="loginDiv"></div>-->
        </div>
        <div style=" position:absolute; bottom:24px; padding-left: 10px; font-size:15px;" >Don't have an account? <a href="javascript:void(0);" data-toggle="modal" data-dismiss="modal" data-target="#UserRegi" onclick class="greenText OpenSignUpDiv">Signup</a> </div>
    </div>
        </p>
    
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>


<!-- Login Div End-->

<!-- Register Div Start-->
<div class="modal" id="UserRegi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" id="closemodal" class="close" data-dismiss="modal">&times;</button>
       <h1 class="modal-title">Join today and start learning!</h1>
      </div>
     
      <div class="modal-footer">
        <p> 
        <div class="loginNew">
        <form name="LoginForm" method="post" id="JqueryRegisterForm" action="https://www.parallelbranch.com/user_ajax_process.php?action=registeruser">  
            <input type="hidden" name="country" id="country" value="USA" />
            <input type="hidden" name="error_nos" id="error_nos" value="yes" />
          <div style="margin-left:20px; margin-top:15px;">      
              <input type="text" name="first_namePlain" id="first_namePlain" class="login-data" value="First Name" onfocus="swapPasswordBoxes2('click')" style="display:none;"/>
              <input type="text" name="first_name" id="first_name" class="login-data" value="" onblur="swapPasswordBoxes2('blur')" maxlength="20" />
<!--          <input type="text" value="" class="defaultText watermarkOn  login-data" name="first_name" id="first_name" title="First Name" maxlength="20" />-->
          </div>
          <div style="margin-left:20px; margin-top:15px;">
              <input type="text" name="last_namePlain" id="last_namePlain" class="login-data" value="Last Name" onfocus="swapPasswordBoxes1('click')" style="display:none;"/>
              <input type="text" name="last_name" id="last_name" class="login-data" value="" onblur="swapPasswordBoxes1('blur')" maxlength="20" />
<!--              <input type="text" value="" class="defaultText watermarkOn  login-data" name="last_name" id="last_name" title="Last Name" maxlength="20" />-->
          </div>
          <div style="margin-left:20px; margin-top:15px;">
              <input type="text" name="email_id_regPlain" id="email_id_regPlain" class="login-data" value="Email ID" onfocus="swapPasswordBoxes3('click')" style="display:none;"/>
              <input type="text" name="email_id_reg" id="email_id_reg" class="login-data" value="" onblur="swapPasswordBoxes3('blur')" maxlength="40" />
<!--              <input type="text" value="" class="defaultText watermarkOn  login-data" name="email_id_reg" id="email_id_reg" title="Email Id" maxlength="40" />-->
          </div>          
          <div style="margin-top:15px;margin-left:20px;">
              <input type="text" name="passwordsPlain" id="passwordsPlain" class="login-data" value="Password" onfocus="swapPasswordBoxes('click')" style="display:none;"/>
              <input type="password" name="passwords" id="passwords" class="login-data" value="" onblur="swapPasswordBoxes('blur')" maxlength="20" />
<!--              <input type="password" value="" class="defaultText watermarkOn  login-data" name="passwords" id="passwords" title="Password" maxlength="20" />-->
          </div>
          <div style="margin-top:15px;margin-left:20px;">
              <input type="text" name="conf_passwordPlain" id="conf_passwordPlain" class="login-data" value="Confirm Password" onfocus="swapPasswordBoxes4('click')" />
              <input type="password" name="conf_password" id="conf_password" class="login-data" value="" onblur="swapPasswordBoxes4('blur')" maxlength="20" style="display:none;" />
<!--              <input type="password" value="" class="defaultText watermarkOn  login-data" name="conf_password" id="conf_password" title="Confirm Password" maxlength="20" />-->
          </div>
              <input type="hidden" name="tesst" id="tesst" value="" />
          <div style="margin-top:15px; margin-left:20px;  float:left; text-align:right"><input type="button" name="submit" value="Register" class="submitBtn" style="cursor:pointer;"  onclick="return RegisterSubmit();" /></div>
        </form>
    </div>
        <div  class="loginOr">&nbsp;</div>
        <div class="loginNew">
    	<div class="signText">Login with your Social Network</div>
            <div class="networkHolder" width="100%" style="margin:0px!important;">
                <table cellpadding="0" cellspacing="8" align="center">
                    <tr>
<!--                        <td><a href="index.php?login&oauth_provider=twitter&" target="_blank" onClick="_gaq.push(['_trackEvent', 'social media', 'Register', 'PB_Twitter']);"><img src="images/reg_twitter.png" width="55" height="54" alt="Twitter" /></a></td>-->
                        <td><a href="https://www.parallelbranch.com/index.php?login&oauth_provider=google&" onClick="_gaq.push(['_trackEvent', 'social media', 'Register', 'PB_Google+']);"  ><img src="https://www.parallelbranch.com/images/reg_google.png" width="55" height="54" alt="Google" /></a></td>
                        <td><a href="https://www.parallelbranch.com/index.php?login&oauth_provider=facebook&"  onClick="_gaq.push(['_trackEvent', 'social media', 'Register', 'PB_Facebook']);" ><img src="https://www.parallelbranch.com/images/reg_facebook.png" width="55" height="54" alt="Facebook" /></a></td>
                        <td><a href="https://www.parallelbranch.com/index.php?login&oauth_provider=LinkedIn&" onClick="_gaq.push(['_trackEvent', 'social media', 'Register', 'PB_LinkedIn']);"  ><img src="https://www.parallelbranch.com/images/reg_linkdin.png" width="55" height="54" alt="LinkedIn" /></a></td>
                        <td><a href="https://www.parallelbranch.com/index.php?login&oauth_provider=yahoo&" onClick="_gaq.push(['_trackEvent', 'social media', 'Register', 'PB_Yahoo']);" ><img src="https://www.parallelbranch.com/images/reg_yahoo.png" width="55" height="54" alt="Yahoo" /></a></td>
    <!--                    <td><div class="login-buttons" id="loginDiv"></div></td>-->
                    </tr>
                </table>
<!--                <div class="login-buttons" id="registerDiv"></div>-->
            </div>
            <div style="margin-top:50px;padding-left: 10px;">Already have an account? <a href="javascript:void(0);" data-toggle="modal" data-dismiss="modal" data-target="#UserLogin" class="greenText OpenLoginDivs">Login</a></div>
         </div>
        </p>
    
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

   
<!-- Register Div End-->


<!-- Offer Div Start-->
    <div class="offerDiv" id="OffersDIV">
	<h1>Offers <a href="javascript:void(0);" class="close closeoffer" id="closeoffer"><img src="https://www.parallelbranch.com/images/loginClose.png" class="btn_close" title="Close Window" alt="Close" /></a></h1>
    	<div style="padding:10px;">
        	<div class="courseTitle alignCenter" style="border-bottom:1px solid #d8d8d8;">Redeem your <span class="greenText">Beneficial Points</span> through following modes:</div>
            <br /><br />
            <div class="clearIt"></div>
            <div class="offerCol" style="margin-right:10px;">
            	<h2>Student ID card</h2>
                <p>You can redeem points by uploading ID card image to your account.</p>
                <p><a href="javascript:void(0);" class="greenText">Click here</a> to Upload your ID card image.</p>
            </div>
            
            <div class="offerCol" style="margin-right:10px;">
            	<h2>Refer the Courses</h2>
                <p>You can redeem points by referring course to your friend just by sending a link of course.</p>
                <p>Earn points once your enrolled the course.</p>
                <p><a href="javascript:void(0);" class="greenText">Click here</a> to refer the course..</p>
            </div>
            
            <div class="offerCol">
            	<h2>Share the courses</h2>
                <p>You can redeem points just by share the courses on social media such as Facebook, LinkedIn, Twitter, Google+, etc....	</p>
                <p><a href="javascript:void(0);" class="greenText">Click here</a> to share the course. </p>
            </div>
            
            <div class="clearIt"></div>
            <br /><br />
            
            <div class="offerCol" style="margin-right:10px;">
            	<h2>Gift the courses</h2>
                <p>You can redeem points by giving gift course to any one and visiting on site by gift received person.</p>
                <p><a href="javascript:void(0);" class="greenText">Click here</a> to Gift the courses.</p>
            </div>
            
            <div class="offerCol">
            	<h2>Increase followers more than 50</h2>
                <p>If your follower are more than 50 then you will gain benefit points</p>
            </div>
            <div class="clearIt"></div>
<!--            <div style="text-align:right; margin-top:10px; margin-bottom:10px;">
            	<a href="javascript:void(0);" class="submitBtn">CONTINUE</a>&nbsp;<a href="javascript:void(0);" class="submitBtn">SKIP</a>
            </div>-->
          
        </div>
    </div>
<!-- Offer Div End-->

  <div class="clearIt"></div>
      <!-- Forgot Pass Div-->
      <div class="modal" id="ForgotPasswords">
  <div class="modal-dialog smallpop30">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" id="closemodal" class="close" data-dismiss="modal">&times;</button>
       <h1 class="modal-title">Forgot Password</h1>
      </div>
     
      <div class="modal-footer">
        <form name="forgot" id="JqueryForgotForm" method="POST" >
            <table cellpadding="10" cellspacing="0" width="100%">
              <tr>
                <td>Email</td>
                <td><input type="text" name="email_id" id="forgot_email_id"  /></td>
              </tr>
              <tr>
                <td colspan="2" class="alignRight"><input type="button" class="buttonSmall" value="Submit" name="forgotpass" onclick="ForgotPass();" /></td>
              </tr>
            </table>
          </form>
    
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
      
      
      <!-- Forgot Pass Div End -->
<!-- Header End--> 

<!-- popup change status-->
<div id="Usersetting_old" style="height:270px;display:none;">
	<h1>Change your security settings <a href="javascript:void(0);" class="close" id="closeSetting"><img src="https://www.parallelbranch.com/images/loginClose.png" class="btn_close" title="Close Window" alt="Close" /></a></h1>
    <div class="loginNew" style="width:95%;">
        <form name="LoginForm" method="post" id="JqueryRegisterForm1" action="https://www.parallelbranch.com/user_ajax_process.php?action=registeruser">
            <div style="height:10px;"></div>
            <table cellspacing="5" cellpadding="5" width="100%">
                <tr>
                    <td width="30%">Email Id </td>
                    <td width="70%"> <input type="text" value="" class="login-data" name="email_id_setting" id="email_id_setting" /><span class="hintText">This email is auto generated, please enter your email.</span></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td> <input type="password" value="" class="login-data" name="password_setting" id="password_setting"  /></td>
                </tr>
                <tr>
                    <td>Confirm password </td>
                    <td> <input type="password" value="" class="login-data" name="conf_password_set" id="conf_password_set"  /></td>
                </tr>
            </table>
            <div style="margin-top:15px; margin-left:170px;  float:left; text-align:right"><input type="button" name="submit" value="SAVE" class="submitBtn" style="cursor:pointer;"  onclick="return SaveSettings();" /></div>
        </form>
    </div>    
</div>
<!-- popup change status end -->

<!-- Gift Msg Div Start-->
<div class="modal" id="GiftDiv">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" id="closemodal" class="close" data-dismiss="modal">&times;</button>
       <h1 class="modal-title">Gift!</h1>
      </div>
     
      <div class="modal-footer">
       
           <div style="width:80%; float:left">
                                        <p><strong>Dear ,</strong></p>
                    <div class="height10"></div>
                        <p><span style="line-height:20px;">Congrats! You have unwrapped your gift.<br />
			Happy Learning!</span></p><br />
                                                        <!--Please, <span onclick="openLoginss();" style="cursor:pointer; color: #74B722;">Log-in</span> OR <span onclick="openRegisters()" style="cursor:pointer; color: #74B722;">register</span> to get more information.  </p>-->
                    			</div>
                    <div style="padding-top:0px; float:left; width:100px;" valign="middle"><img src="https://www.parallelbranch.com/images/gift.png" /></div>
    
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
  
<!-- Gift Msg Div End-->
<!-- Login for courses Div Start-->
    <div class="offerDiv" id="LoginViewDashboard" style="width:25%!important; height:130px!important;">
	<h1>Welcome to Parallel Branch <a href="javascript:void(0);" class="close closeoffer1" id="closeDashboard"><img src="https://www.parallelbranch.com/images/loginClose.png" class="btn_close" title="Close Window" alt="Close" /></a></h1>
    	<div style="padding:10px;">
            <div style="width:500px;">
            <table border="0" cellspacing="0" cellpadding="0" width="80%">
                <tr>
                    <td> 
                        <p> 
                            <span style="font-size:14px;">Thank you! for visiting our site.</span></p>     <br>                   
                            Please, <span onclick="openLoginss();" style="cursor:pointer; color: #74B722;">Log-in</span> to view your courses. </p>
                    </td>
                </tr>
            </table>
            </div>
        </div>
    </div>
<!-- Login for courses Div End-->


<!-- RWD Login Start-->
<!-- Header End-->
<div class="clearIt"></div>
<!-- Slider Start-->

<script >
 function OpenBox(language,course_id)
        {
            //alert(language);
            //alert(course_id);
            var data1="language="+language+'&course_id='+course_id+'&country_id=USA&action=OpenLanguageBox' ;
           //alert(data1);
           $.ajax({
               url: "https://www.parallelbranch.com/course_ajax_process.php", type: "post", data: data1, cache: false,
               success: function (html)
                {
                   var contents = $.trim(html);
                   $("#coursePrice_"+course_id).html(contents);
                }
           });
           return false;            
        }

</script>
<div class="sliderHolder">
<div class="slider">
	<!-- START AnythingSlider -->
	<ul id="slider" style="height:280px;">
		<!-- Vimeo: iframe -->
            <li class="panel1" style="background:repeat-x url(https://www.parallelbranch.com/images/slidernewBg.jpg) #448AE9;">
                <div style="margin-left:auto; margin-right:auto;" class="slideBg1">
                <div class="sliderText">
                    <div class="slideHeader" style="color:#fff;">E-Learning Platform Designed for Your Professional Growth</div>
                    <div class="slideDescription">
                    	                     	Parallel Branch is a learning platform that delivers self-paced, online courses specifically designed to increase the demand for you. Having a resume that stands out is more important than ever. Aligning your capabilities with the pace of technology can give you a tremendous advantage over the competition.                      

                    </div>
                    <div class="clearIt"></div>
                                        <div class="btnHolder" ><a href="javascript:void();" class="login-window" data-toggle="modal" data-target="#UserRegi" onclick="RegisterPopUp(); _gaq.push(['_trackEvent', 'Slider', 'Register', 'Catalyst for Growth']);"><img src="https://www.parallelbranch.com/images/regiterBtn.png" width="197" height="49" alt="Register Now" border="0" /></a></div>
                                    </div>
<!--            <div class="sliderImage"><img src="video/slide1.png" width="446" height="248" onclick="return OpenHeaderVideo(1);" /></div>-->
        	<div class="sliderImage ipadpadding" >
                    
<!--                   <iframe width="300" height="215" src="//www.youtube.com/embed/JSr9YUJY0w8?version=3&vq=hd720" frameborder="0" allowfullscreen></iframe>-->
                   <!-- <iframe src="http://player.vimeo.com/video/75185928?title=0&amp;byline=0&amp;portrait=0" width="320" height="217" frameborder="0"></iframe> -->
				   <iframe src="https://player.vimeo.com/video/75185928?title=0&amp;byline=0&amp;portrait=0" width="320" height="217" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
				       <param name="allowscriptaccess" value="always">
				       <param name="allowfullscreen" value="true">
				       <param name="scalemode" value="noscale">
				       <param name="quality" value="high">
				       <param name="wmode" value="opaque">
				       <param name="bgcolor" value="#000000">
				   </iframe>
                </div>
                </div>                
            </li>
                
            <li class="panel2" style="background:repeat-x url(https://www.parallelbranch.com/images/banner2Bg.jpg) #a97fa5;">
                <div style=" margin-left:auto; margin-right:auto;" class="slide Bg2">
                    <div style="margin-left:auto; margin-right:auto; text-align:center" class="imgsliderip">
                         <img src="https://www.parallelbranch.com/images/banner_2.png" />
                    </div>
                    <div class="clearIt"></div>
                                       <div class="btnHolder" style="margin-right: 1% ! important; margin-left: 16% ! important; bottom: 3px!important; position: absolute!important;"><a href="javascript:void();" class="login-window" data-toggle="modal" data-target="#UserRegi" onclick="RegisterPopUp(); _gaq.push(['_trackEvent', 'Slider', 'Register', 'Catalyst for Growth']);"><img src="https://www.parallelbranch.com/images/regiterBtn.png" width="197" height="49" alt="Register Now" border="0" /></a></div>
                                    </div>
            </li>
                
<!--<li class="panel2" style="background:repeat-x url(images/slide2Bg.jpg) #AB7EA7;">
<div style=" margin-left:auto; margin-right:auto;" class="slideBg2">
        	<div class="sliderText">
                   <div class="slideHeader">Industry Trends</div>
                   <div class="slideDescription">
                   	There is a huge shortage of industry ready candidates. Our courses are designed to help you thrive in ever changing job market.
According to leading job portals, there are several thousand technical jobs available in the market and the number is growing. With such a huge array of options available in the employment space, we ensure that our students are 100% industry ready.

                   </div>
                   <div class="clearIt"></div>
                                        <div class="btnHolder" onclick="RegisterPopUp();"><a href="javascript:void();" data-toggle="modal" data-target="#UserRegi" class="login-window"><img src="images/regiterBtn.png" width="197" height="49" alt="Register Now" border="0" /></a></div>
                                       <div class="btnHolder"><a href="#UserRegi" class="registerBtn login-window">REGISTER NOW</a></div>
                </div>
        	<div class="sliderImage">
            <img src="images/PB-Slider02.png" style="margin-right:70px;"  />
            </div>
            </div>
            </li>-->
		
            <li class="panel3" style="background:repeat url(https://www.parallelbranch.com/images/slide3Bg.jpg);">
            <div style=" margin-left:auto; margin-right:auto; " class="slideBg3">
        	<div class="sliderText" style="font-size:13px;">
                   <div class="slideHeader">Most Popular Courses</div>
                   <div class="slideDescription">
                   	Parallel Branch helps students grow by offering courses in every growing technologies. Whether you want to get promoted, enter into a new industry, or just accelerate your life, Parallel Branch helps you learn from the subject matter experts in the world. Our courses cover subjects that are most sought after by employers, at the highest quality, and at a fraction of the cost of other providers.

                   </div>
                   <div class="clearIt"></div>
                                        <div class="btnHolder" ><a href="javascript:void();" class="login-window" data-toggle="modal" data-target="#UserRegi" onclick="RegisterPopUp();"><img src="https://www.parallelbranch.com/images/regiterBtn.png" width="197" height="49" alt="Register Now" border="0" /></a></div>
                    <!--                   <div class="btnHolder"><a href="#UserRegi" class="registerBtn login-window">REGISTER NOW</a></div>-->
                </div>
            <div class="sliderImage" style="margin-right:5% !important; margin-top:15px;">
                
                    <div class="courseList" style="width:27%; background:#fff; margin-top:0px !important;"><div class="listHolder">
                                    <div style="padding-top:0px;"><a href="https://www.parallelbranch.com/course/learn-oracle-applications-r12-order-management-and-pricing-online/"><img src="https://www.parallelbranch.com/UploadedData/13812998121378875445R12_OM__20__20Pricing_20_120_20dpi__10b8ec851eef48273c2219e10421ed78.jpg" width="99%"  alt="video" id="videos" style="border:1px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-oracle-applications-r12-order-management-and-pricing-online/"><div class="courselistTitle" style="font-size:11px; text-align:left; background:#fff;">Oracle Applications R12 Order Management</div></a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">		
                                    <!--<div class="selectBox" >
                                        <span class="selected"></span>
                                        <span class="selectArrow"> &#9660 </span>
                                        <div class="selectOptions" >
                                     
                                            <span class="selectOption" value="English" >English</span><span class="selectOption" value="" ></span>                                        </div>
                                    </div> -->
                            <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_">$ 199</div>           
                                    </div>                                                               
                              </div></div><div class="courseList" style="width:27%; background:#fff; margin-top:0px !important;"><div class="listHolder">
                                    <div style="padding-top:0px;"><a href="https://www.parallelbranch.com/course/learn-test-automation-using-selenium-online/"><img src="https://www.parallelbranch.com/UploadedData/13812997641376731417Test_20Automation_20using_20Selenium_120_c2ee6292a2953fc842420da11e3af7df.jpg" width="99%"  alt="video" id="videos" style="border:1px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-test-automation-using-selenium-online/"><div class="courselistTitle" style="font-size:11px; text-align:left; background:#fff;">Test Automation using Selenium</div></a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">		
                                    <!--<div class="selectBox" >
                                        <span class="selected"></span>
                                        <span class="selectArrow"> &#9660 </span>
                                        <div class="selectOptions" >
                                     
                                            <span class="selectOption" value="English" >English</span><span class="selectOption" value="" ></span>                                        </div>
                                    </div> -->
                            <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_">$ 119</div>           
                                    </div>                                                               
                              </div></div><div class="courseList" style="width:27%; background:#fff; margin-top:0px !important;"><div class="listHolder">
                                    <div style="padding-top:0px;"><a href="https://www.parallelbranch.com/course/learn-apache-hadoop-developers-track-online/"><img src="https://www.parallelbranch.com/UploadedData/1389163409Apache hadoop Fr devp track 1.jpg" width="99%"  alt="video" id="videos" style="border:1px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-apache-hadoop-developers-track-online/"><div class="courselistTitle" style="font-size:11px; text-align:left; background:#fff;">Apache Hadoop Developers Track</div></a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">		
                                    <!--<div class="selectBox" >
                                        <span class="selected"></span>
                                        <span class="selectArrow"> &#9660 </span>
                                        <div class="selectOptions" >
                                     
                                            <span class="selectOption" value="English" >English</span><span class="selectOption" value="" ></span>                                        </div>
                                    </div> -->
                            <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_">$ 189</div>           
                                    </div>                                                               
                              </div></div>
            	</div>
                </div>
            </li>            
	</ul> <!-- END AnythingSlider -->
</div>
</div>
<!-- Slider End-->
<div class="clearIt"></div>
<!-- Middle content -->
<div class="contentWraper row">
<div class="middleContent row">
    <div id="leftdiv" style="width:100%;">
            	<h1 style="font-size:17px; border-bottom:#75b722 solid 1px; padding-bottom:1px;">Most Viewed Courses <div class="viewMore"><a href="https://www.parallelbranch.com/mostview-courses/yes.html">View More</a></div></h1>
        
        
        
        <div class="clearIt"></div>
        <div>
                <div class="courseList col-lg-2">    <script type="text/javascript">
                                $(document).ready(function(){
                                        $(".exemple4").jRating(
                                        {                                    
                                            length : 5,
                                            isDisabled : true
                                        }
                                        );

                                });
                        </script><div class="listHolder">
						
                                        <div style="text-align:center;" class="coursethumb"><a href="https://www.parallelbranch.com/course/learn-apache-hadoop-machine-learning-and-hadoop-eco-system-online/"><img src="https://www.parallelbranch.com/UploadedData/1396519924Apache Hadoop - Machine Learning and Hadoop Eco system 2.jpg" width="100%" alt="video" id="videos" style="border:0px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-apache-hadoop-machine-learning-and-hadoop-eco-system-online/"><div class="courselistTitle">Apache Hadoop - Machine Learning and Hadoop Eco System </div>
                                        <div style="height:42px;">
                                            <table cellpadding="0" cellspacing="0" width="99%" align="center">
                                                <tr align="left">
                                                    <td width="38%" style="padding-left:3px;" valign="top">
                                                    <span class="durationholder">
                                                    <span>Duration</span><br />1 Hr 45 Min
                                                    </span>
                                                    
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="22%" valign="top" style="padding-left:3px;"><span class="studentholder">Students<br>
                                                        <img src="https://www.parallelbranch.com/images/student_icon.png" />
                                                        <span>165</span>
                                                        </span>
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="36%" style="padding-left:3px;" valign="top">
                                                        <a href="https://www.parallelbranch.com/course/learn-apache-hadoop-machine-learning-and-hadoop-eco-system-online/#CRev" >
                                                            <span class="reviewholder">
                                                            <span>3 Reviews</span>
                                                            <span> <div class="starholder"><div class="exemple4"  >
                                                 <div style="width: 276px;" class="jRatingColor"></div>
                                                 <div style="width: 58.666666666667px; top: -27px;" class="jRatingAverage"></div>
                                                 <div style="width: 80px; height: 20px; top: -40px; background: url(https://www.parallelbranch.com/&quot;https://www.parallelbranch.com/jquery/icons/stars3.png&quot;) repeat-x scroll 0% 0% transparent;" class="jStar"></div>
                                                </div>
                                                </div> </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        </a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">                                                    
                                        <div class="selectBox" >
                                                <span class="selected"></span>
                                                <span class="selectArrow" id="abc"> &#9660 </span>
                                                <div class="selectOptions" >
                                                                                                                 <span class="selectOption" value="English" onclick="SelectCourseLang('English',144);" >English</span>                                                             
                                                                                                        </div>
                                        </div>
                         <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_144">$ 99</div>           
                                    	</div>                                                               
                              </div></div><div class="courseList col-lg-2">    <script type="text/javascript">
                                $(document).ready(function(){
                                        $(".exemple4").jRating(
                                        {                                    
                                            length : 5,
                                            isDisabled : true
                                        }
                                        );

                                });
                        </script><div class="listHolder">
						
                                        <div style="text-align:center;" class="coursethumb"><a href="https://www.parallelbranch.com/course/learn-oracle-pl/sql-11g-fundamentals-online/"><img src="https://www.parallelbranch.com/UploadedData/1391578279Oracle PLSQL 11g - Fundamentals (a).jpg" width="100%" alt="video" id="videos" style="border:0px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-oracle-pl/sql-11g-fundamentals-online/"><div class="courselistTitle">Oracle PL/SQL 11g - Fundamentals </div>
                                        <div style="height:42px;">
                                            <table cellpadding="0" cellspacing="0" width="99%" align="center">
                                                <tr align="left">
                                                    <td width="38%" style="padding-left:3px;" valign="top">
                                                    <span class="durationholder">
                                                    <span>Duration</span><br />9 Hrs 45 Min
                                                    </span>
                                                    
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="22%" valign="top" style="padding-left:3px;"><span class="studentholder">Students<br>
                                                        <img src="https://www.parallelbranch.com/images/student_icon.png" />
                                                        <span>141</span>
                                                        </span>
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="36%" style="padding-left:3px;" valign="top">
                                                        <a href="https://www.parallelbranch.com/course/learn-oracle-pl/sql-11g-fundamentals-online/#CRev" >
                                                            <span class="reviewholder">
                                                            <span>3 Reviews</span>
                                                            <span> <div class="starholder"><div class="exemple4"  >
                                                 <div style="width: 276px;" class="jRatingColor"></div>
                                                 <div style="width: 64px; top: -27px;" class="jRatingAverage"></div>
                                                 <div style="width: 80px; height: 20px; top: -40px; background: url(https://www.parallelbranch.com/&quot;https://www.parallelbranch.com/jquery/icons/stars3.png&quot;) repeat-x scroll 0% 0% transparent;" class="jStar"></div>
                                                </div>
                                                </div> </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        </a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">                                                    
                                        <div class="selectBox" >
                                                <span class="selected"></span>
                                                <span class="selectArrow" id="abc"> &#9660 </span>
                                                <div class="selectOptions" >
                                                                                                                 <span class="selectOption" value="English" onclick="SelectCourseLang('English',136);" >English</span>                                                             
                                                                                                        </div>
                                        </div>
                         <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_136">$ 119</div>           
                                    	</div>                                                               
                              </div></div><div class="courseList col-lg-2">    <script type="text/javascript">
                                $(document).ready(function(){
                                        $(".exemple4").jRating(
                                        {                                    
                                            length : 5,
                                            isDisabled : true
                                        }
                                        );

                                });
                        </script><div class="listHolder">
						
                                        <div style="text-align:center;" class="coursethumb"><a href="https://www.parallelbranch.com/course/learn-oracle-pl/sql-11g-advance-online/"><img src="https://www.parallelbranch.com/UploadedData/1390827688Oracle PLSQL 11g - Advance 6.jpg" width="100%" alt="video" id="videos" style="border:0px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-oracle-pl/sql-11g-advance-online/"><div class="courselistTitle">Oracle PL/SQL 11g - Advance </div>
                                        <div style="height:42px;">
                                            <table cellpadding="0" cellspacing="0" width="99%" align="center">
                                                <tr align="left">
                                                    <td width="38%" style="padding-left:3px;" valign="top">
                                                    <span class="durationholder">
                                                    <span>Duration</span><br />8 Hrs 00 Min
                                                    </span>
                                                    
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="22%" valign="top" style="padding-left:3px;"><span class="studentholder">Students<br>
                                                        <img src="https://www.parallelbranch.com/images/student_icon.png" />
                                                        <span>112</span>
                                                        </span>
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="36%" style="padding-left:3px;" valign="top">
                                                        <a href="https://www.parallelbranch.com/course/learn-oracle-pl/sql-11g-advance-online/#CRev" >
                                                            <span class="reviewholder">
                                                            <span>1 Reviews</span>
                                                            <span> <div class="starholder"><div class="exemple4"  >
                                                 <div style="width: 276px;" class="jRatingColor"></div>
                                                 <div style="width: 64px; top: -27px;" class="jRatingAverage"></div>
                                                 <div style="width: 80px; height: 20px; top: -40px; background: url(https://www.parallelbranch.com/&quot;https://www.parallelbranch.com/jquery/icons/stars3.png&quot;) repeat-x scroll 0% 0% transparent;" class="jStar"></div>
                                                </div>
                                                </div> </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        </a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">                                                    
                                        <div class="selectBox" >
                                                <span class="selected"></span>
                                                <span class="selectArrow" id="abc"> &#9660 </span>
                                                <div class="selectOptions" >
                                                                                                                 <span class="selectOption" value="English" onclick="SelectCourseLang('English',133);" >English</span>                                                             
                                                                                                        </div>
                                        </div>
                         <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_133">$ 149</div>           
                                    	</div>                                                               
                              </div></div><div class="courseList col-lg-2">    <script type="text/javascript">
                                $(document).ready(function(){
                                        $(".exemple4").jRating(
                                        {                                    
                                            length : 5,
                                            isDisabled : true
                                        }
                                        );

                                });
                        </script><div class="listHolder">
						<div class="freeTagHolder">
                                <div class="freeTag"> <img src="https://www.parallelbranch.com/images/bundle_tag.png" width="72" height="70" alt="Course Bundle" /></div>
                            </div>
                                        <div style="text-align:center;" class="coursethumb"><a href="https://www.parallelbranch.com/course/learn-apache-hadoop-developers-track-online/"><img src="https://www.parallelbranch.com/UploadedData/1389163409Apache hadoop Fr devp track 1.jpg" width="100%" alt="video" id="videos" style="border:0px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-apache-hadoop-developers-track-online/"><div class="courselistTitle">Apache Hadoop Developers Track </div>
                                        <div style="height:42px;">
                                            <table cellpadding="0" cellspacing="0" width="99%" align="center">
                                                <tr align="left">
                                                    <td width="38%" style="padding-left:3px;" valign="top">
                                                    <span class="durationholder">
                                                    <span>Duration</span><br />6 Hrs 35 Min
                                                    </span>
                                                    
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="22%" valign="top" style="padding-left:3px;"><span class="studentholder">Students<br>
                                                        <img src="https://www.parallelbranch.com/images/student_icon.png" />
                                                        <span>360</span>
                                                        </span>
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="36%" style="padding-left:3px;" valign="top">
                                                        <a href="https://www.parallelbranch.com/course/learn-apache-hadoop-developers-track-online/#CRev" >
                                                            <span class="reviewholder">
                                                            <span>4 Reviews</span>
                                                            <span> <div class="starholder"><div class="exemple4"  >
                                                 <div style="width: 276px;" class="jRatingColor"></div>
                                                 <div style="width: 76px; top: -27px;" class="jRatingAverage"></div>
                                                 <div style="width: 80px; height: 20px; top: -40px; background: url(https://www.parallelbranch.com/&quot;https://www.parallelbranch.com/jquery/icons/stars3.png&quot;) repeat-x scroll 0% 0% transparent;" class="jStar"></div>
                                                </div>
                                                </div> </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        </a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">                                                    
                                        <div class="selectBox" >
                                                <span class="selected"></span>
                                                <span class="selectArrow" id="abc"> &#9660 </span>
                                                <div class="selectOptions" >
                                                                                                                 <span class="selectOption" value="English" onclick="SelectCourseLang('English',132);" >English</span>                                                             
                                                                                                        </div>
                                        </div>
                         <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_132">$ 189</div>           
                                    	</div>                                                               
                              </div></div><div class="courseList col-lg-2">    <script type="text/javascript">
                                $(document).ready(function(){
                                        $(".exemple4").jRating(
                                        {                                    
                                            length : 5,
                                            isDisabled : true
                                        }
                                        );

                                });
                        </script><div class="listHolder">
						
                                        <div style="text-align:center;" class="coursethumb"><a href="https://www.parallelbranch.com/course/learn-microsoft-sharepoint-for-developers-advance-online/"><img src="https://www.parallelbranch.com/UploadedData/1386071477Microsoft SharePoint for Developers - Advance.jpg" width="100%" alt="video" id="videos" style="border:0px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-microsoft-sharepoint-for-developers-advance-online/"><div class="courselistTitle">Microsoft SharePoint for Developers - Advance </div>
                                        <div style="height:42px;">
                                            <table cellpadding="0" cellspacing="0" width="99%" align="center">
                                                <tr align="left">
                                                    <td width="38%" style="padding-left:3px;" valign="top">
                                                    <span class="durationholder">
                                                    <span>Duration</span><br />2 Hrs 20 Min
                                                    </span>
                                                    
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="22%" valign="top" style="padding-left:3px;"><span class="studentholder">Students<br>
                                                        <img src="https://www.parallelbranch.com/images/student_icon.png" />
                                                        <span>228</span>
                                                        </span>
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="36%" style="padding-left:3px;" valign="top">
                                                        <a href="https://www.parallelbranch.com/course/learn-microsoft-sharepoint-for-developers-advance-online/#CRev" >
                                                            <span class="reviewholder">
                                                            <span>3 Reviews</span>
                                                            <span> <div class="starholder"><div class="exemple4"  >
                                                 <div style="width: 276px;" class="jRatingColor"></div>
                                                 <div style="width: 80px; top: -27px;" class="jRatingAverage"></div>
                                                 <div style="width: 80px; height: 20px; top: -40px; background: url(https://www.parallelbranch.com/&quot;https://www.parallelbranch.com/jquery/icons/stars3.png&quot;) repeat-x scroll 0% 0% transparent;" class="jStar"></div>
                                                </div>
                                                </div> </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        </a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">                                                    
                                        <div class="selectBox" >
                                                <span class="selected"></span>
                                                <span class="selectArrow" id="abc"> &#9660 </span>
                                                <div class="selectOptions" >
                                                                                                                 <span class="selectOption" value="English" onclick="SelectCourseLang('English',115);" >English</span>                                                             
                                                                                                        </div>
                                        </div>
                         <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_115">$ 79</div>           
                                    	</div>                                                               
                              </div></div><div class="courseList col-lg-2">    <script type="text/javascript">
                                $(document).ready(function(){
                                        $(".exemple4").jRating(
                                        {                                    
                                            length : 5,
                                            isDisabled : true
                                        }
                                        );

                                });
                        </script><div class="listHolder">
						
                                        <div style="text-align:center;" class="coursethumb"><a href="https://www.parallelbranch.com/course/learn-apache-hadoop-for-developers-–-advance-online/"><img src="https://www.parallelbranch.com/UploadedData/1384149781Apache Hadoop_Advance.jpg" width="100%" alt="video" id="videos" style="border:0px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-apache-hadoop-for-developers-–-advance-online/"><div class="courselistTitle">Apache Hadoop for Developers – Advance </div>
                                        <div style="height:42px;">
                                            <table cellpadding="0" cellspacing="0" width="99%" align="center">
                                                <tr align="left">
                                                    <td width="38%" style="padding-left:3px;" valign="top">
                                                    <span class="durationholder">
                                                    <span>Duration</span><br />1 Hr 50 Min
                                                    </span>
                                                    
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="22%" valign="top" style="padding-left:3px;"><span class="studentholder">Students<br>
                                                        <img src="https://www.parallelbranch.com/images/student_icon.png" />
                                                        <span>495</span>
                                                        </span>
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="36%" style="padding-left:3px;" valign="top">
                                                        <a href="https://www.parallelbranch.com/course/learn-apache-hadoop-for-developers-–-advance-online/#CRev" >
                                                            <span class="reviewholder">
                                                            <span>2 Reviews</span>
                                                            <span> <div class="starholder"><div class="exemple4"  >
                                                 <div style="width: 276px;" class="jRatingColor"></div>
                                                 <div style="width: 64px; top: -27px;" class="jRatingAverage"></div>
                                                 <div style="width: 80px; height: 20px; top: -40px; background: url(https://www.parallelbranch.com/&quot;https://www.parallelbranch.com/jquery/icons/stars3.png&quot;) repeat-x scroll 0% 0% transparent;" class="jStar"></div>
                                                </div>
                                                </div> </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        </a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">                                                    
                                        <div class="selectBox" >
                                                <span class="selected"></span>
                                                <span class="selectArrow" id="abc"> &#9660 </span>
                                                <div class="selectOptions" >
                                                                                                                 <span class="selectOption" value="English" onclick="SelectCourseLang('English',111);" >English</span>                                                             
                                                                                                        </div>
                                        </div>
                         <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_111">$ 119</div>           
                                    	</div>                                                               
                              </div></div><div class="courseList col-lg-2">    <script type="text/javascript">
                                $(document).ready(function(){
                                        $(".exemple4").jRating(
                                        {                                    
                                            length : 5,
                                            isDisabled : true
                                        }
                                        );

                                });
                        </script><div class="listHolder">
						
                                        <div style="text-align:center;" class="coursethumb"><a href="https://www.parallelbranch.com/course/learn-oracle-sql-11g-fundamentals-online/"><img src="https://www.parallelbranch.com/UploadedData/1383139431Oracle SQL 11g_Fundamentals.jpg" width="100%" alt="video" id="videos" style="border:0px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-oracle-sql-11g-fundamentals-online/"><div class="courselistTitle">Oracle SQL 11g - Fundamentals </div>
                                        <div style="height:42px;">
                                            <table cellpadding="0" cellspacing="0" width="99%" align="center">
                                                <tr align="left">
                                                    <td width="38%" style="padding-left:3px;" valign="top">
                                                    <span class="durationholder">
                                                    <span>Duration</span><br />9 Hrs 30 Min
                                                    </span>
                                                    
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="22%" valign="top" style="padding-left:3px;"><span class="studentholder">Students<br>
                                                        <img src="https://www.parallelbranch.com/images/student_icon.png" />
                                                        <span>200</span>
                                                        </span>
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="36%" style="padding-left:3px;" valign="top">
                                                        <a href="https://www.parallelbranch.com/course/learn-oracle-sql-11g-fundamentals-online/#CRev" >
                                                            <span class="reviewholder">
                                                            <span>5 Reviews</span>
                                                            <span> <div class="starholder"><div class="exemple4"  >
                                                 <div style="width: 276px;" class="jRatingColor"></div>
                                                 <div style="width: 64px; top: -27px;" class="jRatingAverage"></div>
                                                 <div style="width: 80px; height: 20px; top: -40px; background: url(https://www.parallelbranch.com/&quot;https://www.parallelbranch.com/jquery/icons/stars3.png&quot;) repeat-x scroll 0% 0% transparent;" class="jStar"></div>
                                                </div>
                                                </div> </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        </a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">                                                    
                                        <div class="selectBox" >
                                                <span class="selected"></span>
                                                <span class="selectArrow" id="abc"> &#9660 </span>
                                                <div class="selectOptions" >
                                                                                                                 <span class="selectOption" value="English" onclick="SelectCourseLang('English',109);" >English</span>                                                             
                                                                                                        </div>
                                        </div>
                         <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_109">$ 99</div>           
                                    	</div>                                                               
                              </div></div><div class="courseList col-lg-2">    <script type="text/javascript">
                                $(document).ready(function(){
                                        $(".exemple4").jRating(
                                        {                                    
                                            length : 5,
                                            isDisabled : true
                                        }
                                        );

                                });
                        </script><div class="listHolder">
						
                                        <div style="text-align:center;" class="coursethumb"><a href="https://www.parallelbranch.com/course/learn-microsoft-sharepoint-for-developers-fundamentals-online/"><img src="https://www.parallelbranch.com/UploadedData/1386077331Microsoft SharePoint for Developers - Fundamentals.jpg" width="100%" alt="video" id="videos" style="border:0px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-microsoft-sharepoint-for-developers-fundamentals-online/"><div class="courselistTitle">Microsoft SharePoint for Developers - Fundamentals </div>
                                        <div style="height:42px;">
                                            <table cellpadding="0" cellspacing="0" width="99%" align="center">
                                                <tr align="left">
                                                    <td width="38%" style="padding-left:3px;" valign="top">
                                                    <span class="durationholder">
                                                    <span>Duration</span><br />1 Hr 15 Min
                                                    </span>
                                                    
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="22%" valign="top" style="padding-left:3px;"><span class="studentholder">Students<br>
                                                        <img src="https://www.parallelbranch.com/images/student_icon.png" />
                                                        <span>193</span>
                                                        </span>
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="36%" style="padding-left:3px;" valign="top">
                                                        <a href="https://www.parallelbranch.com/course/learn-microsoft-sharepoint-for-developers-fundamentals-online/#CRev" >
                                                            <span class="reviewholder">
                                                            <span>2 Reviews</span>
                                                            <span> <div class="starholder"><div class="exemple4"  >
                                                 <div style="width: 276px;" class="jRatingColor"></div>
                                                 <div style="width: 72px; top: -27px;" class="jRatingAverage"></div>
                                                 <div style="width: 80px; height: 20px; top: -40px; background: url(https://www.parallelbranch.com/&quot;https://www.parallelbranch.com/jquery/icons/stars3.png&quot;) repeat-x scroll 0% 0% transparent;" class="jStar"></div>
                                                </div>
                                                </div> </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        </a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">                                                    
                                        <div class="selectBox" >
                                                <span class="selected"></span>
                                                <span class="selectArrow" id="abc"> &#9660 </span>
                                                <div class="selectOptions" >
                                                                                                                 <span class="selectOption" value="English" onclick="SelectCourseLang('English',17);" >English</span>                                                             
                                                                                                        </div>
                                        </div>
                         <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_17">$ 59</div>           
                                    	</div>                                                               
                              </div></div><div class="courseList col-lg-2">    <script type="text/javascript">
                                $(document).ready(function(){
                                        $(".exemple4").jRating(
                                        {                                    
                                            length : 5,
                                            isDisabled : true
                                        }
                                        );

                                });
                        </script><div class="listHolder">
						
                                        <div style="text-align:center;" class="coursethumb"><a href="https://www.parallelbranch.com/course/learn-test-automation-using-selenium-online/"><img src="https://www.parallelbranch.com/UploadedData/13812997641376731417Test_20Automation_20using_20Selenium_120_c2ee6292a2953fc842420da11e3af7df.jpg" width="100%" alt="video" id="videos" style="border:0px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-test-automation-using-selenium-online/"><div class="courselistTitle">Test Automation using Selenium </div>
                                        <div style="height:42px;">
                                            <table cellpadding="0" cellspacing="0" width="99%" align="center">
                                                <tr align="left">
                                                    <td width="38%" style="padding-left:3px;" valign="top">
                                                    <span class="durationholder">
                                                    <span>Duration</span><br />4 Hrs 30 Min
                                                    </span>
                                                    
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="22%" valign="top" style="padding-left:3px;"><span class="studentholder">Students<br>
                                                        <img src="https://www.parallelbranch.com/images/student_icon.png" />
                                                        <span>294</span>
                                                        </span>
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="36%" style="padding-left:3px;" valign="top">
                                                        <a href="https://www.parallelbranch.com/course/learn-test-automation-using-selenium-online/#CRev" >
                                                            <span class="reviewholder">
                                                            <span>3 Reviews</span>
                                                            <span> <div class="starholder"><div class="exemple4"  >
                                                 <div style="width: 276px;" class="jRatingColor"></div>
                                                 <div style="width: 69.333333333333px; top: -27px;" class="jRatingAverage"></div>
                                                 <div style="width: 80px; height: 20px; top: -40px; background: url(https://www.parallelbranch.com/&quot;https://www.parallelbranch.com/jquery/icons/stars3.png&quot;) repeat-x scroll 0% 0% transparent;" class="jStar"></div>
                                                </div>
                                                </div> </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        </a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">                                                    
                                        <div class="selectBox" >
                                                <span class="selected"></span>
                                                <span class="selectArrow" id="abc"> &#9660 </span>
                                                <div class="selectOptions" >
                                                                                                                 <span class="selectOption" value="English" onclick="SelectCourseLang('English',16);" >English</span>                                                             
                                                                                                        </div>
                                        </div>
                         <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_16">$ 119</div>           
                                    	</div>                                                               
                              </div></div><div class="courseList col-lg-2">    <script type="text/javascript">
                                $(document).ready(function(){
                                        $(".exemple4").jRating(
                                        {                                    
                                            length : 5,
                                            isDisabled : true
                                        }
                                        );

                                });
                        </script><div class="listHolder">
						
                                        <div style="text-align:center;" class="coursethumb"><a href="https://www.parallelbranch.com/course/learn-basics-of-software-testing-online/"><img src="https://www.parallelbranch.com/UploadedData/1376731394Basics of Software Testing(120dpi).jpg" width="100%" alt="video" id="videos" style="border:0px solid #d8d8d8 !important;" /></a></div>									 
                                        <a href="https://www.parallelbranch.com/course/learn-basics-of-software-testing-online/"><div class="courselistTitle">Basics of Software Testing </div>
                                        <div style="height:42px;">
                                            <table cellpadding="0" cellspacing="0" width="99%" align="center">
                                                <tr align="left">
                                                    <td width="38%" style="padding-left:3px;" valign="top">
                                                    <span class="durationholder">
                                                    <span>Duration</span><br />2 Hrs 00 Min
                                                    </span>
                                                    
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="22%" valign="top" style="padding-left:3px;"><span class="studentholder">Students<br>
                                                        <img src="https://www.parallelbranch.com/images/student_icon.png" />
                                                        <span>746</span>
                                                        </span>
                                                    </td>
                                                    <td><img src="https://www.parallelbranch.com/images/vline.jpg"/>  </td>
                                                    <td width="36%" style="padding-left:3px;" valign="top">
                                                        <a href="https://www.parallelbranch.com/course/learn-basics-of-software-testing-online/#CRev" >
                                                            <span class="reviewholder">
                                                            <span>4 Reviews</span>
                                                            <span> <div class="starholder"><div class="exemple4"  >
                                                 <div style="width: 276px;" class="jRatingColor"></div>
                                                 <div style="width: 68px; top: -27px;" class="jRatingAverage"></div>
                                                 <div style="width: 80px; height: 20px; top: -40px; background: url(https://www.parallelbranch.com/&quot;https://www.parallelbranch.com/jquery/icons/stars3.png&quot;) repeat-x scroll 0% 0% transparent;" class="jStar"></div>
                                                </div>
                                                </div> </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        </a>
                                        <div class="clearIt"></div>
                                        <div class="coursedetails">                                                    
                                        <div class="selectBox" >
                                                <span class="selected"></span>
                                                <span class="selectArrow" id="abc"> &#9660 </span>
                                                <div class="selectOptions" >
                                                                                                                 <span class="selectOption" value="English" onclick="SelectCourseLang('English',15);" >English</span>                                                             
                                                                                                        </div>
                                        </div>
                         <div class="author" style="margin-left:5px; margin-right:5px;margin-bottom:5px; margin-top:5px; float:right; font-weight:bold!important;" id="coursePrice_15">$ 79</div>           
                                    	</div>                                                               
                              </div></div>          
        </div>

<!--    <div class="freeCourses">
                    </ul>
        </div>
    </div>-->
    <!-- Three column start-->
    <div class="clearIt"></div>
        
    </div>
    
    <!--right start-->
    <div id="rightdiv">  
       <!-- PB Points Start-->
        <!--         <div class="badgesSection">
            <h1 class="headeing">PB Points</h1>
            <div id="scrollbar2">
                <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                <div class="viewport">
                <div class="overview">
                                   
                </div></div>
            </div>
        </div>
             -->
       <!-- PB Points End-->    
       
       <!--<div class="columnHolder">
                	<div class="alignCenter">
       	    <a href="javascript:void(0);"  > <img src="images/referfriends.jpg" width="292" height="151" alt="refer your friends" border="0" /></a> </div>
                <div class="clearIt"></div>
                

            </div>       
      </div>-->   
    </div>
    <!--right end-->    
    </div>
    <!-- Three column end--> 
    <div id="ViewVideoPopup" class="displayNone videoDiv" >
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr><td id="ViewVideoPopup123" width="100%"></td></tr>
        </table>
    </div>

    </div>
    <div class="clearIt"></div>    
<!-- Middle Cntent End-->

<script type="text/javascript" src="https://www.parallelbranch.com/jquery/jRating.jquery.js"></script>
<!-- Footer Start-->
<div class="footerHolder">
    <div class="footerMenu" >
    <div class="Fmenu">
    	<ul>
            <li><a href="https://www.parallelbranch.com/Home">Home</a></li>
            <li class="liLine">|</li>
            <li><a href="https://www.parallelbranch.com/courses/online-courses-from-parallel-branch">Courses</a></li>
                       <li class="liLine">|</li>
            <li><a href="https://www.parallelbranch.com/Allpage/about-us">About Us</a></li>
                        <li class="liLine">|</li>
            <li><a href="https://www.parallelbranch.com/FAQ.html">FAQ</a></li>
            <li class="liLine">|</li>
             <li><a href="http://blog.parallelbranch.com" target="_blank">Blog </a></li>
            <li class="liLine">|</li>
<!--             <li><a href="javascript:void(0);">Careers</a></li>
            <li>|</li>-->
            <li><a href="https://www.parallelbranch.com/contact-us.html">Contact Us</a></li>
        </ul>
       </div>
    </div>
    <div class="bottomMenu">
    	<div class="bottomMenuWraper">
            <div class="fTitleActive fTitle " onClick="javascript: show(1);" id="fcourse">Courses</div>
            <div class="fTitle" onClick="javascript: show(2);" id="upCourse">Upcoming Courses</div>
            
            <div style="text-align:right; float:right; width:100px; margin-top:14px;" id="ViewAllDiv"><a href="https://www.parallelbranch.com/courses/online-courses-from-parallel-branch" class="greenText"><strong>View All</strong></a></div>
            
            <div class="clearIt"></div>
            <div class="line"></div>
            <div class="clearIt"></div>
            <div class="fCourses" id="1">
            	<!---->
            <ul  id="mycarousel8" class="jcarousel-skin-tango5">
                        	<li>                   
                    <div class="Fcol">
                        <ul>
                            <li><a href="https://www.parallelbranch.com/learn-erp-functional-course-online/" class="firstMenu">ERP - Functional</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-applications-r12-inventory-advance-online/">Oracle Applications R12 Inventory - Advance</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-applications-r12-inventory-fundamentals-online/">Oracle Applications R12 Inventory - Fundamentals</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-applications-r12-inventory-fundamentals-and-advance-online/">Oracle Applications R12 Inventory - Fundamentals & Advance</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-applications-r12-order-management-and-pricing-online/">Oracle Applications R12 Order Management and Pricing</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-e-business-suite-r12-fundamentals-for-implementers-online/">Oracle E-Business Suite R12 Fundamentals for Implementers</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-ebs-r12-aol-and-system-administrator-for-developers-online/">Oracle EBS R12 - AOL & System Administrator for Developers</a></li>                            
                        </ul>
                    </div>
                </li>
             
                            	<li>                   
                    <div class="Fcol">
                        <ul>
                            <li><a href="https://www.parallelbranch.com/learn-oracle-course-online/" class="firstMenu">Oracle</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-pl/sql-11g-advance-online/">Oracle PL/SQL 11g - Advance</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-pl/sql-11g-fundamentals-online/">Oracle PL/SQL 11g - Fundamentals</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-pl/sql-11g-fundamentals-and-advance-online/">Oracle PL/SQL 11g - Fundamentals & Advance</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-sql-and-pl/sql-11g-online/">Oracle SQL & PL/SQL 11g</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-sql-11g-advance-online/">Oracle SQL 11g - Advance</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-sql-11g-fundamentals-online/">Oracle SQL 11g - Fundamentals</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-sql-11g-fundamentals-and-advance-online/">Oracle SQL 11g - Fundamentals & Advance</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-xml-publisher-for-developers-essentials-online/">Oracle XML Publisher for Developers-Essentials</a></li>                            
                        </ul>
                    </div>
                </li>
             
                            	<li>                   
                    <div class="Fcol">
                        <ul>
                            <li><a href="https://www.parallelbranch.com/learn-database-administration-course-online/" class="firstMenu">Database Administration</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-e-business-suite-r12-applications-dba-online/">Oracle E-Business Suite R12 Applications DBA</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-sql-11g--oracle-apps-r12-dba-online/">Oracle SQL 11g + Oracle Apps R12 DBA</a></li>                            
                        </ul>
                    </div>
                </li>
             
                            	<li>                   
                    <div class="Fcol">
                        <ul>
                            <li><a href="https://www.parallelbranch.com/learn-business-intelligence-course-online/" class="firstMenu">Business Intelligence</a></li><li><a href="https://www.parallelbranch.com/course/learn-oracle-business-intelligence-enterprise-edition-(obiee)-11g-online/">Oracle Business Intelligence Enterprise Edition (OBIEE) 11g</a></li>                            
                        </ul>
                    </div>
                </li>
             
                            	<li>                   
                    <div class="Fcol">
                        <ul>
                            <li><a href="https://www.parallelbranch.com/learn-apache-hadoop-course-online/" class="firstMenu">Apache Hadoop</a></li><li><a href="https://www.parallelbranch.com/course/learn-apache-hadoop-machine-learning-and-hadoop-eco-system-online/">Apache Hadoop - Machine Learning and Hadoop Eco System</a></li><li><a href="https://www.parallelbranch.com/course/learn-apache-hadoop-developers-track-online/">Apache Hadoop Developers Track</a></li><li><a href="https://www.parallelbranch.com/course/learn-apache-hadoop-for-developers-fundamentals-and-advance-online/">Apache Hadoop for Developers - Fundamentals & Advance</a></li><li><a href="https://www.parallelbranch.com/course/learn-apache-hadoop-for-developers-–-advance-online/">Apache Hadoop for Developers – Advance</a></li><li><a href="https://www.parallelbranch.com/course/learn-big-data-and-apache-hadoop-for-developers-fundamentals-online/">Big Data and Apache Hadoop for Developers - Fundamentals</a></li>                            
                        </ul>
                    </div>
                </li>
             
                            	<li>                   
                    <div class="Fcol">
                        <ul>
                            <li><a href="https://www.parallelbranch.com/learn-finance-course-online/" class="firstMenu">Finance</a></li><li><a href="https://www.parallelbranch.com/course/learn-accounting-concepts-for-technocrats-online/">Accounting Concepts For Technocrats</a></li>                            
                        </ul>
                    </div>
                </li>
             
                            	<li>                   
                    <div class="Fcol">
                        <ul>
                            <li><a href="https://www.parallelbranch.com/learn-software-testing-course-online/" class="firstMenu">Software Testing</a></li><li><a href="https://www.parallelbranch.com/course/learn-basics-of-software-testing-online/">Basics of Software Testing</a></li><li><a href="https://www.parallelbranch.com/course/learn-test-automation-using-selenium-online/">Test Automation using Selenium</a></li>                            
                        </ul>
                    </div>
                </li>
             
                            	<li>                   
                    <div class="Fcol">
                        <ul>
                            <li><a href="https://www.parallelbranch.com/learn-microsoft-course-online/" class="firstMenu">Microsoft</a></li><li><a href="https://www.parallelbranch.com/course/learn-microsoft-excel-fundamentals-online/">Microsoft Excel - Fundamentals</a></li><li><a href="https://www.parallelbranch.com/course/learn-microsoft-sharepoint-administration-fundamentals--online/">Microsoft SharePoint Administration Fundamentals </a></li><li><a href="https://www.parallelbranch.com/course/learn-microsoft-sharepoint-for-developers-advance-online/">Microsoft SharePoint for Developers - Advance</a></li><li><a href="https://www.parallelbranch.com/course/learn-microsoft-sharepoint-for-developers-fundamentals-online/">Microsoft SharePoint for Developers - Fundamentals</a></li><li><a href="https://www.parallelbranch.com/course/learn-microsoft-visual-c.net-advance-programming-online/">Microsoft Visual C#.Net - Advance Programming</a></li><li><a href="https://www.parallelbranch.com/course/learn-microsoft-visual-c.net-fundamentals-online/">Microsoft Visual C#.Net - Fundamentals</a></li>                            
                        </ul>
                    </div>
                </li>
             
                            	<li>                   
                    <div class="Fcol">
                        <ul>
                            <li><a href="https://www.parallelbranch.com/learn-programming-course-online/" class="firstMenu">Programming</a></li><li><a href="https://www.parallelbranch.com/course/learn-advance-java-programming-online/">Advance Java Programming</a></li><li><a href="https://www.parallelbranch.com/course/learn-c--programming-online/">C ++ Programming</a></li><li><a href="https://www.parallelbranch.com/course/learn-core-java-programming-online/">Core Java Programming</a></li><li><a href="https://www.parallelbranch.com/course/learn-data-extraction-tips-and-tricks-online/">Data Extraction Tips and Tricks</a></li><li><a href="https://www.parallelbranch.com/course/learn-developing-your-spreadsheet-skills-online/">Developing Your Spreadsheet Skills</a></li><li><a href="https://www.parallelbranch.com/course/learn-ethical-hacking-and-web-application-security-online/">Ethical Hacking & Web Application Security</a></li><li><a href="https://www.parallelbranch.com/course/learn-learn-xml-programming-online/">Learn XML Programming</a></li>                            
                        </ul>
                    </div>
                </li>
             
                            	<li>                   
                    <div class="Fcol">
                        <ul>
                            <li><a href="https://www.parallelbranch.com/learn-web-development-course-online/" class="firstMenu">Web Development</a></li><li><a href="https://www.parallelbranch.com/course/learn-getting-to-know-drupal-the-basics-online/">Getting to Know Drupal The Basics</a></li><li><a href="https://www.parallelbranch.com/course/learn-getting-to-know-wordpress-the-basics-online/">Getting to Know WordPress The Basics</a></li><li><a href="https://www.parallelbranch.com/course/learn-step-by-step-html-and-css-for-absolute-beginners-online/">Step-by-step HTML and CSS for absolute beginners</a></li>                            
                        </ul>
                    </div>
                </li>
             
                          
            </ul>
            <div class="clearIt"></div>
                  
            </div>
            <div class="upcomingCourse" id="2" style="display:none;">
                                <div class="Fcol">
                    <ul>
                        <li><a>Microsoft Excel 2010 - Fundamentals & Advance</a></li><li><a>Microsoft Power Point 2010 - Fundamentals</a></li><li><a>Microsoft Power Point 2010 - Advance</a></li><li><a>Oracle Applications R12 Purchasing</a></li><li><a>Oracle Applications R12 Bill of Materials</a></li><li><a>Oracle Applications R12 Work In Process</a></li><li><a>Oracle Applications R12 MRP</a></li><li><a>Oracle Applications R12 Shipping</a></li><li><a>Oracle Applications R12 General Ledger</a></li></ul></div><div class="Fcol" ><ul><li><a>Oracle Applications R12 Accounts Receivable</a></li><li><a>Oracle Applications R12 Accounts Payable</a></li><li><a>Oracle Applications R12 Cash Management</a></li><li><a>Oracle Applications R12 Procure to Pay</a></li><li><a>Oracle Applications R12 Order to Cash</a></li><li><a>Oracle Applications R12 Project Accounting</a></li><li><a>Oracle Enterprise Asset Management</a></li><li><a>SAP FI - Finance</a></li><li><a>SAP CO - Controlling</a></li></ul></div><div class="Fcol" ><ul><li><a>SAP SD - Sales & Distribution</a></li><li><a>SAP HR - Human Resource</a></li>    <!--                <li><a href="javascript:void(0);" class="firstMenu">Web development tools</a></li>
                        <li><a href="javascript:void(0);">ASP.Net</a></li>
                        <li><a href="javascript:void(0);">Java</a></li>
                        <li><a href="javascript:void(0);">VB.Net</a></li>
                        <li><a href="javascript:void(0);">C#.Net</a></li>-->
                    </ul>                   
                </div> 
                 <div class="clearIt"></div>
            </div>
<!--            <div class="Fcol">
            	<ul>
                    <li><a href="javascript:void(0);" class="firstMenu">Web development tools</a></li>
                    <li><a href="javascript:void(0);">ASP.Net</a></li>
                    <li><a href="javascript:void(0);">Java</a></li>
                    <li><a href="javascript:void(0);">VB.Net</a></li>
                    <li><a href="javascript:void(0);">C#.Net</a></li>
                </ul>
            </div>
            <div class="Fcol">
            	<ul>
                    <li><a href="javascript:void(0);" class="firstMenu">Oracle</a></li>
                    <li><a href="javascript:void(0);">EBS – Technical</a></li>
                    <li><a href="javascript:void(0);">Hyperion</a></li>
                    <li><a href="javascript:void(0);">MFG/SCM</a></li>
                    <li><a href="javascript:void(0);">OBIEE</a></li>
                    <li><a href="javascript:void(0);">PeopleSoft</a></li>
                    <li><a href="javascript:void(0);">R12 Financials Functional</a></li>
                    <li><a href="javascript:void(0);">Siebel</a></li>
                    <li><a href="javascript:void(0);">CRM</a></li>
                    <li><a href="javascript:void(0);">HRMS</a></li>
                    <li><a href="javascript:void(0);">Demantra</a></li>
                    <li><a href="javascript:void(0);">SOA</a></li>
                </ul>
            </div>
            <div class="Fcol">
            	<ul>
                    <li><a href="javascript:void(0);" class="firstMenu">Web development tools</a></li>
                    <li><a href="javascript:void(0);">EBS – Technical</a></li>
                    <li><a href="javascript:void(0);">Hyperion</a></li>
                    <li><a href="javascript:void(0);">MFG/SCM</a></li>
                    <li><a href="javascript:void(0);">OBIEE</a></li>
                    <li><a href="javascript:void(0);">PeopleSoft</a></li>
                    <li><a href="javascript:void(0);">R12 Financials Functional</a></li>
                    <li><a href="javascript:void(0);">Siebel</a></li>
                </ul>
            </div>
            <div class="Fcol">
            	<ul>
                    <li><a href="javascript:void(0);" class="firstMenu">Oracle</a></li>
                    <li><a href="javascript:void(0);">EBS – Technical</a></li>
                    <li><a href="javascript:void(0);">Hyperion</a></li>
                    <li><a href="javascript:void(0);">MFG/SCM</a></li>
                    <li><a href="javascript:void(0);">OBIEE</a></li>
                    <li><a href="javascript:void(0);">PeopleSoft</a></li>
                    <li><a href="javascript:void(0);">R12 Financials Functional</a></li>
                    <li><a href="javascript:void(0);">Siebel</a></li>
                    <li><a href="javascript:void(0);">CRM</a></li>
                    <li><a href="javascript:void(0);">HRMS</a></li>
                    <li><a href="javascript:void(0);">Demantra</a></li>
                    <li><a href="javascript:void(0);">SOA</a></li>
                </ul>
            </div>
            <div class="Fcol">
            	<ul>
                    <li><a href="javascript:void(0);" class="firstMenu">Oracle</a></li>
                    <li><a href="javascript:void(0);">EBS – Technical</a></li>
                    <li><a href="javascript:void(0);">Hyperion</a></li>
                    <li><a href="javascript:void(0);">MFG/SCM</a></li>
                    <li><a href="javascript:void(0);">OBIEE</a></li>
                    <li><a href="javascript:void(0);">PeopleSoft</a></li>
                    <li><a href="javascript:void(0);">R12 Financials Functional</a></li>
                    <li><a href="javascript:void(0);">Siebel</a></li>
                    <li><a href="javascript:void(0);">CRM</a></li>
                    <li><a href="javascript:void(0);">HRMS</a></li>
                    <li><a href="javascript:void(0);">Demantra</a></li>
                    <li><a href="javascript:void(0);">SOA</a></li>
                </ul>
            </div>-->
        </div>
    </div>
</div>
<div class="clearIt"></div>
<script type="text/javascript">
function subscribedForm()
{
    _gaq.push(['_trackEvent', 'Subscribe_Form', 'submit', 'email subscription']);
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
    if($("#user_email_id").val() == '' || $("#user_email_id").val() == 'Enter your Email here')
        {
            jAlert('Please enter email address','Parallel Branch');
            $("#user_email_id").focus();
            return false;
        }
    if($("#user_email_id").val() != '' && $("#user_email_id").val() != 'Enter your Email here')
        {
            if($("#user_email_id").val().search(filter) == -1)
                {
                    jAlert('Please enter valid email address','Parallel Branch');
                    $("#user_email_id").focus();
                    return false;
                }
        }
}
</script>
<div class="botFooter">
    <div class="botFleft">
    	<div> <!--https://www.facebook.com/ParallelBranchOnlineEducation-->
            Follow Us On: <a href="https://www.facebook.com/OfficialParallelBranch" target="_blank"><img src="https://www.parallelbranch.com/images/log_facebook.jpg"  alt="Facebook" align="middle" border="0" /></a>
        &nbsp;<a href="https://twitter.com/ParallelBranch"  target="_blank"><img src="https://www.parallelbranch.com/images/log_twitter.jpg"  alt="twitter" align="middle" border="0" /></a>
        &nbsp;<a href="http://www.linkedin.com/company/parallelbranch"  target="_blank"><img src="https://www.parallelbranch.com/images/log_in.jpg"  align="middle" alt="in" border="0" /></a>
        &nbsp;<a href="https://plus.google.com/103543632659432922078"  target="_blank"><img src="https://www.parallelbranch.com/images/log_google2.jpg"  align="middle" alt="google" border="0" /></a>
<!--        &nbsp;<a href="javascript:void(0);"><img src="https://www.parallelbranch.com/images/rss.png" align="middle"  height="24" alt="Blog" border="0" /></a>-->
        &nbsp;<a href="http://www.youtube.com/user/TheParallelBranch" target="_blank"><img src="https://www.parallelbranch.com/images/youtube.png" align="middle"   alt="Youtube" border="0" /></a></div>
        <div class="clearIt"></div>
        <div class="copyrightText botF Menu">
        <div style="float:left;  margin-top:20px;">
        Copyright &copy; 2014 Parallel Branch, Inc. All rights reserved. 
        </div>
        
        
        </div>
    </div>
    <div style="float:left; width:5%;">
    
    <table  border="0" cellpadding="0" cellspacing="0" title="Click to Verify - This site chose Symantec SSL for secure e-commerce and confidential communications.">
<tr>
<td width="135" align="center" valign="top"><script type="text/javascript" src="https://seal.verisign.com/getseal?host_name=www.parallelbranch.com&amp;size=XS&amp;use_flash=NO&amp;use_transparent=NO&amp;lang=en"></script><br />
<a href="http://www.symantec.com/verisign/ssl-certificates" target="_blank"  style="color:#000000; text-decoration:none; font:bold 7px verdana,sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;">ABOUT SSL CERTIFICATES</a></td>
</tr>
</table>
       <!--<a href="http://www.symantec.com/verisign/ssl-certificates" target="_blank"> <img src="https://www.parallelbranch.com/images/norton.jpg" align="middle"  border="0" /></a>-->
      
        </div>
    <div class="botFright">
        <div>
            <form method="post" id="subs" name="subs">
           Get latest updates:
                <input type="text" maxlength="50" class="defaultText watermarkOn footerSearch" value="" name="user_email_id" id="user_email_id" title="Enter your Email here" style="width:250px!important" /> &nbsp; &nbsp;
                <input type="submit" value="Subscribe"  name="Subscribed" onclick="return subscribedForm();" class="footerButton" />
<!--     remove class="submitBtn" from submit button          -->
            </form>
        </div>
        <div class="clearIt"></div>
        
    </div>
    
    <div class="botFMenu marginRight">
        
        <ul>
        	
<!--            <a href="javascript:void(0);" >Sitemap </a>   |   -->
                            <li><a href="https://www.parallelbranch.com/Allpage/privacy-policy"> Privacy Policy  </a></li> <li> |</li>
                                <li><a href="https://www.parallelbranch.com/Allpage/terms-condition"> Terms and Conditions  </a> </li><li> |</li> 
                               <li> <a href="https://www.parallelbranch.com/payment-gateways.php"> Payment Gateway </a></li>
                    
                     </ul>
        </div>
</div>

<!-- Video PopUp-->
<!--       <div class="videoDiv displayNone">
          	<div style="padding:10px;">
           	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="500" height="413" id="FLVPlayer">
           	  <param name="movie" value="FLVPlayer_Progressive.swf" />
           	  <param name="quality" value="high" />
           	  <param name="wmode" value="opaque" />
           	  <param name="scale" value="noscale" />
           	  <param name="salign" value="lt" />
           	  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_3&amp;streamName=video/video&amp;autoPlay=false&amp;autoRewind=false" />
           	  <param name="swfversion" value="8,0,0,0" />
           	   This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. 
           	  <param name="expressinstall" value="Scripts/expressInstall.swf" />
           	   Next object tag is for non-IE browsers. So hide it from IE using IECC. 
           	  [if !IE]>
           	  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="500" height="413">
           	    <![endif]
           	    <param name="quality" value="high" />
           	    <param name="wmode" value="opaque" />
           	    <param name="scale" value="noscale" />
           	    <param name="salign" value="lt" />
           	    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_3&amp;streamName=video/video&amp;autoPlay=false&amp;autoRewind=false" />
           	    <param name="swfversion" value="8,0,0,0" />
           	    <param name="expressinstall" value="Scripts/expressInstall.swf" />
           	     The browser displays the following alternative content for users with Flash Player 6.0 and older. 
           	    <div>
           	      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
           	      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
       	        </div>
           	    [if !IE]>
       	      </object>
           	  <![endif]
       	    </object>
            </div>
            <div class="videoTitle">27 Key Risk Areas for Litigation Hold Programs--Part1</div>
      </div>-->
            <!-- Video Popup End-->
    <script src="https://www.parallelbranch.com/Scripts/swfobject_modified.js" type="text/javascript"></script>
    <script type="text/javascript">
        //swfobject.registerObject("FLVPlayer");
        //swfobject.registerObject("FLVPlayer");
    </script>
    <!-- Placed at the end of the document so the pages load faster -->
   
 
 <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?1VAC5G7Tk8vkoIAlqycE8VviiGDKZvzT';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

$zopim(function() {
    $zopim.livechat.set({
      language: 'en',
      name: 'Visitor'
    });
  });
  
  
</script>
<!--End of Zopim Live Chat Script-->

<!-- webengage code start -->
<script id="_webengage_script_tag" type="text/javascript">
  var _weq = _weq || {};
  _weq['webengage.licenseCode'] = '~134105d6b';
  _weq['webengage.widgetVersion'] = "4.0";
 
  (function(d){
    var _we = d.createElement('script');
    _we.type = 'text/javascript';
    _we.async = true;
    _we.src = (d.location.protocol == 'https:' ? "//ssl.widgets.webengage.com" : "//cdn.widgets.webengage.com") +
              "/js/widget/webengage-min-v-3.0.js";
    var _sNode = d.getElementById('_webengage_script_tag');
    _sNode.parentNode.insertBefore(_we, _sNode);
  })(document);
</script>
<!-- webengage code end -->

<!--  pixel code start -->
<script type="text/javascript"> 
adroll_adv_id = "YYD4VUPCAJDFDPE2PNA6FS"; 
adroll_pix_id = "JZ552M5RB5EE3NVEWKCJT7"; 
(function () { 
var oldonload = window.onload; 
window.onload = function(){ 
   __adroll_loaded=true; 
   var scr = document.createElement("script"); 
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com"); 
   scr.setAttribute('async', 'true'); 
   scr.type = "text/javascript"; 
   scr.src = host + "/j/roundtrip.js"; 
   ((document.getElementsByTagName('head') || [null])[0] || 
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr); 
   if(oldonload){oldonload()}}; 
}()); 
</script>
<!--  pixel code end -->

<!-- Footer End-->

<!-- popup Refer a friend-->
<!--<div id="Usersetting" >
	<h1>Refer Your Friend <a href="javascript:void(0);" class="close" id="closeSetting"><img src="https://www.parallelbranch.com/images/loginClose.png" class="btn_close" title="Close Window" alt="Close" /></a></h1>
    <div class="loginNew" style="width:95%;">        
            <form name="referYuorFriendS" id="referYuorFriendS" method="POST"  action="https://www.parallelbranch.com/course_ajax_process.php?action=ReferrerFriendMsg">
                <table cellpadding="10" cellspacing="0" width="100%">                    
                    <tr>
                        <td>Select Course *</td>
                        <td>
                            <select name="course_id" id="course_id">
                                <option value="">Select Course</option>
                                                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Email Id *</td>
                        <td><input type="text" name="friend_email_id" id="friend_email_id" value="" />
                            <br><span class="grey_text">(Separated by comma)</span></td>
                    </tr>
                    <tr>
                        <td>Subject</td>
                        <td><input type="text" name="subject" id="subject"  /></td>
                    </tr>
                    <tr>
                        <td valign="top">Message *</td>
                        <td><textarea name="Message" id="Message" rows="5" >I recently came across this course and I definitely want you to check it out.</textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="alignRight"><input type="button" class="buttonSmall" value="Submit" name="forgotpass" onclick="SendReferrerMsg();" /></td>
                    </tr>
                </table>
            </form>
        
    </div>    
</div>-->
<!-- popup refer a friend end -->
</body>
</html>
