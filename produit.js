
// PARTIS DESKTOP PAGE PRODUIT
const heros = document.querySelector('.hero')
const dessinanime = document.querySelector('.dessinanime')
const jeuvideo = document.querySelector('.jeuvideo')
const film = document.querySelector('.filme')

const partiHero = document.querySelector('.espaceCarteSuperHero')
const partiAnime = document.querySelector('.espaceCarteDessinAnime')
const partiJV = document.querySelector('.espaceCarteJeuxVideo')
const partiFilm = document.querySelector('.espaceCarteFilm')
const BOUCLE = document.querySelectorAll('.boucle')


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

// PARTIS RESPONSIVE PAGE PRODUIT

const hero = document.querySelector('.superhero')
const anime = document.querySelector('.dessin')
const jeuxV= document.querySelector('.jeuxvideo')
const filmm= document.querySelector('.film')


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

for (let index = 0; index < BOUCLE.length; index++) {
    const element = BOUCLE[index];
    element.addEventListener('click', function(){
        console.log('kiki')
        menuProd.className="mininavCategori"
    })
    
}
catProd.addEventListener('click', function(){
    menuProd.classList.toggle("mininavCatouver")
})

// PARTIS ESPACE VIDEO NORMALEMENT SA FONCTIONNE POUR RESPONSIVE ET DESKTOP


const othervideo = document.querySelector('.autre1')
const othervideo2 = document.querySelector('.autre2')
const othervideo3 = document.querySelector('.autre3')
const othervideo4 = document.querySelector('.autre4')
const othervideo5 = document.querySelector('.autre5')
const othervideo6 = document.querySelector('.autre6')
const othervideo7 = document.querySelector('.autre7')
const precedvideo = document.querySelector('.precedent1')
const precedvideo2 = document.querySelector('.precedent2')
const precedvideo3 = document.querySelector('.precedent3')
const precedvideo4 = document.querySelector('.precedent4')
const precedvideo5 = document.querySelector('.precedent5')
const precedvideo6 = document.querySelector('.precedent6')
const precedvideo7 = document.querySelector('.precedent7')



const video = document.querySelector('.espacevideo1')
const videotwo = document.querySelector('.espacevideo2')
const videothree = document.querySelector('.espacevideo3')
const videofour = document.querySelector('.espacevideo4')
const videofive = document.querySelector('.espacevideo5')
const videosix = document.querySelector('.espacevideo6')
const videoseven = document.querySelector('.espacevideo7')




console.log(othervideo)
console.log(precedvideo)

othervideo.addEventListener('click', function(){
    console.log('c bin la prochaine video')
    video.style.display="none"
    videotwo.style.display="flex"
})
precedvideo.addEventListener('click', function(){
    video.style.display="none"
    videoseven.style.display="flex"
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


// fonction like page produit
const jaime = document.querySelectorAll('.like')
const input = document.querySelectorAll('.liksys')
console.log(jaime)
// je crée cet boucle, pour pouvoir fermer la navbar au clique sur un élement de la navbar 
// Ici je fais mon "systeme"de like. nextElementSibling et pour selectionné le prochain element suivant celui cliqué.
for (let index = 0; index < jaime.length; index++) {
    const element = jaime[index];
    element.addEventListener('click', function(){
        console.log(element.nextElementSibling)
        element.nextElementSibling.innerHTML++
        element.setAttribute('src', './IMAGE_MAQUETTE/NoPath.png')
        if(element.nextElementSibling.textContent == 2){
            element.nextElementSibling.innerHTML = 0
            element.setAttribute('src', './IMAGE_MAQUETTE/NoPath - Copie (6).png')
        }
        console.log(element)
        
    })
}
