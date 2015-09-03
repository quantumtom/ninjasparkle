<?php require_once($_SERVER['DOCUMENT_ROOT']."/include/housekeeping/global.php"); ?>
<!DOCTYPE html>
<html>

	<head>
<?php require_once(__ROOT__."/include/head.php"); ?>
	</head>

	<body>

		<div id="mobile-video" 
		data-role="page"<?php echo $uiPageStyle; ?>>

<?php require_once(__ROOT__."/include/content/feed-header.php"); ?>
<?php require_once(__ROOT__."/include/content/feed-body.php"); ?>
<?php require_once(__ROOT__."/include/content/generic-footer.php"); ?>

		</div><!-- // mobile-video -->	

<?php require_once(__ROOT__."/include/js.php"); ?>

	</body>

</html>