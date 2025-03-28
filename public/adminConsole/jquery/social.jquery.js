$(document).ready(function(){
	
	// PULL DATA FROM THE INCLUDE FILE
		// START
		function fetchAllData(){
			$.ajax({
				url : "includes/social.inc.php",
				method : "POST",
				data : {input : ""},
				dataType : "JSON",

				success : function(response){
					$("#displaySocial").html(response.data);
				},
				error : function(){
					alert("An error occurred");
				}
			});
		}

		fetchAllData();
		// END

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
	});

		// ADD AND CLOSE SOCIAL FORM
		let skillBtn = $("#editSocialBtn");
		let skillContainer = $("#editSocialContainer");
		skillBtn.on("click", function(){
			skillContainer.hasClass("hidden") ? skillBtn.html("Close Form") : skillBtn.html("Open Form");
			setTimeout(function(){
				skillContainer.toggleClass("hidden");
			}, 300)
		})
});