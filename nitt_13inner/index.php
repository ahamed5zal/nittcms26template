<?php
if(!defined('__PRAGYAN_CMS')) { 
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
	echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
	exit(1);
}
//require('vendor/autoload.php');
//ob_start();
global $userId,$action,$urlRequestRoot;
if($userId!=0&&$action=='login'&&$GLOBALS['pageFullPath']=='/') {
	$urlRequestRoot = isset($urlRequestRoot) ? $urlRequestRoot : '';
	header('Location: ' . $urlRequestRoot . '/');
}
@include_once("$sourceFolder/$templateFolder/".TEMPLATE."/includes/header.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en"> 
	<!--<![endif]-->
	<head>
		<title><?php echo $TITLE; ?></title>
        <link rel="icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/nittlogo-300x300.png" type="image/png"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="description" content="<?php echo $SITEDESCRIPTION ?>" />
		<meta name="keywords" content="<?php echo $SITEKEYWORDS ?>" /> 
		<?php global $urlRequestRoot; global $PAGELASTUPDATED; global $pageId;
		if($PAGELASTUPDATED!="")
			echo '<meta http-equiv="Last-Update" content="'.substr($PAGELASTUPDATED,0,10).'@00:00:00 IST" />'."\n";
		if ($pageId < 0) echo '<meta name="robots" content="noindex, follow" />'."\n";
		?>
		<?php echo $BREADCRUMB; ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/error.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/breadcrumb.css" />
		<link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/form.css">
		<link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/corporate-final.css">
		<link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/translate.css">
		<!--  <link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/scroll.css">-->
		<link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/dashboard.css">
		<link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/footer.css">
		<link rel="stylesheet" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/header.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/main.css"/>
		<script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/jquery.js"></script>
		<!-- <script language="javascript" type="text/javascript" src="<?php echo  $TEMPLATEBROWSERPATH; ?>/scripts/jquery.pjax.js" ></script> -->
		<!--[if lte IE 8 ]> 
		<style>
		body {
		min-width:1350px;
		}
		</style>
		<![endif]-->
		<script language="javascript" type="text/javascript">
		//defined here for use in javascript
		var templateBrowserPath = "<?php echo $TEMPLATEBROWSERPATH ?>";
		var urlRequestRoot = "<?php echo $urlRequestRoot?>";

		$(document).ready(function(){
			// does current browser support PJAX
	//		if ($.support.pjax) {
	//			$.pjax.defaults.timeout = 3000; // time in milliseconds
	//		}
		});
		
		$(function(){
			// pjax
		//	$(document).pjax("a:not(a[href$='PDF']):not(a[href$='pdf']):not(a[href$='doc']):not(a[href$='docx']):not(a[href~='#']):not(a[href$='+edit']):not(a[href$='+logout'])", '#main-view');
		});

		</script>
       	</head>
	<body onload="<?php echo $STARTSCRIPTS; ?>" >
		<?php echo $HEADER_CMS; ?>
		<div id="main-view">
			<?php

			if($GLOBALS['pageFullPath']!='/') {
				echo<<<MENUBAR
  <div id="leftNav" style="float:left">
    <div id="leftNavContent" class="active">
            $MENUBAR
            
</div>

</div>
MENUBAR;
			}
			?>

			<div id="side" style="float:left">
				<!--<div id="breadCrumb">
				<a href="">nitt.edu</a>&nbsp;&rarr;&nbsp;<a href="">about</a> 
				</div>
				-->
				<div id="contentcontainer">
					<?php $heading='';
					global $action,$pageId;
					if(getTitle($pageId,$action, $heading)) 
						echo "<h1 id='contentHeading'>{$heading}</h1>"; 
					?> 
					<?php echo $INFOSTRING; ?>
					<?php echo $WARNINGSTRING;?>
					<?php echo $ERRORSTRING; ?>
					<?php if(isset($WIDGETS[0])) echo $WIDGETS[0]; ?>
					<?php echo $CONTENT; ?>
				</div>
			</div>


		</div>
		<?php @include_once("$sourceFolder/$templateFolder/".TEMPLATE."/includes/footer.php");
		?>
		<!--<script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/scroll.js"></script>-->
		<script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/script.js"></script>
		<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-55334208-1', 'auto');
		ga('require', 'displayfeatures');
		ga('set', 'location', window.location.href);
		ga('send', 'pageview');

		</script>


<div id="actionbar" style="display:none">
  $ACTIONBARPAGE
  $ACTIONBARMODULE
  $FOOTER
</div>
	</body>

</html>
<?php
/*
$integritiop = ob_get_contents();
ob_end_clean();

//use Symfony\Component\DomCrawler\Crawler;
//$headers = apache_request_headers();
//if(array_key_exists('X-PJAX',$headers)) {
//	header('X-PJAX-URL:'.substr($_SERVER['REQUEST_URI'],0,-19));	
//        $crawler = new Crawler($integritiop);
//        $response_title = $crawler->filter('head > title');
//        $response_container = $crawler->filter('#main-view');
//        if ($response_container->count() != 0) {
//                $title = '';
//                // If a title-attribute exists
//                if ($response_title->count() != 0) {
//                        $title = '<title>' . $response_title->html() . '</title>';
//                }
//                // Set new content for the response
//                echo($title . $response_container->html());
//        }
//	
//	
//}
//else echo $integritiop;
echo $integritiop;
*/
?>
