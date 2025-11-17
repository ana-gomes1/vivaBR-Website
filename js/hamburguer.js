const btn = document.querySelector('.mobile-menu');
const nav = document.querySelector('.nav');
const line = document.getElementById('linha');

btn.addEventListener('click', () => {
    const isExpanded = btn.getAttribute('aria-expanded') === 'true';
    btn.setAttribute('aria-expanded', String(!isExpanded));
    nav.classList.toggle('open');
    nav.style.transition = 'transform 0.3s ease-in-out, box-shadow 0.3s';
    nav.style.boxShadow = '0px 0px 30px 5px #1f1f1f54';
    // animação de X no ícone
btn.querySelectorAll('div').forEach((line, idx) => {
    if (!isExpanded) {
        if (idx === 0) line.style.transform = 'rotate(45deg) translate(5px, 9px)';
        if (idx === 1) line.style.opacity = '0';
        if (idx === 2) line.style.transform = 'rotate(-45deg) translate(5px, -9px)';
        line.style.background = 'black';
        
    } else {
        line.style.transform = 'none';
        line.style.opacity = '1';
        line.style.background = 'white';
        nav.style.boxShadow = 'none';
    }
    });
});

const btnProfile = document.getElementById('btnProfile')
		const btnLogout = document.getElementById('profileMenu')

		btnProfile.addEventListener('click', () => {
			btnLogout.classList.toggle('ativo');
});

