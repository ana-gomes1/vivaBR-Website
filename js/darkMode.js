const $html = document.querySelector('html')
const chk = document.getElementById('chk')

// Verifica o estado salvo ao carregar a página
const darkmode = localStorage.getItem('darkmode')

if (darkmode === 'enabled') {
      $html.classList.add('dark-mode')
      chk.checked = true
}

chk.addEventListener('change', function () {
      if (chk.checked) {
        $html.classList.add('dark-mode')
        localStorage.setItem('darkmode', 'enabled')
      } else {
        $html.classList.remove('dark-mode')
        localStorage.setItem('darkmode', 'disabled')
      }
})