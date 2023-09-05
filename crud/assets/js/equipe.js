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

//***************** */

document.addEventListener("DOMContentLoaded", function() {
    var rolButtons = document.querySelectorAll('.rolButton');
    var usuarios = document.querySelectorAll('.usuario');

    // Agregar un controlador de eventos a cada botón de rol
    rolButtons.forEach(function(boton) {
        boton.addEventListener("click", function() {
            var rolSeleccionado = boton.getAttribute('data-rol');

            // Mostrar u ocultar usuarios basados en el rol
            usuarios.forEach(function(usuario) {
                if (rolSeleccionado === 'Tous') {
                    usuario.style.display = 'flex';
                } else if (usuario.classList.contains(rolSeleccionado)) {
                    usuario.style.display = 'flex';
                } else {
                    usuario.style.display = 'none';
                }
            });
        });
    });
});
