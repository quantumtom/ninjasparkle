<script type="application/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2716088-17']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

	var oPage = $.mobile.path.parseUrl(location);
	var thePageName = "";
	var thePageName = oPage.pathname.slice(1);

//	console.log("location.hash is " + location.hash);

	if ((oPage.pathname == undefined) || (oPage.pathname == "/")) thePageName = "video";

	console.log("Before");
	$("#" + thePageName + "-link").addClass("ui-btn-active");
	console.log("After");

</script>