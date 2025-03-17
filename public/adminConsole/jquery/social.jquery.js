$(document).ready(function(){
	$("#editSocialForm").on("submit", function(event){
		event.preventDefault();

		let param = new URLSearchParams(window.location.search);
		let social_id = param.get("id");

		if (social_id == null) {
			window.location.href = "social.php?id=nf";
		}

		let formData = new FormData(this);
		formData.append("editSocial", "editSocial");
		formData.append("social_id", social_id);

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
					window.location.href = "social.php?success";
				}
			},
			error : function(){
				alert("Ajax request failed");
			}

		});
	})
});