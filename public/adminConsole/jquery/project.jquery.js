$(document).ready(function(){
	$("#addProjectForm").on("submit", function(event){
		event.preventDefault();

		let formData = new FormData(this);
		formData.append("addProject", "addProject");

		$.ajax({
			url : "includes/project.inc.php",
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
					window.location.href = "project.php?addsuccess";
				}
			},
			error : function(){
				alert(response.message);
			}
		});
	});
	// ADD PROJECT ENDS

	// 	EDIT PROJECT STARTS
	$("#editProjectForm").on("submit", function(event){
		event.preventDefault();

		let param = new URLSearchParams(window.location.search);
		let project_id = param.get("id");

		if (project_id == null) {
			window.location.href = "project.php?id=nf";
		}

		let formData = new FormData(this);
		formData.append("editProject", "editProject");
		formData.append("project_id", project_id);

		$.ajax({
			url : "includes/project.inc.php",
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
					window.location.href = "project.php?editsuccess";
				}
			},
			error : function(){
				alert("Ajax request failed");
			}
		});
	})
});