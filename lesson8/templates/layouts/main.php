<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Интернет-магазин одежды">
	<meta name="robots" content="noindex, nofollow">
	<title>Интернет-магазин</title>
	<link rel="stylesheet" href="/css/slick-theme.css">
	<link rel="stylesheet" href="/css/slick.css">
	<link rel="stylesheet" href="/css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i" rel="stylesheet">
	<link rel="shortcut icon" href="/img/favicon.png" type="image/png">
	<meta name="viewport" content="width=device-width">
</head>
<body>

	<?=$header?>

	<?=$content?>

	<?=$footer?>

<!--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>-->

<script src="/js/lib/jquery-3.3.1.min.js"></script>
<script src="/js/lib/slick.min.js"></script>
<script src="/js/lib/vue.js"></script>
<script src="/js/components/CatalogComp.js"></script>
<script src="/js/components/CartComp.js"></script>	
<script src="/js/components/SearchComp.js"></script>
<script src="/js/main.js"></script>
<script>
	$(document).ready(() => {
		$('.banner-slick').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			dots: true,
			dotsClass: 'slick-dots',
			arrows: false 		
		});
	});	
</script>


</body>
</html>