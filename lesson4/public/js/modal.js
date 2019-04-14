(function () {
	
	var modalElements = document.querySelectorAll('[modal-win]');
	var $overlay  = document.querySelector('.overlay');
	var $modalImg = document.querySelector('.modal-img');
	var $modalclose = document.querySelector('.modal-close');

	modalElements.forEach(function (el) {
	  el.addEventListener('click', function(e) {
	    var imgSrc = e.currentTarget.getAttribute('data-img');
	    $overlay.style.display = 'flex';
	    $modalImg.setAttribute('src', imgSrc);
	  });
	});

	$modalclose.addEventListener('click', function() {
	  $overlay.style.display = 'none';
	});

})();
