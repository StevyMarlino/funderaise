document.getElementById('open').addEventListener('click', showClass)
document.getElementById('close').addEventListener('click', removeClass)
const container0 = document.querySelector('.container0')

function showClass() {
    container0.classList.add('show-nav');
   document.querySelector('#open').style.display = 'none'
   document.querySelector('#close').style.display = 'block'
}

function removeClass() {
    container0.classList.remove('show-nav')
    document.querySelector('#open').style.display = 'block'
    document.querySelector('#close').style.display = 'none'
}