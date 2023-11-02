function submitFeedback() {
    var title = document.getElementById('title').value;
    var body = document.getElementById('body').value;

    // Send feedback to the specified email address (for demonstration purposes)
    var email = 'spark222@asu.edu';
    var subject = 'Feedback: ' + title;
    var mailtoLink = 'mailto:' + email + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);

    // Open the default email client with the pre-filled feedback
    window.location.href = mailtoLink;

    // Optionally, you can also send feedback to a server using AJAX to handle email sending securely.
}
