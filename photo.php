<?php require_once($_SERVER['DOCUMENT_ROOT']."/include/housekeeping/global.php"); ?>
<!DOCTYPE html>
<html>

	<head>
<?php require_once(__ROOT__."/include/head.php"); ?>
<!--

http://api.flickr.com/services/feeds/photoset.gne?set=72157627037907075&nsid=16957224@N08&lang=en-us

-->
	</head>

	<body>

		<div id="mobile-photo" 
		data-role="page"<?php echo $uiPageStyle; ?>>

<?php require_once(__ROOT__."/include/content/photo-header.php"); ?>
<?php require_once(__ROOT__."/include/content/photo-body.php"); ?>
<?php require_once(__ROOT__."/include/content/generic-footer.php"); ?>

		</div><!-- // mobile-photo -->	

<?php require_once(__ROOT__."/include/js.php"); ?>

	</body>

</html>