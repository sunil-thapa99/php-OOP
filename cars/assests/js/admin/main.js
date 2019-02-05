// Open form on button is clicked
function openAddForm() {
	var getAddForm = document.getElementById('addCareer');
	if(getAddForm.style.display == "none"){
		getAddForm.style.display = "block";
	}
	else{
		getAddForm.style.display = "none";
	}
}
