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
					$("#skillForm")[0].reset();
				}
			},
			error: function () {
		        alert("AJAX request failed");
		      }
		});
	});

	$(document).ready(function(){
		$("#editSkillForm").on("submit", function(event){
			event.preventDefault();

			let param = new URLSearchParams(window.location.search);
			let skill_id = param.get("skill_id");

			if (skill_id == null) {
				window.location.href = "skill.php?idnotfound";
			}

			let formData = new FormData(this);
			formData.append("editSkill", "editSkill");
			formData.append("skill_id", skill_id);

			$.ajax({
				url : "includes/skill.inc.php",
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
					else if(response.status == 1) {
						alert(response.message);
						window.location.href = "skill.php?update=success";
					}
				},
				error : function(){
					alert("Ajax request failed");
				}
			});
		});
	});
});
