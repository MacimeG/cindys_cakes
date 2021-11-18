// $ = DocumentQuerySelector 
// change et un ecouteur d'évenement.
$("input[data-preview]").change(function() {
	var $input = $(this);
	var fileReader = new FileReader();
	fileReader.readAsDataURL(this.files[0]);
	fileReader.onload = function(fileEvent) {
		$($input.data('preview')).attr('src', fileEvent.target.result);
	};
    console.log('kiki');
});

const DELETE = document.querySelector('.delete');

DELETE.addEventListener('click', function(){
	alert("êtes vous sur de vouloir supprimé cette élement?");
})
































// document.querySelector("input[data-preview]").addEventListener('change', (e) =>{
// 	var $input = console.log(this.files);
// 	var fileReader = new FileReader();
// 	fileReader.readAsDataURL(this.files[0]);
// 	fileReader.onload = function(fileEvent) {
// 	document.querySelector($input.data('preview')).setAttribute('src', fileEvent.target.result);
// 	};
// })

