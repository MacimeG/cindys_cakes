// ici j'appelle les navbar
const MENU = document.querySelector('.mainLogo')
const NAV = document.querySelector('.menuNavbar')
const catProd = document.querySelector('.miniNav')
const menuProd= document.querySelector('.mininavCategori')

// const inputNom = document.querySelector('.Nom')
// const inputPrenom = document.querySelector('.Prenom')
// const inputMail = document.querySelector('.Email')

// console.log(inputNom.value)

MENU.addEventListener('click', function(){
    console.log('tu as bien cliqué sur le mainmenu')
    // NAV.classList.toggle('active')
    NAV.classList.toggle("leMenuouver")
})

