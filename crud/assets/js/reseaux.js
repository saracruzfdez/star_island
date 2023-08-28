/* evenement on click sur logo 2 le faire disparaitre et faire aparaitre les logos reseaux sociaux */
function visibility() {
    let logoDiscord2 = document.getElementById("logoDiscord2")

    logoDiscord2.addEventListener('mouseover', () => {
        logoDiscord2.style.transform = 'scale(1.1)';
    })

    logoDiscord2.addEventListener('mouseout', () => {
        logoDiscord2.style.transform = 'scale(1)';
    })

    logoDiscord2.addEventListener('click', function () {
        let containerReseaux = document.getElementById("container_reseaux")

        if (containerReseaux.style.visibility == "hidden") {
            containerReseaux.style.visibility = "visible"
        } else {
            containerReseaux.style.visibility = "hidden"
        };
    })
}

visibility()