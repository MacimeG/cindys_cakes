
$("input[data-preview]").change(function() {
	var $input = $(this);
	var fileReader = new FileReader();
	fileReader.readAsDataURL(this.files[0]);
	fileReader.onload = function(fileEvent) {
		$($input.data('preview')).attr('src', fileEvent.target.result);
	};
    console.log('kiki');
});