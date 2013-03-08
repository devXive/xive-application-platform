<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<jdoc:include type="head" />
<link href="themes/mobi/gallery/photoswipe.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="themes/mobi/gallery/lib/klass.min.js"></script>
<script type="text/javascript" src="themes/mobi/gallery/code.photoswipe-3.0.4.min.js"></script>

    <script type="text/javascript">

		(function(window, PhotoSwipe){

			document.addEventListener('DOMContentLoaded', function(){

				var
					options = {},
					instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );

			}, false);


		}(window, window.Code.PhotoSwipe));

	</script>

</head>
<body>
<ul id="Gallery" class="gallery">
<jdoc:include type="component" name="main" />
</ul>
</body>
</html>