
	jQuery(document).ready(function($) {

		    //$('#nav-main').scrollspy()
		    
		    // Localscrolling 
    		$('#nav-main, .brand').localScroll();
     		$('#news, .container').localScroll();




	});
	
	
var base_url = window.location.origin;

function register(){
	$.ajax({
		type: 'GET',
		url: base_url + '/meualuno/requisitions/email.php?email='+$('#email').val(),
		dataType: 'json',
		success: function(json){
			if(json.erro == 'N'){
				alert("Sucesso!");
			}
			if(json.erro == 'S'){
				alert(json.erro);
			}
		},
		error: function() {
			alert(json.erro);
		}
	});
}