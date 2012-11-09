<?php $base_url = $this->config->item('base_url'); ?>

	<footer class="row" style="margin-bottom: 2em;">
		<hr/>
		<div class="six columns">
			<span>Saldum Labs &copy; 2012</span>
		</div>
		<div class="six columns">
			<div class="nav_right align_right">
				<a class="fc-webicon twitter large" href="twitter.com/isocano">Twitter</a>
				<a class="fc-webicon tumblr large" href="isocano.com">Tumblr</a>
				<a class="fc-webicon linkedin large" href="http://es.linkedin.com/in/ignaciosorianocano">LinkedIn</a>
				<a class="fc-webicon github large" href="https://github.com/isocano">Github</a>
				<a class="fc-webicon facebook large" href="https://www.facebook.com/inaki.sorianocano">Facebook</a>
			</div>
		</div>
	</footer>

	<!-- Included JS Files (Compressed) -->
	<script src="<?php echo $base_url; ?>assets/frameworks/foundation/javascripts/jquery.js"></script>
	<script src="<?php echo $base_url; ?>assets/frameworks/foundation/javascripts/foundation.min.js"></script>
	
	<!-- Included jribbble dile -->
	<script src="<?php echo $base_url; ?>assets/js/jribbble/jquery.jribbble-1.0.0.ugly.js"></script>

	<!-- Initialize JS Plugins -->
	<script src="<?php echo $base_url; ?>assets/frameworks/foundation/javascripts/app.js"></script>
	
	<script>
		$(document).ready(function() {
			$.jribbble.getShotsByList('popular', function (listDetails) {
			    var html = [];
			
			    $.each(listDetails.shots, function (i, shot) {
			        html.push('<li style="display:inline-block;"><a href="' + shot.player.url + '"><img class="avatar" src=" ' + shot.player.avatar_url + '"/></a><h3 class="BenchNine">' + shot.title + '</h3>');
			        html.push('<a href="' + shot.url + '">');
			        html.push('<img src="' + shot.image_url + '" ');
			        html.push('alt="' + shot.title + '"></a></li>');
			    });
			
			    $('#shotsByList').html(html.join(''));
			}, {page: 1, per_page: 20});
		});
	</script>
</body>
</html>