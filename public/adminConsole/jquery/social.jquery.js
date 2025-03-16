$(document).ready(function(){
	$("#editSocialForm").on("submit", function(event){
		event.preventDefault();

		let formData = new FormData(this);
		formData.append("editSocial", "editSocial");

		$.ajax({
			url: "includes/social.inc.php",
			method : "POST",
			data : formData,
			dataType : "JSON",
			contentType : false,
			cache : false,
			processData : false,

			success : function(response){
				if (response.status == 0) {
					alert(response.message);
				}
				else if(response.status == 1){
					alert(response.message);
				}
			},
			error : function(){
				alert("Ajax request failed");
			}

		});
	})
});