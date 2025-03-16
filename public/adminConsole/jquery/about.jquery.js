$(document).ready(function(){
	$("#editAboutForm").on("submit", function(event){
		event.preventDefault();

		let formData = new FormData(this);
		formData.append("editAbout", "editAbout");

		$.ajax({
			url : "includes/about.inc.php",
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