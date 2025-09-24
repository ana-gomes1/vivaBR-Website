const passwordIcons = document.querySelectorAll('.password-icon');
var confirm_password = document.getElementById("confirm_password");
let botao = document.getElementById("criar");

passwordIcons.forEach(icon => {
    icon.addEventListener('click', function () {
        const input = this.parentElement.querySelector('.form-control');
        input.type = input.type === 'password' ? 'text' : 'password';
        this.classList.toggle('fa-eye');
    });
});

$('#cep').blur(function () {
    const vl = this.value;
    $.get('https://viacep.com.br/ws/' + vl + '/json/', function (dados) {
        $('#rua').val(dados.logradouro);
        $('#bairro').val(dados.bairro);
        $('#cidade').val(dados.localidade);
        $('#estado').val(dados.uf);
    });
});

if (botao !== null){
botao.addEventListener("click", (event) => {
    let senha = document.getElementById("senha").value;
    if (senha != confirm_password.value){
        event.preventDefault();
        alert("As senhas não correspondem. Por favor, verifique.");
    } 
    else{
        document.getElementById("cadastroForm").addEventListener("submit", function(event) {
        event.preventDefault();
            let login = document.getElementById("login").value;
            let email = document.getElementById("email").value;
            let cpf = document.getElementById('cpf').value;

		    if (!validaCPF(cpf)) {
			    event.preventDefault();
			    alert('CPF inválido. Verifique o número digitado.');
			    document.getElementById("cpf").focus();
		    } 
            
            else{
                 if (login && senha && email) {
                var usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];
                
                usuarios.push({ 
                    login: login, 
                    senha: senha, 
                    email: email 
                });
                
                localStorage.setItem("usuarios", JSON.stringify(usuarios));
                
                window.scrollTo({ top: 0, behavior: 'smooth' });
                document.querySelector('.user-cadastrado').style.display = 'flex';
                
                setTimeout( function userCadastrado() {
                    window.location.href = "../trabalho-sitevivaBR nono/login.html"
                }, 3000);
                } 
            }    
        });
    };
});
};

function logarUsuario(event){
    const loginInput = document.querySelector('#login');
    const emailInput = document.querySelector('#email');
    const senhaInput = document.querySelector('#password');
    
    const usuarios = JSON.parse(localStorage.getItem('usuarios')) || [];

    const login = loginInput.value.trim();
    const email = emailInput.value.trim();
    const senha = senhaInput.value;

    const userValid = usuarios.find(user =>
        (login === user.login && email === user.email && senha === user.senha ));

        if (userValid) {
            let token = Math.random().toString(16).substring(2);
            localStorage.setItem('token',token);
            localStorage.setItem('userLogado', JSON.stringify(userValid));

            event.preventDefault();
            window.location.href = "../trabalho-sitevivaBR nono/quiz.html";
        } 
        
        else {
            document.querySelector('.erro').style.display = 'flex';
            event.preventDefault();
        }
};


function validaCPF(cpf) {
	cpf = cpf.replace(/\D+/g, '');
	if (cpf.length !== 11) return false;

	let soma = 0;
	let resto;
	if (/^(\d)\1{10}$/.test(cpf)) return false;

	for (let i = 1; i <= 9; i++) soma += parseInt(cpf.substring(i-1, i)) * (11 - i);
	resto = (soma * 10) % 11;
	if ((resto === 10) || (resto === 11)) resto = 0;
	if (resto !== parseInt(cpf.substring(9, 10))) return false;

	soma = 0;
	for (let i = 1; i <= 10; i++) soma += parseInt(cpf.substring(i-1, i)) * (12 - i);
	resto = (soma * 10) % 11;
	if ((resto === 10) || (resto === 11)) resto = 0;
	if (resto !== parseInt(cpf.substring(10, 11))) return false;

	return true;
}


$('#telefone').mask('(00) 0000-00000');
$('#cep').mask('00000-000');
$('#cpf').mask('000.000.000-00', {reverse: true});




