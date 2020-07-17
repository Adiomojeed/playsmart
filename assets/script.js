let modalImages = document.querySelectorAll('#modal__img')
let mod__img = document.querySelector('#mod__img')
let modal__block = document.querySelector('#modal__block')
let close = document.querySelector('.close')
for (let i = 0; i < modalImages.length; i++) {
    modalImages[i].addEventListener('click', function () {
        modal__block.style.display = "flex"
        modal__block.classList.remove("unfade")
        mod__img.src = modalImages[i].src
    })
}
close.addEventListener('click', function () {
    modal__block.classList.add("unfade")
    setTimeout(function () { modal__block.style.display = "none" }, 500)
})