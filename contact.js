document.addEventListener('DOMContentLoaded', function () {
    const cancelButton = document.querySelector('.app-form-button.cancel');
    const sendButton = document.querySelector('.app-form-button.send');
    const form = document.getElementById('contactForm');
  
    // Function to handle cancellation
    cancelButton.addEventListener('click', function () {
      // Reset the form fields
      document.querySelector('input[placeholder="NAME"]').value = '';
      document.querySelector('input[placeholder="EMAIL"]').value = '';
      document.querySelector('input[placeholder="CONTACT NO"]').value = '';
      document.querySelector('input[placeholder="MESSAGE"]').value = '';
    });
  
    // Function to handle form submission
    form.addEventListener('submit', function (event) {
      // Prevent the default form submission
      event.preventDefault();
  
      // Check if any input field is empty
      const inputs = form.querySelectorAll('.app-form-control');
      let isAllFilled = true;
      inputs.forEach(function (input) {
        if (input.value.trim() === '') {
          isAllFilled = false;
        }
      });
  
      // If all input fields are filled, show a success message
      if (isAllFilled) {
        alert('Submitted successfully!');
      } else {
        // If any field is empty, show an alert to fill out all fields
        alert('Please fill out all fields');
      }
    });
  });
  