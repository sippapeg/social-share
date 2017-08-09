<?php
	$site_url = 'http://loweproferothailand.com/dev/app-facebook-login/social-share';
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>This is title page</title>
	<meta property="og:url"                content="<?php echo $site_url; ?>" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="This is Title" />
	<meta property="og:description"        content="This is Description" />
	<meta property="og:image"              content="<?php echo $site_url; ?>/share.jpg" />

	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@sippapeg" />
	<meta name="twitter:creator" content="@sippapeg" />
	<style>
		a{font-size: 3em;display: block;}
	</style>
	<script
	  src="http://code.jquery.com/jquery-1.12.4.js"
	  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
	  crossorigin="anonymous"></script>
</head>
<body>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '1697568480545366',
				xfbml      : true,
				version    : 'v2.10'
			});
			FB.AppEvents.logPageView();
		};
		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<a href="javascript:void(0);" onclick="share_fb();">facebook</a>
	<a href="javascript:void(0);" onclick="share_twitter();">twitter</a>
	<a href="javascript:void(0);" onclick="share_line();">line</a>
	<a href="javascript:void(0);" onclick="share_google();">google</a>
	<script>
		var url = '<?php echo $site_url; ?>';
		function share_fb(){
			FB.ui({
				app_id:'1697568480545366',
				method: 'share',
				display: 'popup',
				href: url,
			}, function(response){});
		}
		function share_twitter(){
			window_open("https://twitter.com/intent/tweet?text=This is Title&url="+url+"");
		}
		function share_line(){
			window_open("https://lineit.line.me/share/ui?url=<?php echo $site_url; ?>");
		}
		function share_google(){
			window_open("https://plus.google.com/share?url=<?php echo $site_url; ?>");
		}
		function window_open(url){
			var left = ($(window).width()/2)-250;
			var top = ($(window).height()/2)-230;
			window.open(url, "", "toolbar=yes,scrollbars=yes,resizable=yes,top="+top+",left="+left+",width=500,height=460");
		}
	</script>
</body>
</html>