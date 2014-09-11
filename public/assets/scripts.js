$(document).ready(function() {
	// Form Call
	$('.form .buttons input[type="submit"]').on('click', function(e) {
		e.preventDefault();
		showLoading();
		var warrior = $('.form .warrior select').find(':selected').val();
		var item = $('.form .item select').find(':selected').val();
		$.getJSON('/api/'+warrior+'/'+item)
		.always(function () {
			hideLoading();
		})
		.done(function(data) {
			$('.response').html(data.response);
		})
		.fail(function() {
			$('.response').html('Error de Conexión');
		});
	});

	// Active First Window
	$('#header .options ul li:first-child a').click();


	// Loading Fadding-in
	function showLoading() {
		$('.loading').addClass('active');
		$('.loading .loading-dialog').animate({top: '20%'}, 500);
	}

	// Loading Fadding-out
	function hideLoading() {
		$('.loading .loading-dialog').animate({top: '-100%'}, 500, function() {
			$('.loading').removeClass('active');
		});
	}
});