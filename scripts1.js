// Simple JavaScript code to enhance the web application

// Function to show an alert when the page loads
document.addEventListener('DOMContentLoaded', () => {
    console.log('Page loaded');
    alert('Welcome to Flash.0!');

    // Add a click event listener to buttons
    document.querySelectorAll('button').forEach(button => {
        button.addEventListener('click', () => {
            alert('Button clicked!');
        });
    });
});
