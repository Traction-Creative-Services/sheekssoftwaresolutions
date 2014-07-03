<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=153687171440523";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script language="javascript">
$(document).ready(function() {
	$(".social").mouseover(function(e) {
		var media = $(this).attr("site");
		var src = "packages/core/img/social/" + media + "-dark.gif";
		$(this).attr("src", src);
	})
	$(".social").mouseout(function(e) {
		var media = $(this).attr("site");
		var src = "packages/core/img/social/" + media + "-light.gif";
		$(this).attr("src", src);
	});
});
</script>
<div class="row">
	<div class="col12">
            <div class="social-wrap">
		<a href="https://plus.google.com/116897473038646008516/posts"><img class="social" src="packages/core/img/social/gplus-light.gif" site="gplus"></a>
		<a href="http://www.facebook.com/sheekssoftwaresolutions"><img class="social" src="packages/core/img/social/facebook-light.gif" site="facebook"></a>
		<a href="https://twitter.com/SheeksSolutions"><img class="social" src="packages/core/img/social/twitter-light.gif" site="twitter"></a>
	</div>
</div>
	<div class="row-end"></div>
</div>