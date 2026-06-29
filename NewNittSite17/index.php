<?php
    if (! defined('__PRAGYAN_CMS')) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 403 Forbidden');
    echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
    echo '<hr>' . $_SERVER['SERVER_SIGNATURE'];exit(1);
    }
    global $userId, $action, $urlRequestRoot, $pageId;
    if ($userId != 0 && $action == 'login' && $GLOBALS['pageFullPath'] == '/') {
    $urlRequestRoot = isset($urlRequestRoot) ? $urlRequestRoot : '';
    header('Location: ' . $urlRequestRoot . '/');
    }
?>
<!DOCTYPE html>

<html lang="en-US">


<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

    <meta name="Description" content="<?php echo $SITEDESCRIPTION ?>"/>

    <meta name="Keywords" content="<?php echo $SITEKEYWORDS ?>"/>
<?php if ($pageId < 0) { ?>
    <meta name="robots" content="noindex, follow" />
<?php } ?>

	<!-- Page Title

	================================================== -->

	<title><?php echo $TITLE ?></title>

<!-- <link rel='dns-prefetch' href='//maps.googleapis.com' /> -->

<script type=application/ld+json>{ "@context" : "https://schema.org", "@type" : "WebSite", "name" : "NIT Trichy", "alternateName" : "National Institute of Technology, Tiruchirappalli", "url" : "https://www.nitt.edu" }</script><script type=application/ld+json>{ "@context" : "https://schema.org", "@type" : "CollegeOrUniversity", "url" : "https://www.nitt.edu", "logo": "https://www.nitt.edu/home/NIT_Trichy_logo.jpg", "contactPoint" : [{ "@type" : "ContactPoint", "telephone" : "+91-431-2503000", "contactType" : "customer service" },{ "@type" : "ContactPoint", "telephone" : "+91-431-2504000", "contactType" : "technical support" }],"address": {"@type": "PostalAddress","addressLocality": "Tiruchirappalli","addressRegion": "Tamil Nadu","postalCode": "620015","streetAddress": "Tanjore Main Road"},"name": "NIT Trichy","foundingDate":"1964" }</script>




<!-- <link rel='stylesheet' id='fonts-OpenSans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A200%2C400%2C300%2C600&#038;ver=4.6.5' type='text/css' media='all' /> -->

<!-- <link rel='stylesheet' id='fonts-Montserrat-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;ver=4.6.5' type='text/css' media='all' /> -->

<link rel='stylesheet' id='bootstrap-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/bootstrap.css' type='text/css' media='all' />

<link rel='stylesheet' id='selectize-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/selectize.css' type='text/css' media='print' onload="this.media='all'" />

<link rel='stylesheet' id='owl-car-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/owl-carousel.css' type='text/css' media='all' />

<link rel='stylesheet' id='rev-settings-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/revsettings.css' type='text/css' media='all' />

<link rel='stylesheet' id='font-awesome-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/font-awesome-4.7.0/css/font-awesome.min.css' type='text/css' media='all' />

<link rel='stylesheet' id='style.css' href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/style.css' type='text/css' media='all' />

<link rel='stylesheet' id='color-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/color.php' type='text/css' media='all' />

<link rel='stylesheet' id='js_composer_front-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/js_composer.min.css' type='text/css' media='all' />

<link rel='stylesheet' id='cms-elements-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/cms-elements.css' type='text/css' media='print' onload="this.media='all'" />


<link rel='stylesheet' id='adminui'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/adminui.css' type='text/css' media='print' onload="this.media='all'" />

<link rel='stylesheet' id='error'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/error.css' type='text/css' media='print' onload="this.media='all'" />

<link rel='stylesheet' id='breadcrumb-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/breadcrumb.css' type='text/css' media='print' onload="this.media='all'" />
<link rel='stylesheet' id='form-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/form.css' type='text/css' media='print' onload="this.media='all'" />
<link rel='stylesheet' id='dashboard-css'  href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/dashboard.css' type='text/css' media='print' onload="this.media='all'" />
<link rel='stylesheet' id='translate-css' href='<?php echo $TEMPLATEBROWSERPATH; ?>/css/translate.css' type='text/css' media='all' />

<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/jquery.js' defer></script>

