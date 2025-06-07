  const imageInput = document.getElementById('image');
  const previewContainer = document.getElementById('previewContainer');
  const previewImage = document.getElementById('previewImage');

  imageInput.addEventListener('change', function () {
    const file = this.files[0];
    if (file && file.type.startsWith('image/')) {
      const reader = new FileReader();
      reader.onload = function (e) {
        previewImage.src = e.target.result;
        previewContainer.classList.remove('d-none');
      }
      reader.readAsDataURL(file);
    } else {
      previewContainer.classList.add('d-none');
    }
  });

  function removeImage() {
    imageInput.value = '';
    previewContainer.classList.add('d-none');
    previewImage.src = '#';
  }
/* projet affichage dynamique*/
    const textarea = document.getElementById('descprojet');
  const counter = document.getElementById('charCount');

  textarea.addEventListener('input', () => {
    counter.textContent = `${textarea.value.length} / 200`;
  });