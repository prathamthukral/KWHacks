function dataFunction(){
	console.clear()
	name = document.getElementById('fullName').value
	console.log("Name: "+name)
	document.getElementById('fullName').value='';

	age = document.getElementById('age').value
	console.log("Age: "+age)
	document.getElementById('age').value='';

	gender = document.getElementById('gender').value
	console.log("Gender: "+gender)
	document.getElementById('gender').value='';

	weight = document.getElementById('weight').value
	console.log("Weight: "+weight)
	document.getElementById('weight').value='';

	height = document.getElementById('height').value
	console.log("Height: "+height)
	document.getElementById('height').value='';

	birthplace = document.getElementById('birthPlace').value
	console.log("Birthplace: "+birthplace)
	document.getElementById('birthPlace').value='';

	immun = document.getElementById('immunization').value
	console.log("Immunization: "+immun)
	document.getElementById('immunization').value='';

	allerg = document.getElementById('allergies').value
	console.log("Allergies: "+allerg)
	document.getElementById('allergies').value='';

	symp = document.getElementById('problems').value
	console.log("Problems: "+symp)
	document.getElementById('problems').value='';
}

function readURL(input) {
	if (input.files && input.files[0]) {
	    var reader = new FileReader();

	    reader.onload = function (e) {
	        $('#preview')
	            .attr('src', e.target.result)
	            .width(400)
	            .height(auto);
	    };

	    reader.readAsDataURL(input.files[0]);
	}
}