/**
 * Cette function turn star on
 * 
 * @param {*} rootElement la racine du composant rating
 * @param {*} count specifie le nombre d'étoiles en partant de la gauche à activer
 */
function turnStarsOn(rootElement, count){
    const starElements = Array.from(rootElement.querySelectorAll(".rating__star"))
    starElements.forEach((starElement, index) => {
        const starOn = starElement.querySelector(".rating__starOn")
        const starOff = starElement.querySelector(".rating__starOff")
        if (index < count) {
            starOn.style.display = "inline"
            starOff.style.display = "none"
        } else {
            starOff.style.display = "inline"
            starOn.style.display = "none"
        }
    })
}

/**
 * 
 * @param {Element} rootElement 
 */
function initRatingComponent(rootElement) {

    const isReadOnly = rootElement.className.includes("readOnly")
    const inputElement = rootElement.querySelector(".rating__input")
    if (!inputElement) {
        throw new Error("no element")
    }

    const value = inputElement.value;

    turnStarsOn(rootElement, value)

    if (!isReadOnly){
        // je recupere un tableau de ts les elements etoile
        const starElements = Array.from(rootElement.querySelectorAll(".rating__star"))
        
        starElements.forEach((starElement, index) => {
            starElement.addEventListener("click", () => {
                inputElement.value = index
                turnStarsOn(rootElement, index + 1)
                console.log("click on star : ", index)
            })
        })
    }
}

const rootElements = Array.from(document.querySelectorAll(".rating"));

rootElements.forEach((rootElement)=>{
    initRatingComponent(rootElement)
})
