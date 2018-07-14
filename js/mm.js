function AddCad() {

	var nome = document.getElementById('nome');
	var email = document.getElementById('email');
	var senha = document.getElementById('senha');
	var confirmasenha = document.getElementById('confirmasenha');
	var telefone = document.getElementById('telefone');
	var celular = document.getElementById('celular');

	if (nome.value == "") {
		var texto = "<div class='alert alert-danger alert-custom' role='alert'>" + "*O nome precisa ser preenchido";
		var erronome = document.getElementById('erronome');
		erronome.innerHTML = texto;
		//alert ("O nome precisa ser preenchido");
	}
	else if (email.value == ""){
		var texto = "<div class='alert alert-danger alert-custom' role='alert'>" + "*O e-mail precisa ser preenchido";
		var erroemail = document.getElementById('erroemail');
		erroemail.innerHTML = texto;
	}
	else if (senha.value == ""){
		var texto = "<div class='alert alert-danger alert-custom' role='alert'>" + "*A senha precisa ser preenchido";
		var errosenha = document.getElementById('errosenha');
		errosenha.innerHTML = texto;
	}
	else if (confirmasenha.value == ""){
		var texto = "<div class='alert alert-danger alert-custom' role='alert'>" + "*A confirmação de senha precisa ser preenchido";
		var erroconfirma = document.getElementById('erroconfirma');
		erronome.innerHTML = texto;
	}
	else if (senha.value != confirmasenha.value) {
		var texto = "<div class='alert alert-danger alert-custom' role='alert'>" + "*As senhas não são compativeis";
		var erronome = document.getElementById('erronome');
		erronome.innerHTML = texto;

		//alert("As senhas estão diferentes, por favor digite novamente");
	}
	/*else {
	var dados = {"nome":nome.value,"email":email.value,"senha":senha.value,
	"confirmasenha":confirmasenha.value,"telefone":telefone.value,"celular":celular.value
				};


		$.ajax({
			method:"post",
			dataType: 'json',
			url:"cadastra.php",
			async: true,
			data: dados,
        	success: function(response){
            location.reload();
        	}
		})*/
};


function Login() {
var email = document.getElementById('email');
var senha = document.getElementById('senha');
var lembrar = document.getElementById('lembrar');

var dados = {"email":email.value,"senha":senha.value,"lembrar":lembrar.value};

};

function HabilitaBotao (){

}