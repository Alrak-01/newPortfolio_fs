$(document).ready(function(){

	// DISPLAY PROJECT STARTS...
	function fetchAllData(){
		$.ajax({
			url : "includes/project.inc.php",
			method : "POST", 
			data : {input : ""}, 
			dataType : "JSON",

			success : function(response){
				let param = new URLSearchParams(window.location.search);
				let id = param.get("id");
				let content = '';

				if (id && id != "") {
					response.data.forEach(function(project){
						if (id == project.id) {
							$("#stack").val(project.stack);
							$("#title").val(project.title);
							$("#liveLink").val(project.live_link);
							$("#githubLink").val(project.github_link);
							$("#date").val(project.date);
						}
					})
					$("#stack").val();
				}
				else{
					if (response.data && response.data.length > 0) {
					$("#total-project").html(response.data.length);
	                response.data.forEach(function(project) {
	                content += `<div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
			                	<div class="flex items-center justify-between pb-5">
			                    <h3>${project.title}</h3>
			                   <span id="menu" class="">
			                        <a href="#" class="project-delete" data-id="${project.id}"><i class="text-xs fa-solid fa-trash text-red-600"></i></a>
			                        <a href="editProject.php?id=${project.id}"><i class="text-xs fa-solid fa-pen-to-square text-blue-600"></i></a>
			                    </span>
				                </div>
				                <span class="text-center">${project.stack}</span>
				                <span class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">
				                ${project.date}
				                </span>
				            </div>`;
                });
            } else {
                content = "No Project Found...";
            }
            // DISPLAY THE LOOPED DATA INTO THE HTML ELEMENT
            $("#displayProject").html(content);
				}
		
			},
			error : function(){
				alert("Ajax error ocurred...");
			}
		});
	}

		fetchAllData();
	// DISPLAY PROJECT ENDS...

		// ADD PROJECT STARTS...
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
					fetchAllData();
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
	});

	$(document).on("click", ".project-delete", function(e){
		e.preventDefault();

		let projectId = $(this).data("id");

		if (confirm("Are you sure you want to delete this Project?")) {
			$.ajax({
				url : "includes/project.inc.php",
				method : "POST",
				dataType : "JSON",
				data : {
					delete_project : true,
					project_id : projectId
				},
				success : function(response){
					if (response.status == 0) {
						alert(response.message);
					}
					else if(response.status == 1){
						console.log(response.message);
						location.reload();
					}
				},
				error : function(){
					alert("Ajax Request Failed");
				}

			});
		}
	});
});