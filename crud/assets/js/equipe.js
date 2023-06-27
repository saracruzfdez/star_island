/* evenement on click sur profil image et faire aparaitre les logos reseaux sociaux */
function visibility2() {

    let profilePictures = document.getElementsByClassName("equipeItem")

    for (var i = 0; i < profilePictures.length; i++) {
        // Let's store the current Element in a dedicated var
        const profilePicture = profilePictures[i]

        // Add an on click listener on each elements
        profilePicture.addEventListener('click', function () {

            // Return the unique div element with classname equipeItemReseaux
            const profileItemsReseaux = profilePicture.getElementsByClassName("equipeItemReseaux")

            const profileItemReseaux = profileItemsReseaux[0]

            // Toggle visibility on the network items
            if (profileItemReseaux.style.visibility == "hidden") {
                profileItemReseaux.style.visibility = "visible"
            } else {
                profileItemReseaux.style.visibility = "hidden"
            };
        })
    }
}

visibility2()