<?php
ob_start();
session_start();
setlocale(LC_ALL, 'da_DK.ISO8859-1');
//error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR); // sætter php til kun at angive error's og ikke notice
require_once('DBcon/dbconn.php');
// ========================== KgPager =============================
	include_once('class/kgPager.php');
// ================================================================
//unset($_SESSION['admin']);
// ===================== Global variables =========================
if(isset($_GET['p']))
{
	$side = mysqli_real_escape_string($db_conn,strip_tags($_GET['p']));
}
else
{
	$side = 'Forside';
}
if(isset($_GET['a']))
{
	$admin = mysqli_real_escape_string($db_conn,strip_tags($_GET['a']));
}
// ================================================================
?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">

    <title>TEC &raquo; Pratik Center : <?php echo $side; ?></title>
    <link href="img/icon.ico" rel="shortcut icon">
    <link href="style.css" rel="stylesheet">
    <link href="css/nav-style.css" rel="stylesheet">
    <?php if($side == "Forum"){ echo'<link href="css/forum_layout.css" rel="stylesheet">';}?>
    <!-- validator start -->
    <script type="text/javascript" src="js/validator.js"></script>
    <!-- validator slut -->
    <!-- jq sutff -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <!-- jq sutff -->
    
    <!-- Froala Editor sutff -->
    <link href="froala_editor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="froala_editor/css/froala_editor.min.css" rel="stylesheet" type="text/css">
    <script src="froala_editor/js/froala_editor.min.js"></script>
    <!--[if lt IE 9]>
    // Include IE8 JS.
    <script src="../js/froala_editor_ie8.min.js"></script>
	<![endif]-->
    
	<script src="froala_editor/js/froala_editor.min.js"></script>
    <script src="froala_editor/js/plugins/tables.min.js"></script>
    <script src="froala_editor/js/plugins/colors.min.js"></script>
    <script src="froala_editor/js/plugins/fonts/fonts.min.js"></script>
    <script src="froala_editor/js/plugins/fonts/font_family.min.js"></script>
    <script src="froala_editor/js/plugins/fonts/font_size.min.js"></script>
    <script src="froala_editor/js/plugins/block_styles.min.js"></script>
    <script src="froala_editor/js/plugins/video.min.js"></script>
    <script src="froala_editor/js/libs/beautify/beautify-html.js"></script>
	<script src="froala_editor/js/froala_editor.min.js"></script>
    <script>
$(function()
{
	$('#traad').editable(
	{
		minHeight: 200,
		width: 750,
		borderColor: '#000000',
		language: 'da',
		imageUploadURL: 'upload.php',
		imagesLoadURL: '/uploads',
		inlineMode: false,

	})
});

$(function()
{
	$('#nyhed').editable(
	{
		minHeight: 200,
		width: 750,
		borderColor: '#000000',
		language: 'da',
		imageUploadURL: 'upload.php',
		imagesLoadURL: '/uploads',
		inlineMode: false,

	})
});

$(function()
{
	$('.traad').editable(
	{
		minHeight: 200,
		width: 626,
		borderColor: '#000000',
		language: 'da',
		imageUploadURL: 'upload.php',
		imagesLoadURL: '/uploads',
		inlineMode: false,

	})
});
	</script>   
    <!-- Froala Editor sutff -->
    <!-- Test area -->
    <!-- test slut -->
    </head>