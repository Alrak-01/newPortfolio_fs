$(document).ready(function(){
	$("#editAboutForm").on("submit", function(event){
		event.preventDefault();

		let param = new URLSearchParams(window.location.search);
		let about_id = param.get("about_id");

		if (about_id == null) {
			window.location.href = "about.php?idnotFound";
		}

		let formData = new FormData(this);
		formData.append("editAbout", "editAbout");
		formData.append("about_id", about_id);


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