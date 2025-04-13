$(document).ready(function(){

	function fetchAllData(){
		$.ajax({
			url : "includes/about.inc.php",
			method : "POST",
			data : {input : ""},
			dataType : "JSON",

			success : function(response){
				let param = new URLSearchParams(window.location.search);
				let id = param.get("about_id");
				let data = response.data;
				 let content = "";
				 if (id && id != "") {
				 	if (id == data.id) {
				 		$("#text").html(data.about);
				 	}
				 	else{
				 		window.location.href = "about.php?id=nf";
				 	}
				 }	
				 else{

				 	 if (data && data.about) {
				 	content = `<p>${data.about}</p>`;
				 }
				 else{
				 	content = "No data found...";
				 }

				$("#displayAbout").html(content);

				 }

				
			},
			error : function(){
				alert("Ajax error ocurred...");
			}
		});
	}

		fetchAllData();


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
					window.location.href = "about.php?success";
				}
			},

			error : function(){
				alert("Ajax request failed");
			}
		});
	})
});