<?php require_once($_SERVER['DOCUMENT_ROOT']."/include/housekeeping/global.php"); ?>
<!DOCTYPE html>
<html>

	<head>
<?php require_once(__ROOT__."/include/head.php"); ?>
	</head>

	<body>

		<div id="mobile-video" 
		data-fullscreen="true" 
		data-role="page" <?php echo $uiPageStyle; ?>>

<?php require_once(__ROOT__."/include/content/video-header.php"); ?>
			<div data-role="content"<?php echo $uiContentStyle ?>>
				<div class="video-container">
					<video 
					controls="true" 
					autoplay="autoplay" 
					preload="auto" 
					poster="http://s3.socktan.com/media/vid/roll/vsp/2011-07-09/vsp-025-poster.jpg" 
					width="320" 
					height="180" 
					src="http://s3.socktan.com/media/vid/roll/vsp/2011-07-09/vsp-025-Desktop.m4v">
						<source src="http://s3.socktan.com/media/vid/roll/vsp/2011-07-09/vsp-025-iPhone.m4v" type="video/m4v" />
						<source src="http://s3.socktan.com/media/vid/roll/vsp/2011-07-09/vsp-025-iPhone-cell.3gp" type="video/3gp" />
						<source src="http://s3.socktan.com/media/vid/roll/vsp/2011-07-09/vsp-025-Desktop.m4v" type="video/m4v" />
						<p>Your browser does not support the video tag.</p>
					</video>
				</div><!-- // video-container -->
			</div><!-- // content -->
		</div><!-- // mobile-video -->

<?php require_once(__ROOT__."/include/js.php"); ?>

	</body>

</html>