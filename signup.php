<?php require_once($_SERVER['DOCUMENT_ROOT']."/include/housekeeping/global.php"); ?>
<!DOCTYPE html>
<html>

	<head>
<?php require_once(__ROOT__."/include/head.php"); ?>
	</head>

	<body>

		<div id="mobile-signup" 
		data-role="page" <?php echo $uiPageStyle; ?>>

<?php require_once(__ROOT__."/include/content/signup-header.php"); ?>
<?php require_once(__ROOT__."/include/content/signup-body.php"); ?>
<?php require_once(__ROOT__."/include/content/generic-footer.php"); ?>

		</div><!-- // mobile-signup -->	

<?php require_once(__ROOT__."/include/js.php"); ?>

	</body>

</html>