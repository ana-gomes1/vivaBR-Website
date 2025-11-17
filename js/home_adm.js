
$('.menu-item').click((e) => {
  $('.menu-item').removeClass('selecionado');
  $(e.currentTarget).addClass('selecionado');

  
});

$('.menu-item').click((e) => {
    $('.secao-ativa').removeClass('secao-ativa');
    $($(e.currentTarget).attr('title')).addClass('secao-ativa');
});

document.addEventListener("DOMContentLoaded", () => {
        const msgSuccess = document.getElementById("msgSuccess");
        if (msgSuccess) {
            setTimeout(() => msgSuccess.remove(), 5000);
        }
});




