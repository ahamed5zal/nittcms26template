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
    <title><?php echo $TITLE ?></title>

    <script type=application/ld+json>{ "@context" : "https://schema.org", "@type" : "WebSite", "name" : "NIT Trichy", "alternateName" : "National Institute of Technology, Tiruchirappalli", "url" : "https://www.nitt.edu" }</script>

    <link rel='stylesheet' href='/cms/templates/neonnitt/css/fonts.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/cms/templates/neonnitt/css/swiper-bundle.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/cms/templates/neonnitt/css/font-awesome-4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/cms/templates/neonnitt/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/cms/templates/neonnitt/css/color.php' type='text/css' media='all' />

    <link rel='stylesheet' href='/cms/templates/neonnitt/css/cms-elements.css' type='text/css' media='print' onload="this.media='all'" />
    <link rel='stylesheet' href='/cms/templates/neonnitt/css/adminui.css' type='text/css' media='print' onload="this.media='all'" />
    <link rel='stylesheet' href='/cms/templates/neonnitt/css/error.css' type='text/css' media='print' onload="this.media='all'" />
    <link rel='stylesheet' href='/cms/templates/neonnitt/css/form.css' type='text/css' media='print' onload="this.media='all'" />
    <link rel='stylesheet' href='/cms/templates/neonnitt/css/dashboard.css' type='text/css' media='print' onload="this.media='all'" />

    <script src='/cms/templates/neonnitt/extras/jquery.js' defer></script>
    <script src='/cms/templates/neonnitt/extras/jquery-migrate.min.js' defer></script>

    <link rel="icon" href="/cms/templates/neonnitt/images/nittlogo-150x150.jpg" sizes="32x32" />
    <link rel="icon" href="/cms/templates/neonnitt/images/nittlogo-300x300.jpg" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="/cms/templates/neonnitt/images/nittlogo-300x300.jpg" />
    <meta name="msapplication-TileImage" content="/cms/templates/neonnitt/images/nittlogo-300x300.jpg" />

    <style>
    body{font-weight:normal;font-style:normal;}
    </style>
    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, includedLanguages: 'hi,ta'}, 'google_translate_element');
    }
    </script>
</head>
<body onload="<?php echo $STARTSCRIPTS; ?>">

