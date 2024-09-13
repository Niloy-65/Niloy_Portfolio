document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  const messageBox = document.getElementById("message-box");

  form.addEventListener("submit", function (e) {
    // Prevent the default form submission to see the result without refreshing (only for demo purposes)
    e.preventDefault();

    // Show success message (you would normally only do this after receiving a success response from the server)
    messageBox.className = "success"; // Set the class for styling
    messageBox.innerText = "Message sent successfully!"; // Set the success message
    messageBox.style.display = "block"; // Make the message box visible

    // You can later remove this line to allow the form to submit normally
    this.submit(); // Uncomment this to allow form submission after testing
  });
});
