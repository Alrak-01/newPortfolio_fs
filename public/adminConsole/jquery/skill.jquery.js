$(document).ready(function () {
	$("#skillForm").on('submit', function(e) {
		e.preventDefault();

		let formData = new FormData(this);
		formData.append("addSkill", "addSkill");

		$.ajax({
		   url : "includes/skill.inc.php",
		   method : "POST",
	       data : formData,
	       dataType : "JSON",
	       contentType : false,
	       cache : false,
	       processData : false,

			success: function(response){
				if (response.status == 0) {
					alert(response.message);
				}
				else if (response.status == 1) {
					alert(response.message);
				}
			},
			error: function () {
		        alert("AJAX request failed");
		      }
		});
	});
});
