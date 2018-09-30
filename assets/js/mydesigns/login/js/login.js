function loginFailed() {
	document.getElementById('username').style.outline = '1px solid red';
	document.getElementById('password').style.outline = '1px solid red';

	var para = document.createElement("h4");
	var node = document.createTextNode("Wrong input: username or password.");
	para.appendChild(node);
	para.style.color = 'red';
	para.id = 'loginErrorMsg';

	var element = document.getElementById("login");
	element.appendChild(para);

	/////

	// document.getElementById('loginErrorMsg').remove();
}