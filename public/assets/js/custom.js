(function($){
	$(document).ready(function(){
		// Delete Action Control
		$(document).on('click',"#delete_data",function(e){
			// e.preventDefault();
			let confirm = confirm("Are you sure ?");
			if(confirm){
				return true;
			}else{
				return false;
			}
		});

	});


})(jQuery)