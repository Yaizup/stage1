  document.getElementById("rolechoice").addEventListener("change", function() {
    document.querySelectorAll('.role').forEach(el => el.style.display = 'none');
    const selected = this.value;
    if (selected === 'etudiant') {
      document.getElementById('student').style.display = 'block';
    } else if (selected === 'enseignant') {
      document.getElementById('teacher').style.display = 'block';
    } else if (selected === 'admin') {
      document.getElementById('admin').style.display = 'block';
    }
  });