<div id="wrapper">

    <div class="top-shadow"></div>

    <!-- ========== TOP UTILITY BAR ========== -->
    <div class="navigation-wrapper">
        <div class="secondary-navigation-wrapper">
            <div class="container-wide">
                <div class="secondary-nav-inner">
                    <ul class="secondary-nav-left">
                        <li><a href="<?php echo $urlRequestRoot; ?>/home/students/facilitiesnservices/library/">Library</a></li>
                        <li><a href="<?php echo $urlRequestRoot; ?>/home/academics/departments/">Departments</a></li>
                        <?php $isHome = ($_SERVER['REQUEST_URI'] === '/' || preg_match('#^/home/?(\?.*)?$#', $_SERVER['REQUEST_URI'])); ?>
                        <li><a href="<?php echo $isHome ? '#notices' : $urlRequestRoot . '/home/#notices'; ?>">Events</a></li>
                        <li><a href="<?php echo $urlRequestRoot; ?>/home/students/facilitiesnservices/ComputerSupportGroup/">CC</a></li>
                        <li><a href="#" data-toggle="collapse" data-target="#translate-bar">Translate</a></li>
                        <li><a target="_blank" href="https://www.facebook.com/NITT.Official/"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/ReachNITT"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UCEPOEe5azp3FbUjvMwttPqw"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <div class="secondary-nav-search">
                        <button type="button" onclick="window.location.href='<?php echo $urlRequestRoot; ?>/search'"><i class="fa fa-search"></i></button>
                    </div>
                    <ul class="secondary-nav-right">
                        <li><a target="_blank" href="https://students.nitt.edu">Students Webmail</a></li>
                        <li><a target="_blank" href="https://webmail.nitt.edu">Staff Webmail</a></li>
                        <li><a href="<?php echo $urlRequestRoot; ?>/sitemap">Sitemap</a></li>
                        <li><a href="#" data-toggle="collapse" data-target="#action-bar">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ========== ACTION BAR (CMS Dashboard) ========== -->
        <div class="container-wide collapse" id="action-bar">
            <?php echo $ACTIONBARMODULE; ?>
            <?php echo $ACTIONBARPAGE; ?>
        </div>

        <!-- ========== TRANSLATE BAR ========== -->
        <div class="container-wide collapse" id="translate-bar">
            <div id="google_translate_element"></div>
        </div>

        <!-- ========== MAIN NAVIGATION ========== -->
        <div class="primary-navigation-wrapper">
            <header id="top">
                <div class="container-wide nav-header">
                    <a class="logo" href="#">
                        <img src="/cms/templates/neonnitt/images/nitt.png" class="logo-desktop" alt="">
                        <img src="/cms/templates/neonnitt/images/nittt-mob-latest.png" class="logo-mobile" alt="">
                    </a>
                    <button class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="container-wide">
                    <nav class="main-nav">
                        <ul class="nav-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/about/">About Us</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/administration/">Administration</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/home/academics/">Academic</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/home/admissions/">Admission</a></li>
                            <li class="has-mega-menu">
                                <a href="<?php echo $urlRequestRoot; ?>/home/academics/departments/">Departments / Centres <span class="caret"></span></a>
                                <div class="mega-menu">
                                    <div class="mega-menu-inner">
                                        <p class="mega-title"><a href="<?php echo $urlRequestRoot; ?>/academics/departments/">Departments / Centres</a></p>
                                        <div class="mega-cols">
                                            <ul class="mega-col">
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/architecture">Architecture</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/cecase">CECASE</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/chem">Chemical Engineering</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/chemistry">Chemistry</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/civil">Civil Engineering</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/ca">Computer Applications</a></li>
                                            </ul>
                                            <ul class="mega-col">
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/cse">Computer Science & Engineering</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/dee">DEE</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/eee">Electrical & Electronics Engineering</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/ece">Electronics & Communication Engineering</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/humanities">Humanities and Social Sciences</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/ice">Instrumentation & Control Engineering</a></li>
                                            </ul>
                                            <ul class="mega-col">
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/management">Management Studies</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/maths">Mathematics</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/mech">Mechanical Engineering</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/meta">Metallurgical & Materials Engineering</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/physics">Physics</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments/prod">Production Engineering</a></li>
                                            </ul>
                                        </div>
                                        <p class="mega-title"><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/">Centres/Common facility</a></p>
                                        <div class="mega-cols">
                                            <ul class="mega-col">
                                                <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/centralworkshop/">Central Workshop</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/ComputerSupportGroup/">Computer Support Group</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/em/">Estate Maintenance</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/guesthouse/">Guest House</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/hospital/">Hospital</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/ccs/">Campus Communication Services</a></li>
                                            </ul>
                                            <ul class="mega-col">
                                                <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/hostelsnmess/">Hostels</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/lhc">Lecture Hall Complex/Orion</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/firstyearcoordinator/">First Year Coordinator Office</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/library/">Library</a></li>
                                                <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/security/">Security</a></li>
                                                <li><a target="_blank" href="https://paramporul.nitt.edu">Super Computing(ParamPorul)</a></li>
                                            </ul>
                                            <ul class="mega-col">
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
                            </li>
                            <li><a target="_blank" href="https://rc.nitt.edu">Research & Consultancy</a></li>
                            <li class="has-dropdown">
                                <a href="#">Important Links <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/tp/">Placements</a></li>
                                    <li><a href="<?php echo $urlRequestRoot; ?>/sitemap">Sitemap</a></li>
                                    <li><a href="https://webmail.nitt.edu">Webmail</a></li>
                                    <li><a href="#">Search</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
    </div>

    <!-- ========== INFO MESSAGES ========== -->
    <main <?php if(isset($action) && $action != 'view') echo 'class="cms-admin-boxed"'; ?>>

    <div class="info">
        <span><?php echo $ERRORSTRING; ?></span>
        <span><?php echo $WARNINGSTRING; ?></span>
        <span><?php echo $INFOSTRING; ?></span>
    </div>
    <?php echo $CONTENT; ?>
    </main>

    <!-- ========== FOOTER ========== -->
    <footer id="page-footer">
        <section id="footer-content">
            <div class="container-wide">
                <div class="footer-grid">
                    <div class="footer-col">
                        <a href="<?php echo $urlRequestRoot; ?>/academics/"><h4>Academics</h4></a>
                        <ul>
                            <li><a href="<?php echo $urlRequestRoot; ?>/academics/programmes">Academic Programmes</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/academics/departments">Departments</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/academics/faculty">Faculty</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/academics/rules">Rules and Regulations</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/academics/scholarships">Scholarships</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <a href="<?php echo $urlRequestRoot; ?>/admissions/"><h4>Admissions</h4></a>
                        <ul>
                            <li><a href="<?php echo $urlRequestRoot; ?>/admissions/btech">B.Tech</a> / <a href="<?php echo $urlRequestRoot; ?>/admissions/barch">B.Arch.</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/admissions/mtech">M.Tech</a> / <a href="<?php echo $urlRequestRoot; ?>/admissions/mtech">M.Arch.</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/admissions/msc">M.Sc</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/admissions/mca">MCA</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/admissions/mba">MBA</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/admissions/ma">MA</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/admissions/ms">MS (By Research)</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/admissions/phd">Ph.D.</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <a href="<?php echo $urlRequestRoot; ?>/students/"><h4>Student life</h4></a>
                        <ul>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/events">Events</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/clubsnassocs">Clubs & Associations</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices">Facilities & Services</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/facilitiesnservices/hostelsnmess/">Hostel & Messes</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/students/office">Office of the Dean (Students)</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Other Links</h4>
                        <ul>
                            <li><a href="<?php echo $urlRequestRoot; ?>/other/tenders">Tenders and Notices</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/other/jobs">Job Opportunities</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/righttoinfoact">RTI</a></li>
                            <li><a href="http://alumni.nitt.edu" target="_blank">Alumni</a></li>
                            <li><a href="<?php echo $urlRequestRoot; ?>/sitemap">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="footer-col footer-col-wide">
                        <a href="<?php echo $urlRequestRoot; ?>/contact/"><h4>Contact Us</h4></a>
                        <ul>
                            <li>National Institute of Technology<br>Tiruchirappalli - 620015<br>Tamil Nadu, INDIA<br>Fax: +91-431-2500133</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bg-layer"></div>
        </section>

        <section id="footer-bottom">
            <div class="container-wide">
                <div class="footer-bottom-inner">
                    <div class="copyright">
                        <p>&copy; <a href="<?php echo $urlRequestRoot; ?>/webteam">WebTeam NIT Trichy</a><br><span>National Institute of Technology, Tiruchirappalli</span></p>
                    </div>
                    <ul class="footer-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="<?php echo $urlRequestRoot; ?>/about">About</a></li>
                        <li><a href="<?php echo $urlRequestRoot; ?>/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <div style="display: none;">
            <?php echo $FOOTER; ?>
            <?php echo $BREADCRUMB; ?>
            <?php echo $MENUBAR; ?>
        </div>
    </footer>

</div><!-- /#wrapper -->

<script src='/cms/templates/neonnitt/extras/swiper-bundle.min.js' defer></script>
<script src='/cms/templates/neonnitt/extras/custom.js' defer></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
