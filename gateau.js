// ici j'appelle les navbar
const MENU = document.querySelector('.mainLogo')
const NAV = document.querySelector('.menuNavbar')
const catProd = document.querySelector('.miniNav')
const menuProd= document.querySelector('.mininavCategori')

//ici j'appelle la les liens de la navbar de la partis produits.
// et ici partis responsive
const hero = document.querySelector('.superhero')
const anime = document.querySelector('.dessin')
const jeuxV= document.querySelector('.jeuxvideo')
const filmm= document.querySelector('.film')


const partiHero = document.querySelector('.espaceCarteSuperHero')
const partiAnime = document.querySelector('.espaceCarteDessinAnime')
const partiJV = document.querySelector('.espaceCarteJeuxVideo')
const partiFilm = document.querySelector('.espaceCarteFilm')
const BOUCLE = document.querySelectorAll('.boucle')



// sa c pour la partis desktop
const heros = document.querySelector('.hero')
const dessinanime = document.querySelector('.dessinanime')
const jeuvideo = document.querySelector('.jeuvideo')
const film = document.querySelector('.filme')


heros.addEventListener('click', function(){
    console.log('ces bien sur le super heros que tu cliques')
    partiHero.style.display='flex'
    partiJV.style.display="none"
    partiFilm.style.display="none"
    partiAnime.style.display="none"
})

dessinanime.addEventListener('click', function(){
    console.log('c bien sur les dessins anime')
    partiHero.style.display="none"
    partiJV.style.display="none"
    partiFilm.style.display="none"
    partiAnime.style.display="flex"
})

jeuvideo.addEventListener('click', function(){
    console.log('c bien sur les jeux video')
    partiHero.style.display='none'
    partiJV.style.display="flex"
    partiFilm.style.display="none"
    partiAnime.style.display="none"
})

film.addEventListener('click', function(){
    console.log('ces bien les films :) ')
    partiHero.style.display='none'
    partiJV.style.display="none"
    partiFilm.style.display="flex"
    partiAnime.style.display="none"
})


// console.log(heros)



// je crée cet boucle, pour pouvoir fermer la navbar au clique sur un élement de la navbar 
for (let index = 0; index < BOUCLE.length; index++) {
    const element = BOUCLE[index];
    element.addEventListener('click', function(){
        console.log('kiki')
        menuProd.className="mininavCategori"
    })
    
}

// Je fais mes ecouteurs d'évenements pour faire les menu "déroulant"

MENU.addEventListener('click', function(){
    console.log('tu as bien cliqué sur le mainmenu')
    // NAV.classList.toggle('active')
    NAV.classList.toggle("leMenuouver")
})

catProd.addEventListener('click', function(){
    menuProd.classList.toggle("mininavCatouver")
})

// je vais maintenant m'occuper de la page des photos des gateaux héhé sa risque d'être complicaooo  ( pour la partie responsive)

anime.addEventListener('click', function(){
    partiHero.style.display="none"
    partiJV.style.display="none"
    partiFilm.style.display="none"
    partiAnime.style.display="flex"
})


hero.addEventListener('click', function(){
    partiHero.style.display='flex'
    partiJV.style.display="none"
    partiFilm.style.display="none"
    partiAnime.style.display="none"
})

jeuxV.addEventListener('click', function(){
    partiHero.style.display='none'
    partiJV.style.display="flex"
    partiFilm.style.display="none"
    partiAnime.style.display="none"
})


filmm.addEventListener('click', function(){
    partiHero.style.display='none'
    partiJV.style.display="none"
    partiFilm.style.display="flex"
    partiAnime.style.display="none"
})


// Ici j'appelles les video et les bouton pour changer de video, toujours partis produits. Je sais je fais ça comme un cochon mais sa fais plusieurs heures que je suis dessus et voila :) esperont que sa fonctionne

const othervideo = document.querySelector('.autre')
const othervideo2 = document.querySelector('.autre2')
const othervideo3 = document.querySelector('.autre3')
const othervideo4 = document.querySelector('.autre4')
const othervideo5 = document.querySelector('.autre5')
const othervideo6 = document.querySelector('.autre6')
const othervideo7 = document.querySelector('.autre7')
const precedvideo = document.querySelector('.precedent')
const precedvideo2 = document.querySelector('.precedent2')
const precedvideo3 = document.querySelector('.precedent3')
const precedvideo4 = document.querySelector('.precedent4')
const precedvideo5 = document.querySelector('.precedent5')
const precedvideo6 = document.querySelector('.precedent6')
const precedvideo7 = document.querySelector('.precedent7')



const video = document.querySelector('.espacevideo')
const videotwo = document.querySelector('.espacevideo2')
const videothree = document.querySelector('.espacevideo3')
const videofour = document.querySelector('.espacevideo4')
const videofive = document.querySelector('.espacevideo5')
const videosix = document.querySelector('.espacevideo6')
const videoseven = document.querySelector('.espacevideo7')

// console.log(othervideo)
// console.log(precedvideo)

othervideo.addEventListener('click', function(){
    console.log('c bin la prochaine video')
    video.style.display="none"
    videotwo.style.display="flex"
})
precedvideo2.addEventListener('click', function(){
    videotwo.style.display="none"
    video.style.display="flex"
})


othervideo2.addEventListener('click', function(){
    videotwo.style.display="none"
    videothree.style.display="flex"
})
precedvideo3.addEventListener('click', function(){
    videotwo.style.display="flex"
    videothree.style.display="none"
})


othervideo3.addEventListener('click', function(){
    videothree.style.display="none"
    videofour.style.display="flex"
})
precedvideo4.addEventListener('click', function(){
    videothree.style.display="flex"
    videofour.style.display="none"
})


othervideo4.addEventListener('click', function(){
    videofour.style.display="none"
    videofive.style.display="flex"
})
precedvideo5.addEventListener('click', function(){
    videofour.style.display="flex"
    videofive.style.display="none"
})


othervideo5.addEventListener('click',function(){
    videofive.style.display="none"
    videosix.style.display="flex"
})
precedvideo6.addEventListener('click', function(){
    videofive.style.display="flex"
    videosix.style.display="none"
})


othervideo6.addEventListener('click',function(){
    videosix.style.display="none"
    videoseven.style.display="flex"
})
precedvideo7.addEventListener('click', function(){
    videosix.style.display="flex"
    videoseven.style.display="none"
})

othervideo7.addEventListener('click', function(){
    videoseven.style.display="none"
    video.style.display="flex"
})



const jaime = document.querySelectorAll('.like')
const input = document.querySelectorAll('.liksys')
console.log(jaime)


for (let index = 0; index < jaime.length; index++) {
    const element = jaime[index];
  
    element.addEventListener('click', function(){
        // input.value = parseInt(input.value) +1;
        // element.setAttribute('src', '/IMAGE_MAQUETTE/NoPath.png')
        // if(input.value == 2){
        //     input.value= parseInt(input.value = 0)
        //     element.setAttribute('src', '/IMAGE_MAQUETTE/NoPath - Copie (6).png')
        // }
        console.log(element.nextElementSibling)
        element.nextElementSibling.innerHTML++
        element.setAttribute('src', '/IMAGE_MAQUETTE/NoPath.png')
        if(element.nextElementSibling.textContent == 2){
            element.nextElementSibling.innerHTML = 0
            element.setAttribute('src', '/IMAGE_MAQUETTE/NoPath - Copie (6).png')
        }
        
    })
}
