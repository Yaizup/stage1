function toggleEdit(field) {
  const display = document.getElementById(`${field}_display`);
  const input = document.getElementById(`${field}_input`);
  const saveBtn = document.getElementById(`${field}_save`);
  const cancelBtn = document.querySelector(`#${field}_input ~ .btn-danger`);

  if (display && input && saveBtn && cancelBtn) {
    display.classList.add('d-none');
    input.classList.remove('d-none');
    saveBtn.classList.remove('d-none');
    cancelBtn.classList.remove('d-none');
  }

  if (field === "description") {
    document.getElementById(`description_display`).classList.add('d-none');
    document.getElementById(`description_input`).classList.remove('d-none');
    document.getElementById(`description_buttons`).classList.remove('d-none');
  }
}

function cancelEdit(field) {
  const display = document.getElementById(`${field}_display`);
  const input = document.getElementById(`${field}_input`);
  const saveBtn = document.getElementById(`${field}_save`);
  const cancelBtn = document.querySelector(`#${field}_input ~ .btn-danger`);

  if (display && input && saveBtn && cancelBtn) {
    display.classList.remove('d-none');
    input.classList.add('d-none');
    saveBtn.classList.add('d-none');
    cancelBtn.classList.add('d-none');
  }

  if (field === "description") {
    document.getElementById(`description_display`).classList.remove('d-none');
    document.getElementById(`description_input`).classList.add('d-none');
    document.getElementById(`description_buttons`).classList.add('d-none');
  }
}
