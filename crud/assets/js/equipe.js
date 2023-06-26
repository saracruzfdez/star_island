       /* evenement on click sur profil image et faire aparaitre les logos reseaux sociaux */
       function visibility2() {
        let profilPicture = document.getElementByClass("equipeItem")

        profilPicture.addEventListener('click', function() {
            let profilPictureReseaux = document.getElementByClass("equipeItemReseaux")

            if (profilPictureReseaux.style.visibility == "hidden") {
                profilPictureReseaux.style.visibility = "visible"
            } else {
                profilPictureReseaux.style.visibility = "hidden"
            };
        })
    }

    visibility2()