<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/jquery-migrate.min.js' defer></script>

<link rel="icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/nittlogo-150x150.jpg" sizes="32x32" />

<link rel="icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/nittlogo-300x300.jpg" sizes="192x192" />

<link rel="apple-touch-icon-precomposed" href="<?php echo $TEMPLATEBROWSERPATH; ?>/nittlogo-300x300.jpg" />

<meta name="msapplication-TileImage" content="<?php echo $TEMPLATEBROWSERPATH; ?>/nittlogo-300x300.jpg" />

<style type="text/css" class="options-output">
body{font-weight:normal;
    font-style:normal;
    }
</style>

<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1439533085489{background-color: #011c38 !important;}.vc_custom_1439374049302{padding-top: 50px !important;}.vc_custom_1439435173873{padding-top: 50px !important;}.vc_custom_1439440500698{padding-top: 50px !important;}.vc_custom_1439454155588{padding-top: 50px !important;}.vc_custom_1439435173873{padding-top: 50px !important;}.vc_custom_1439455907540{padding-top: 50px !important;padding-bottom: 50px !important;}.vc_custom_1439454777714{padding-top: 20px !important;padding-bottom: 20px !important;padding-left: 30px !important;background-color: #012951 !important;}.vc_custom_1473735707331{padding-top: 20px !important;padding-right: 30px !important;padding-bottom: 55px !important;background-color: #012951 !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
<style>
.blink {
font-size: 1.2em;
margin: 2px;
text-align: center;
animation-name: example;
animation-duration: 4s;
animation-iteration-count: infinite;
}

@keyframes example {
    0%   {color: red;}
    50%  {color: blue;}
    100% {color: green;}
}

.upcoming-header {
   margin-top: 5px;
   margin-bottom: 0px;
}

article > h6 {
   margin-top: 2px;
   margin-bottom: 5px;
}

</style>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
</head>

<body class="home page page-id-300 page-template page-template-page-templates page-template-template-canvas page-template-page-templatestemplate-canvas-php wpb-js-composer js-comp-ver-4.12.1 vc_responsive" onload="<?php echo $STARTSCRIPTS; ?>">




<div id="wrapper">
    <div class="navigation-wrapper">
        <!--Topmost set of links-->
        <div class="secondary-navigation-wrapper">
            <div class="container">

                <ul data-breakpoint="800" id="menu-top-menu-0" class="secondary-navigation list-unstyled pull-left">
                <li id="menu-item-1" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1"><a  title="Webmail" href="<?php echo $urlRequestRoot; ?>/home/students/facilitiesnservices/tp/">Placements</a>
                </li>
                <li id="menu-item-2" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2"><a  title="Library" href="<?php echo $urlRequestRoot; ?>/home/students/facilitiesnservices/library/">Library</a></li>
                <li id="menu-item-3" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3"><a  title="Departments" href="<?php echo $urlRequestRoot; ?>/home/academics/departments/">Departments</a>
                </li>
		<li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4"><a  title="Events" href="<?php echo $urlRequestRoot; ?>/home/students/events/">Events</a>
                </li>
		<li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5"><a  title="CC" href="<?php echo $urlRequestRoot; ?>/home/students/facilitiesnservices/ComputerSupportGroup/">CC</a>
                </li>
               <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7"><a  title="Translate" href="#" data-toggle="collapse" data-target="#translate-bar">Translate</a></li>
		<li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a target="_blank" title="Facebook" href="https://www.facebook.com/NITT.Official/"><i style="color:white;" onmouseover="this.style.color='#ea6645'" onmouseout="this.style.color='white'" class="fa fa-facebook"></i></a></li>
		<li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a target="_blank" title="Twitter" href="
https://twitter.com/ReachNITT"><i style="color:white;" onmouseover="this.style.color='#ea6645'" onmouseout="this.style.color='white'" class="fa fa-twitter"></i></a></li>
<li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
                        <a target="_blank"  title="Youtube" href="https://www.youtube.com/channel/UCEPOEe5azp3FbUjvMwttPqw">
                            <i style="color:white;" onmouseover="this.style.color='#ea6645'" onmouseout="this.style.color='white'" class="fa fa-youtube-play"></i>
                        </a>
                    </li>
		<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9">

                            <i style="color:white;" onmouseover="this.style.color='#ea6645'" onmouseout="this.style.color='white'" class="fa fa-linkedin"></i>
		</li>

                </ul>

                <div class="search">
                    <form class="input-group">
                        <span class="input-group-btn">
                        <button type="button" id="search-submit" class="btn" onclick="window.location.href='<?php echo $urlRequestRoot; ?>/search'">
                        <i class="fa fa-search"></i>
                        </button>
                        </span>
                    </form><!-- /.input-group -->
                </div>

                <ul data-breakpoint="800" id="menu-top-menu-1" class="secondary-navigation list-unstyled pull-right">
                <li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5"><a  target="_blank" title="Students Webmail" href="https://students.nitt.edu">Students Webmail</a></li>
                <li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5"><a  target="_blank" title="Staff Webmail" href="https://webmail.nitt.edu">Staff Webmail</a></li>
                <li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6"><a  title="Sitemap" href="<?php echo $urlRequestRoot; ?>/sitemap">Sitemap</a></li>
                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a  title="Dashboard" href="#" data-toggle="collapse" data-target="#action-bar">Dashboard</li>
                </ul>

            </div><!--/.container -->
        </div><!-- /.secondary-navigation -->
        <!--Dashboard-->
        <div class="container collapse" id="action-bar">
         <?php echo $ACTIONBARMODULE; ?>
         <?php echo $ACTIONBARPAGE; ?>
        </div>

        <!--translate-->
		<div class="container collapse" id="translate-bar">
			<div id="google_translate_element"></div>
		</div>
<!--Main navbar with logo and menu options start -->
        <div class="primary-navigation-wrapper">
            <header class="navbar" id="top">
                <div class="container">
                <a class="logo" href="#">
                    <!--<img src="<?php echo $TEMPLATEBROWSERPATH; ?>/nittfulllogo.png" class = "image-full" alt="">-->
		    <!--<img src="./nittlogo-new.png" class = "image-full" alt="">-->
		    <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/images/nitt.png" class = "image-full" alt="">
                    <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/nittt-mob-latest.png" class = "image-mobile" alt="">
                </a>
                </div>
                <div class="container">
                    <!--Logo part start-->
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                       <!-- <div class="navbar-brand nav" id="brand">

                        </div>-->
                    </div>
                    <!--logo part ends-->
                    <!--Menu options start -->
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-left" >

                    <ul data-breakpoint="800" id="menu-main-menu" class="nav navbar-nav" >
                        <li id="menu-item-415" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-415 ">
                        <a  title="Home" href="#">Home </a>
                        </li>
                        <li id="menu-item-124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124">
                        <a  title="About Us" href="<?php echo $urlRequestRoot; ?>/about/">About Us</a>
                        </li>
                        <li id="menu-item-197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-197 ">
                        <a  title="Administration" href="<?php echo $urlRequestRoot; ?>/administration/">Administration </a>
                        </li>
                        <li id="menu-item-489" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-489 ">
                        <a  title="Academic" href="<?php echo $urlRequestRoot; ?>/home/academics/">Academic </a>
                        </li>
                        <li id="menu-item-94" class="menu-item menu-item-type-custom menu-item-object-page menu-item-94 ">
                        <a  title="Admission" href="<?php echo $urlRequestRoot; ?>/home/admissions/">Admission </a>
                        </li>


                        <li id="menu-item-93" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-93 ">
                        <a  title="Departments" href="<?php echo $urlRequestRoot; ?>/home/academics/departments/">Departments / Centres <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <div class="container-fluid">
                            <div class = "row">
                            <p style="font-weight:bold;margin:5px;font-size:18px;"><a href="<?php echo $urlRequestRoot; ?>/academics/departments/">Departments / Centres</a></p>
                            <div class="col-sm-4">
                        	<ul class="list-unstyled">
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/architecture>Architecture</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/cecase>CECASE</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/chem>Chemical Engineering</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/chemistry>Chemistry</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/civil>Civil Engineering</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/ca>Computer Applications</a></li></ul>
                            </div>
                            <div class="col-sm-4">
                        	<ul class="list-unstyled">
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/cse>Computer Science & Engineering</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/dee>DEE</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/eee>Electrical & Electronics Engineering</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/ece>Electronics & Communication Engineering</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/humanities>Humanities and Social Sciences</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/ice>Instrumentation & Control Engineering</a></li>
                            </ul>
                            </div>
                            <div class="col-sm-4">
                            <ul class="list-unstyled">
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/management>Management Studies</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/maths>Mathematics</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/mech>Mechanical Engineering</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/meta>Metallurgical & Materials Engineering</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/physics>Physics</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments/prod>Production Engineering</a></li>
                            </ul>
                            </div>
                            </div>
                            <div class="row">
                            <p style="font-weight:bold; margin:5px; font-size:30px;"><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/">Centres/Common facility</a></p>
                             <div class="col-sm-4">
                            <ul class="list-unstyled">
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/centralworkshop/">Central Workshop</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/ComputerSupportGroup/">Computer Support Group</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/em/">Estate Maintenance</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/guesthouse/">Guest House</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/hospital/">Hospital</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/ccs/">Campus Communication Services</a></li>
                            </ul>
                            </div>
                            <div class="col-sm-4">
                            <ul class="list-unstyled">
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/hostelsnmess/">Hostels</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/lhc>Lecture Hall Complex/Orion</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/firstyearcoordinator/">First Year Coordinator Office</a></li>

                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/library/">Library</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/security/">Security</a></li>
                            <li><a target="_blank" href="https://paramporul.nitt.edu">Super Computing(ParamPorul)</a></li>
			   </ul>
                            </div>
                            <div class="col-sm-4">
                            <ul class="list-unstyled">
                            <!--<li><a target="_blank" href="http://nittcoe.com/">Siemens CoE</a></li>-->
			                <li><a target="_blank" href="https://manufacturingcoe.com/">CoE in Manufacturing</a></li>
 			                <li><a target="_blank" href="https://cedi.nitt.edu/">CEDI</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/rc/sif/">Sophisticated Instrumentation Facility</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/sportscenter/">Physical Education / Sports Center/ SAS Office</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/tp/">Training and Placement</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/transport/">Transport</a></li>

                            </ul>
                            </div>
                            </div>
                            </div>
                        </div>
                        </li>
                        <li id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88">
                        <a  target="_blank" title="Research and Consultancy" href="https://rc.nitt.edu">Research & Consultancy</a>
                        </li>
                        <li id="menu-item-415-1" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-415 ">
                        <a  title="Links">Important Links <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/tp/">Placements</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/sitemap">Sitemap</a></li>
                            <li><a href="https://webmail.nitt.edu">Webmail</a></li>
                            <li><a href="#">Search</a></li>
                        </ul>
                        </li>
                    </ul>
                    </nav><!-- Menu options part ends-->
                </div><!-- /.container -->
            </header><!-- /.navbar -->
        </div><!-- /.primary-navigation -->

        <div class="background">
        </div>
    </div>
    <!-- end Header -->

     <!-- main section -->
      <main <?php if(isset($action) && $action != 'view') echo 'class="cms-admin-boxed"'; ?>>
     <div class="info">
        <span><?php echo $ERRORSTRING; ?></span>
        <span><?php echo $WARNINGSTRING; ?></span>
        <span><?php echo $INFOSTRING; ?></span>
     </div>
        <?php echo $CONTENT; ?>
      </main>
<!-- Footer -->
<footer id="page-footer">
    <section id="footer-content">
	<h6 style="display:none;">footer</h6>
        <div class="container">
        <div class="row">
<div class="col-md-2 col-sm-4" style="height:210px;">
    <div id="text-3-0" class="widget widget_text">
    <a href="<?php echo $urlRequestRoot; ?>/academics/"><h4>Academics</h4></a>
        <div class="textwidget">
            <aside>
                <ul class="list-links">
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/programmes>Academic Programmes</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/departments>Departments</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/faculty>Faculty</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/rules>Rules and Regulations</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/academics/scholarships>Scholarships</a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<div class="col-md-2 col-sm-4" style="height:210px;">
    <div id="text-3-1" class="widget widget_text">
    <a href="<?php echo $urlRequestRoot; ?>/admissions/"><h4>Admissions</h4></a>
        <div class="textwidget">
            <aside>
                <ul class="list-links">
                            <li><a href=<?php echo $urlRequestRoot; ?>/admissions/btech>B.Tech</a> / <a href=<?php echo $urlRequestRoot; ?>/admissions/barch>B.Arch.</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/admissions/mtech>M.Tech</a> / <a href=<?php echo $urlRequestRoot; ?>/admissions/mtech>M.Arch.</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/admissions/msc>M.Sc</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/admissions/mca>MCA</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/admissions/mba>MBA</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/admissions/ma>MA</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/admissions/ms>MS (By Research)</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/admissions/phd>Ph.D.</a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<div class="col-md-2 col-sm-4" style="height:210px;">
    <div id="text-3-2" class="widget widget_text">
    <a href="<?php echo $urlRequestRoot; ?>/students/"><h4>Student life</h4></a>
        <div class="textwidget">
            <aside>
                <ul class="list-links">
                            <li><a href=<?php echo $urlRequestRoot; ?>/students/events>Events</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/students/clubsnassocs>Clubs & Associations</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/students/facilitiesnservices>Facilities & Services</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/hostelsnmess/">Hostel & Messes</a></li>
                            <li class=noBorder><a href=<?php echo $urlRequestRoot; ?>/students/office>Office of the Dean (Students)</a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>
<div class="col-md-2 col-sm-4" style="height:210px;">
    <div id="text-3-3" class="widget widget_text">
    <h4>Other Links</h4>
        <div class="textwidget">
            <aside>
                <ul class="list-links">
                            <li><a href=<?php echo $urlRequestRoot; ?>/other/tenders>Tenders and Notices</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/other/jobs>Job Opportunities</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/righttoinfoact>RTI</a></li>
                            <li><a href=http://alumni.nitt.edu target=_blank >Alumni</a></li>
                            <li><a href=<?php echo $urlRequestRoot; ?>/sitemap>Sitemap</a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-4" style="height:210px;">
    <div id="text-3-4" class="widget widget_text">
    <a href="<?php echo $urlRequestRoot; ?>/contact/"><h4>Contact Us</h4></a>
        <div class="textwidget">
            <aside>
                <ul class="list-unstyled">
                            <li>National Institute of Technology<br>Tiruchirappalli - 620015<br>Tamil Nadu, INDIA<br>Fax: +91-431-2500133<br></li>
                </ul>
            </aside>
        </div>
    </div>
</div>
</div>
</div><!--/container-->
<div class="background">
</div>
</section> <!--/footer-content-->

<!--Footer bottom-->
<section id="footer-bottom">
	<h6 style="display:none;">footer-bottom</h6>
	<div class="container">
        <div class="footer-inner">
            <div class="copyright"><p>&copy; <a href=<?php echo $urlRequestRoot; ?>/webteam>WebTeam NIT Trichy</a><br><span class=break>National Institute of Technology, Tiruchirappalli</span></p></div>
            <div class="footer-options">
                <ul data-breakpoint="800" id="menu-footer-menu" class="secondary-navigation list-unstyled pull-right" style="margin:10px;">
                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a  title="Home" href="#">Home</a></li>
                <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a  title="About" href="<?php echo $urlRequestRoot; ?>/about">About</a></li>
                <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a  title="Contact" href="<?php echo $urlRequestRoot; ?>/contact">Contact</a></li>
                </ul>
            </div>
        </div><!-- /.footer-inner -->
    </div><!-- /.container -->
</section><!-- /.footer-bottom -->

<div style="display: none;">
    <?php echo $FOOTER; ?>
    <?php echo $BREADCRUMB; ?>
    <?php echo $MENUBAR; ?>
</div>

</footer>

</div><!-- /wrapper -->



<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/jquery.blockUI.min.js' defer></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/jquery.cookie.min.js' defer></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/bootstrap.min.js' defer></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/jquery.fitvids.js' defer></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/selectize.min.js' defer></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/icheck.min.js' defer></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/owl.carousel.min.js' defer></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/jquery.vanillabox-0.1.5.min.js' defer></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/custom.js' defer></script>
<script type='text/javascript' src='<?php echo $TEMPLATEBROWSERPATH; ?>/extras/js_composer_front.min.js' defer></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
