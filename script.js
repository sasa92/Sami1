function toggleDetails(element) {
    var details = element.parentElement.nextElementSibling;
    if (details.style.display === "none") {
      details.style.display = "block";
      element.innerHTML = "-";
    } else {
      details.style.display = "none";
      element.innerHTML = "+";
    }
  }

  
  let exp = 0;

function increaseExp() {
    exp += 5;
    const progressBar = document.getElementById('loading-progress');
    progressBar.style.width = exp + '%';
}









const allRonds = document.querySelectorAll('.rond');
const allBoxes = document.querySelectorAll('.box');

const controller = new ScrollMagic.Controller()

allBoxes.forEach(box => {

    for(i = 0; i < allRonds.length; i++){

        if(allRonds[i].getAttribute('data-anim') === box.getAttribute('data-anim')){

            let tween = gsap.from(box, {y: -50, opacity: 0, duration: 0.5})

            let scene = new ScrollMagic.Scene({
                triggerElement: allRonds[i],
                reverse: true
            })
            .setTween(tween)
            // .addIndicators()
            .addTo(controller)

        }

    }

})


// son fond 

window.onload = function() {
  var audio = document.getElementById('background-music');
  audio.play().catch(function(error) {
      console.log("Erreur de lecture audio: " + error);
  });
};



// portefeuille 



    // Attendre le chargement complet du DOM
    document.addEventListener('DOMContentLoaded', function() {
        // Sélectionner tous les éléments de la timeline
        var steps = document.querySelectorAll('.timeline-step');
        // Parcourir chaque étape
        steps.forEach(function(step) {
            // Ajouter un écouteur d'événement 'click' à chaque étape
            step.addEventListener('click', function() {
                var stepNumber = this.getAttribute('data-step');
                showDetail(stepNumber);
            });
        });

        // Fonction pour afficher les détails de l'étape sélectionnée
        function showDetail(step) {
            // Cacher tous les détails
            var details = document.querySelectorAll('.detail');
            details.forEach(function(detail) {
                detail.style.display = 'none';
            });

            // Afficher le détail correspondant
            var currentDetail = document.querySelector('.detail[data-step="' + step + '"]');
            if (currentDetail) {
                currentDetail.style.display = 'block';
            }
        }
    });

