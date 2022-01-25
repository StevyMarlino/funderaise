const open = document.getElementById('open')
const close = document.getElementById('close')
const container0 = document.querySelector('.container0')

open.addEventListener('click', () => container0.classList.add
('show-nav'))
close.addEventListener('click', () => container0.classList.remove
('show-nav'))  