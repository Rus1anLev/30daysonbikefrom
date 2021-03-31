$(document).ready(function(){

	$("form#new_member").submit(function(e){
		e.preventDefault()

		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data){
				json = JSON.parse(data)
				console.log(json)
				swal(json.headline, json.text, json.status);

				if (json.status === "success") {
					// $(this).reset()
					$('html, body').animate({scrollTop: $('#countersMap').offset().top }, 500, 'swing');
				}
			}
		});

		
	})
	
})