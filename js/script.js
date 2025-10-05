const questions = [
    {
        question: "A cidade de Penedo foi uma colônia de qual origem?",
        answers:[
            { id: 1, text: "Italiana",correct:false},
            { id: 2, text: "Finlandesa",correct:true},
            { id: 3, text: "Norueguesa",correct:false},
            { id: 4, text: "Romana",correct:false},
        ],
    },
    {
        question: "Copacabana é conhecida principalmente por quais destas atrações? ",
        answers:[
            { id: 1, text: "Praias",correct:true},
            { id: 2, text: "Florestas",correct:false},
            { id: 3, text: "Parques temáticos",correct:false},
            { id: 4, text: "Zoológico",correct:false},
        ],
    },
    {
        question: "Quais destas cidades possui igrejas e paisagens naturais, e que faz parte de Goiás? ",
        answers:[
            { id: 1, text: "Chapada dos Guimarães",correct:false},
            { id: 2, text: "Pelourinho",correct:false},
            { id: 3, text: "Pirenópolis",correct:true},
            { id: 4, text: "Ouro Preto",correct:false},
        ],
    },
    {
        question: "Qual ponto turístico é conhecido como o Caribe brasileiro? ",
        answers:[
            { id: 1, text: "Fernando de Noronha",correct:false},
            { id: 2, text: "Copacabana",correct:false},
            { id: 3, text: "Maragogi",correct:true},
            { id: 4, text: "Jericoacoara",correct:false},
        ],
    },
    {
        question: "Como é conhecida a cidade de São Thomé das letras? ",
        answers:[
            { id: 1, text: "Cidade mágica",correct:true},
            { id: 2, text: "Cidade dos sonhos",correct:false},
            { id: 3, text: "Cidade da vida",correct:false},
            { id: 4, text: "Cidade das histórias",correct:false},
        ],
    },
    {
        question: "O que era o Pelourinho no contexto da origem do nome do bairro?",
        answers:[
            { id: 1, text: "Uma igreja histórica",correct:false},
            { id: 2, text: "Uma praça pública",correct:false},
            { id: 3, text: "Uma coluna de pedra para castigo público",correct:true},
            { id: 4, text: "Um monumento cultural",correct:false},
        ],
    },
    {
        question: "Qual evento famoso acontece anualmente na cidade de Gramado? ",
        answers:[
            { id: 1, text: "Festival de Parintins",correct:false},
            { id: 2, text: "Natal Luz",correct:true},
            { id: 3, text: "Carnaval de Gramado",correct:false},
            { id: 4, text: "São João do Sul",correct:false},
        ],
    },
    {
        question: "Qual é uma das principais atrações turísticas de Foz do Iguaçu? ",
        answers:[
            { id: 1, text: "Praia do Forte",correct:false},
            { id: 2, text: "Pão de Açúcar",correct:false},
            { id: 3, text: "Cataratas do Iguaçu",correct:true},
            { id: 4, text: "Pelourinho",correct:false},
        ],
    },
    {
        question: "Blumenau é conhecida por manter tradições de qual país europeu? ",
        answers:[
            { id: 1, text: "Itália",correct:false},
            { id: 2, text: "Alemanha",correct:true},
            { id: 3, text: "Portugal",correct:false},
            { id: 4, text: "França",correct:false},
        ],
    },
    {
        question: "Onde fica localizado o teatro amazonas? ",
        answers:[
            { id: 1, text: "Rio de Janeiro ",correct:false},
            { id: 2, text: "São Paulo ",correct:false},
            { id: 3, text: "Pará ",correct:false},
            { id: 4, text: "Manaus ",correct:true},
        ],
    },
    {
        question: "O festival de Parintins começa em qual época do ano? ",
        answers:[
            { id: 1, text: "Inicio de Janeiro ",correct:false},
            { id: 2, text: "Final de Dezembro ",correct:false},
            { id: 3, text: "Final de Julho ",correct:true},
            { id: 4, text: "Inicio de Fevereiro ",correct:false},
        ],
    },
    {
        question: "Belém fica localizado em qual estado?",
        answers:[
            { id: 1, text: "Rio de janeiro ",correct:false},
            { id: 2, text: "Amazonas ",correct:false},
            { id: 3, text: "Pará ",correct:true},
            { id: 4, text: "São Paulo ",correct:false},
        ],
    },
]

const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz(){
    currentQuestionIndex = 0;
    score = 0;
    document.querySelector('.app').style.visibility = 'block';
    document.querySelector('.cupom1').style.display = 'none';
    document.querySelector('.cupom2').style.display = 'none';
    document.querySelector('.cupom3').style.display = 'none';
    document.querySelector('.cupom4').style.display = 'none';
    document.querySelector('.cupom5').style.display = 'none';
    nextButton.innerHTML = "Próxima";
    showQuestion();
}

function showQuestion(){
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question;
    
    currentQuestion.answers.forEach((answer) => {
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        answerButtons.appendChild(button);
        button.dataset.id = answer.id;
        button.addEventListener("click", selectAnswer);
    })
}

function resetState(){
    nextButton.style.display = "none";
    while (answerButtons.firstChild){
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAnswer(e){
    answers = questions[currentQuestionIndex].answers;
    const correctAnswer = answers.filter((answers) => answers.correct == true)[0];
    const selectedBtn = e.target;
    const isCorrect = selectedBtn.dataset.id == correctAnswer.id;
    if (isCorrect){
        selectedBtn.classList.add("correct");
        score++;
    }else{
        selectedBtn.classList.add("incorrect");
    }
    Array.from(answerButtons.children).forEach((button) => {
        if(button.dataset.correct === "true"){
            button.classList.add("correct");
        }
        button.disabled = true;
    });
    nextButton.style.display = "block";
}

function showScore(){
    resetState();
    questionElement.innerHTML = `Você acertou ${score} de ${questions.length}!`;
    nextButton.innerHTML = "Jogar denovo";
    nextButton.style.display = "block";

    if (score == 1){
        document.querySelector('.cupom1').style.display = 'flex';
        
    }if(score == 2){
         document.querySelector('.cupom1').style.display = 'flex';
    }
    if(score == 3){
        document.querySelector('.cupom2').style.display = 'flex';
    }
    if(score == 4){
        document.querySelector('.cupom2').style.display = 'flex';
    }
    if(score == 5){
        document.querySelector('.cupom2').style.display = 'flex';
    }
    if(score == 6){
        document.querySelector('.cupom3').style.display = 'flex';
    }
    if(score == 7){
         document.querySelector('.cupom3').style.display = 'flex';
    }
    if(score == 8){
         document.querySelector('.cupom3').style.display = 'flex';
    }
    if(score == 9){
         document.querySelector('.cupom4').style.display = 'flex';
    }
    if(score == 10){
         document.querySelector('.cupom4').style.display = 'flex';
    }
    if(score == 11){
         document.querySelector('.cupom4').style.display = 'flex';
    }
    if(score == 12){
         document.querySelector('.cupom5').style.display = 'flex';
    }
}


function handleNextButton(){
    currentQuestionIndex++;
    if(currentQuestionIndex < questions.length){
        showQuestion();
        nextButton.style.display = "none";
    }else{
        showScore();
    }
}

nextButton.addEventListener("click",() =>{
    if (currentQuestionIndex < questions.length){
        handleNextButton();
    }else{
        document.querySelector('.cupom').style.display = 'none';
        startQuiz();
    }
})

startQuiz();

document.addEventListener("DOMContentLoaded", () => {
    const msgProfile = document.getElementById("msgSuccess");
    if (msgProfile) {
        document.getElementById("profile-menu").style.display = 'hidden';
    }
});