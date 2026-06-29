$('.navigate').children().click(function(){
	if(navigator.appName == "Microsoft Internet Explorer" && $('html').is('.ie7')){// &&
	    window.location.href='http://www.nitt.edu/'+$(this).parent().toggleClass('active').attr('data-href');
	}
	else {
	    $(this).parent().toggleClass('active').next('.menudrop').stop().slideToggle("slow").siblings('.menudrop').stop().slideUp("slow");
	    $(this).parent().siblings('.navigate').removeClass('active');
	}
   });
 $('#toplinks').click(function(){
   $('#sidelinks').toggle(function(){
   $(this).animate({right:'0%'},500,'linear',{easing: "easein"});
   },function(){
   $(this).animate({right:'-12%'},500,'linear',{easing: "easein"});
   });
   });
   
    $('#mainmenutoggle').click(function(){
   $('#mainmenu').slideToggle("slow")
   });
$(window).resize(setDivVisibility);
function setDivVisibility(){
     if (($(window).width()) > '696'){  
     $('#sidelinks').css('display','none');  
     }
if (($(window).width()) > '596'){  
     $('#mainmenu').css('display','none');  
     }  	 
 }

      $(document).ready(function() {
        $('table').addClass('nitttable');
      });
    

 function toggleDashboard(dashboardID,button){var obj=document.getElementById(dashboardID);if(obj.style.display=="block"){hideDashboard(dashboardID,button);Set_Cookie("nittsitedashboard","OFF")}else{showDashboard(dashboardID,button);Set_Cookie("nittsitedashboard","ON")}}function showDashboard(dashboardID,button){var obj=document.getElementById(dashboardID);obj.style.display="block";button.innerHTML="Hide Dashboard"}function hideDashboard(dashboardID,button){var obj=document.getElementById(dashboardID);obj.style.display="none";button.innerHTML="Show Dashboard"}function checkDashboard(dashboardID,dashboardBut){var dashboard_status=Get_Cookie("nittsitedashboard");if(!dashboard_status){Set_Cookie("nittsitedashboard","OFF");return hideDashboard(dashboardID,document.getElementById(dashboardBut))}else{if(dashboard_status=="ON"){return showDashboard(dashboardID,document.getElementById(dashboardBut))}else{return hideDashboard(dashboardID,document.getElementById(dashboardBut))}}}
