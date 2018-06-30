    
$(document).on('click', '.js-class', function(e){
		//alert(1);
		//тут можно написать валидатор
		e.preventDefault();
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: 'index.php',
				data: $( '#testform' ).serialize(),
				success: function (response) {
					console.log(response);
				},
				error: function (data) {
				}
			});
});
