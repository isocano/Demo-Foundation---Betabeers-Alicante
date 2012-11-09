<?php $base_url = $this->config->item('base_url'); ?>

	<footer class="row" style="margin-bottom: 2em;">
		<hr/>
		<span>Saldum Labs &copy; 2012</span>
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
			        html.push('<li style="display:inline-block;"><h3>' + shot.title + '</h3>');
			        html.push('<h4>de ' + shot.player.name + '</h4><a href="' + shot.url + '">');
			        html.push('<img src="' + shot.image_url + '" ');
			        html.push('alt="' + shot.title + '"></a></li>');
			    });
			
			    $('#shotsByList').html(html.join(''));
			}, {page: 1, per_page: 20});
		});
	</script>
</body>
</html>