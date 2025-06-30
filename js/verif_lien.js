document.addEventListener('DOMContentLoaded', function() {
  const formulaire = document.querySelector('form');
  const champVideo = document.getElementById('video');
  const divErreurYoutube = document.getElementById('youtube-error');

 
  function urlYoutubeValide(url) {
    const regex = /^(https?:\/\/)?(www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)[\w-]{11}(&.*)?$/;
    return regex.test(url);
  }

  // Vérification en temps réel à chaque saisie dans le champ vidéo
  champVideo.addEventListener('input', function() {
    const url = champVideo.value.trim();
    if (url === '' || urlYoutubeValide(url)) {
      // URL vide ou valide : on cache l’erreur et enlève la classe d’erreur
      divErreurYoutube.style.display = 'none';
      champVideo.classList.remove('is-invalid');
    } else {
      // URL invalide : on affiche le message d’erreur et ajoute la classe d’erreur
      divErreurYoutube.style.display = 'block';
      champVideo.classList.add('is-invalid');
    }
  });

  // Vérification au moment de la soumission du formulaire
  formulaire.addEventListener('submit', function(event) {
    const url = champVideo.value.trim();
    if (url !== '' && !urlYoutubeValide(url)) {
      // URL non vide et invalide : on bloque la soumission, affiche l’erreur et met le focus sur le champ
      event.preventDefault();
      divErreurYoutube.style.display = 'block';
      champVideo.classList.add('is-invalid');
      champVideo.focus();
    }
  });
});




document.addEventListener('DOMContentLoaded', function() {
  const formulaire = document.querySelector('form');
  const champDrive = document.getElementById('drive');
  const divErreurDrive = document.getElementById('drive-error');

  function urlDriveValide(url) {
    const regex = /^https:\/\/drive\.google\.com\/file\/d\/[\w-]+\/view(\?usp=sharing)?$/;
    return regex.test(url);
  }


  champDrive.addEventListener('input', function() {
    const url = champDrive.value.trim();
    if (url === '' || urlDriveValide(url)) {
     
      divErreurDrive.style.display = 'none';
      champDrive.classList.remove('is-invalid');
    } else {
     
      divErreurDrive.style.display = 'block';
      champDrive.classList.add('is-invalid');
    }
  });


  formulaire.addEventListener('submit', function(event) {
    const url = champDrive.value.trim();
    if (url !== '' && !urlDriveValide(url)) {
  
      event.preventDefault();
      divErreurDrive.style.display = 'block';
      champDrive.classList.add('is-invalid');
      champDrive.focus();
    }
  });
});
