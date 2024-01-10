 document.addEventListener("DOMContentLoaded", function() {
    const checkoutBtn = document.querySelector('.checkout-btn');

    checkoutBtn.addEventListener('click', function(event) {
      event.preventDefault(); 

      const inputFields = document.querySelectorAll('.input_field');
      let isEmpty = false;

      inputFields.forEach(function(field) {
        if (field.value.trim() === '') {
          isEmpty = true;
          return;
        }
      });

      if (isEmpty) {
        alert('Please fill out all fields.');
      } else {
        alert('Submitted successfully!');
      }
    });

    const applyButtons = document.querySelectorAll('.form button');
    applyButtons.forEach(function(button) {
      button.addEventListener('click', function(event) {
        event.preventDefault(); 
      });
    });
  });