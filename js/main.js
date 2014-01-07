// Admin scripts
$(document).ready(function () {
	$('#admin_login').validate();
	$('#category_create').validate(); 
	$('#category_modify').validate(); 

	 $(".carefulDelete").click(function() {
        if(confirm("Confirm to Delete?")){
            return true;
        }else{

            return false;
        }
    });
});

 