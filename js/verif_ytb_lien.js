
document.addEventListener("DOMContentLoaded", function () {
  const videoInput = document.getElementById("video");
  const errorDiv = document.getElementById("youtube-error");
  const form = document.querySelector("form");

  // Vérifie si l'URL est vide ou commence par youtube.com ou youtu.be
  function isValidYouTubeUrl(url) {
    if (url.trim() === "") return true; // champ vide autorisé
    const pattern = /^(https?:\/\/)?(www\.)?(youtube\.com\/watch\?v=|youtu\.be\/).+/;
    return pattern.test(url.trim());
  }

  videoInput.addEventListener("input", function () {
    if (!isValidYouTubeUrl(videoInput.value)) {
      errorDiv.style.display = "block";
    } else {
      errorDiv.style.display = "none";
    }
  });

  form.addEventListener("submit", function (e) {
    if (!isValidYouTubeUrl(videoInput.value)) {
      e.preventDefault();
      errorDiv.style.display = "block";
      videoInput.focus();
    }
  });
});
