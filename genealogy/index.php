<!DOCTYPE html>
<?php
$path = "";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
?>
<html>
<head>
	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta NAME="Title" CONTENT="Family Explorer">
	<meta NAME="Author" CONTENT="Russell Bert Lee">
	<meta NAME="Subject" CONTENT="Family">
	<meta NAME="Description" CONTENT="Personal ancestry">
	<meta NAME="Keywords" CONTENT="ancestors ancestry aunt birth blood brethren brother brood child children clan class descendant descent dynasty events explorer extraction family father folk forebears forefather genealogy generations genre grandfather grandmother group house household husband images in-law individual inheritance issue kin kind kindred line lineage links member mother ménage network offspring parent parentage paternity patrimony pedigree people personal progenitor progeny properties race relation relationship relative sibling sister spouse strain subdivision system thumbnails tribe uncle wife">
	<meta NAME="Language" CONTENT="us">
	<meta NAME="Designer" CONTENT="Russell Lee">
	<meta NAME="Publisher" CONTENT="Family Explorer LLC.">
	<!-- cascading stylesheet and other link references -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/family.css">
	<link rel="stylesheet" type="text/css" href="css/template.css">
	<link rel="stylesheet" type="text/css" href="css/popup.css">
	<!--<link rel="stylesheet" type="text/css" href="css/utilities.css">
	<link rel="stylesheet" type="text/css" href="css/popup.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />-->
	<!-- script page references -->
	<script src="../_common/js/jquery-1.8.3.min.js"></script>
	<script src="../_common/js/bootstrap-select.min.js"></script>
	<script src="../_common/js/image-picker.js"></script>
	<script src="js/landing.js"></script>
	<script src="../_common/js/popup.js"></script>
	<script src="js/family.js"></script>
	<!-- page title -->
	<title>Family Explorer</title>
</head>
<body style='font-family: arial'>
<header class=menu>
<?php include($path."includes/elements/header.php"); ?>
</header>
<main class=content id=main>
<?php include($path."includes/elements/login.php"); ?>
</main>
<footer class=foot>
<?php include($path."includes/elements/footer.php"); ?>
</footer>

<section><?php
include("includes/elements/popup.php");
?></section>
<input type=hidden id=proxyid value="" />
</body>
</html>
<script language='JavaScript'>

</script>
