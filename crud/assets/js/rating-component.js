function turnStarsOn(rootElement, count) {
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

function ratingComponent() {
    const rootElement = document.querySelector(".rating")
    if (!rootElement) {
        throw new Error("no element")
    }

    const inputElement = rootElement.querySelector(".rating__input")
    if (!inputElement) {
        throw new Error("no element")
    }

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

ratingComponent()