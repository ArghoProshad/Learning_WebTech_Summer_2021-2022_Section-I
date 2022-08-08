function validate(){

	
	
	var id=document.getElementById('id').value;
	var password=document.getElementById('password').value;
	
	//document.write('hbsdsabd');

	 if(id == ""){
		document.getElementById('a').innerHTML = "id can't left empty";
		return false;
	}else if(password == ""){
		document.getElementById('r').innerHTML = "password can't left empty";
		return false;
	}

}
