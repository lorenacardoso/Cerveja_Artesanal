function mask_cep(){
	var n_cep = document.getElementById("txtCEP").value.length;
	if(n_cep == 5){
		document.getElementById("txtCEP").value = document.getElementById("txtCEP").value + "-";
	}
}

function mask_phone(){
	var n_char = document.getElementById("txtPhone").value.length;
	if (n_char == 2) {
		document.getElementById("txtPhone").value = "(" + document.getElementById("txtPhone").value + ") 9";
	}else if (n_char == 10) {
		document.getElementById("txtPhone").value = document.getElementById("txtPhone").value + "-";
	}
}

function mask_name(){
	var n_nome = document.getElementById("txtNome").value.length;
	if(n_nome < 3){
		alert("NOME INVÁLIDO")
		return false;
	}
}