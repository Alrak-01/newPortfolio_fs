$(document).ready(function () {
	// PULL DATA FROM THE INCLUDE FILE
		// START
		function fetchAllData(){
			$.ajax({
				url : "includes/skill.inc.php",
				method : "POST",
				data : {input : ""},
				dataType : "JSON",

				success : function(response){
					let content = "";
					let param = new URLSearchParams(window.location.search);
					let id = param.get("skill_id");
					let found = false;

					if (id && id != "") {
						response.data.forEach(function(skill){
							if (skill.id == id) {
								$("#name").val(skill.name);
								$("#experience").val(skill.experience);
								if (skill.type == 1) {
								$("#type").html(
									`<option value="languages">Languages</option>
                                    <option value="frameworks">Frameworks</option>
                                    <option value="others">Others</option>`
									);
								}
								else if(skill.type == 2) {
									$("#type").html(
									`<option value="frameworks">Frameworks</option>
									<option value="languages">Languages</option>
                                    <option value="others">Others</option>`
									);
								}
								else if(skill.type == 3) {
									$("#type").html(
                                    `<option value="others">Others</option>
									<option value="frameworks">Frameworks</option>
									<option value="languages">Languages</option>`
									);
								}

								found = true;
							}
						});
						if (!found){
								window.location.href = "skill.php?id=nf";
							}
					}
				else{
						if (response.data && response.data.length > 0) {
							$("#total-skill").html(response.data.length);
						response.data.forEach(function(skill) {
							content += `
									<li class="text-[#3792a5] font-bold w-full">
		                                ${skill.name} 
		                                <span>${skill.experience} years</span>
		                                <span class="pl-3 space-x-2">
		                                    <a href="#" data-id="${skill.id}" class="delete-skill"><i class="fa-solid fa-trash text-red-600"></i></a>
		                                    <a href="editSkill.php?skill_id=${skill.id}"><i class="fa-solid fa-pen-to-square text-blue-600"></i></a>
		                                </span>
		                            </li> 
							`;
					});
					}
					else {
						content = "No skill Found...";

					}
					$("#displaySkill").html(content);
				}
					
					
				},
				error : function(){
					alert("An error occurred");
				}
			});
		}

		fetchAllData(); 
		// END

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
					fetchAllData();
					// TO RELOAD THE DISPLAYED DATA AFTER ADDING NEW SKILL
					$("#skillForm")[0].reset();
				}
			},
			error: function () {
		        alert("AJAX request failed");
		      }
		});
	});

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


	$(document).on("click", ".delete-skill", function (e){
    e.preventDefault();

    let skillId = $(this).data("id");

    if (confirm("Are you sure you want to delete this skill?")) {
        $.ajax({
            url: "includes/skill.inc.php",
            method: "POST",
            dataType: "json",
            data: {
                delete_skill: true,
                skill_id: skillId
            },
            success: function (response) {
                if (response.status == 1) {
                    console.log(response.message);
                    location.reload(); 
                } else {
                    alert(response.message);
                }
            },
            error: function () {
                alert("Something went wrong!");
            }
        });
    }
});


	// ADD AND CLOSE SKILL FORM
		let skillBtn = $("#addSkillBtn");
		let skillContainer = $("#addSkillContainer");
		skillBtn.on("click", function(){
			skillContainer.hasClass("hidden") ? skillBtn.html("Close Form") : skillBtn.html("Open Form");
			setTimeout(function(){
				skillContainer.toggleClass("hidden");
			}, 300)
		})
		
});
