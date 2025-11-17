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

const form = document.getElementById("cadastroForm");

if (form !== null) {
    form.addEventListener("submit", (event) => {
        event.preventDefault();

        const senha = document.getElementById("senha").value;
        const confirmSenha = document.getElementById("confirm_password").value;
        const cpf = document.getElementById("cpf").value;

        if (senha !== confirmSenha) {
            alert("As senhas não correspondem. Por favor, verifique.");
            return;
        }

        if (!validaCPF(cpf)) {
            alert("CPF inválido. Verifique o número digitado.");
            document.getElementById("cpf").focus();
            return;
        }

        form.submit();
    });
}

const formUser = document.getElementById("cadastroUserForm");

if (formUser !== null) {
    formUser.addEventListener("submit", (event) => {
        event.preventDefault();

        const senha = document.getElementById("senha").value;
        const confirmSenha = document.getElementById("confirm_password").value;
        const cpf = document.getElementById("cpf").value;

        if (senha !== confirmSenha) {
            alert("As senhas não correspondem. Por favor, verifique.");
            return;
        }

        if (!validaCPF(cpf)) {
            alert("CPF inválido. Verifique o número digitado.");
            document.getElementById("cpf").focus();
            return;
        }

        formUser.submit();
        window.location.href = "home_adm.php";
    });
}

const codigo = document.getElementById("cod");

function gerarCodigo(tamanho) {
  const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  let resultado = '';
  const caracteresLength = caracteres.length;
  for (let i = 0; i < tamanho; i++) {
    resultado += caracteres.charAt(Math.floor(Math.random() * caracteresLength));
  }
  return resultado;
}

codigo.value = gerarCodigo(10);


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


$('#telefone').mask('(00) 00000-0000');
$('#cep').mask('00000-000');
$('#cpf').mask('000.000.000-00', {reverse: true});

document.addEventListener("DOMContentLoaded", () => {
        const msgSuccess = document.getElementById("msgSuccess");
        if (msgSuccess) {
            setTimeout(() => msgSuccess.remove(), 5000);
        }
    });

