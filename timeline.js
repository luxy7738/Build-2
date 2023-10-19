document.getElementById('loginBtn').addEventListener('click', function() {
    // Implement login functionality
    alert('Login functionality not implemented yet.');
});

document.getElementById('logoutBtn').addEventListener('click', function() {
    // Implement logout functionality
    alert('Logout functionality not implemented yet.');
});

document.getElementById('focusSelect').addEventListener('change', function() {
    // Get selected focus
    const selectedFocus = this.value;
    // Update roadmap based on selected focus
    // (For now, just an alert)
    alert('Selected focus: ' + selectedFocus);
});
const steps = document.querySelectorAll(".step");

steps.forEach(step => {
    step.addEventListener("click", function() {
        // Remove the active class from all steps
        steps.forEach(s => s.classList.remove("active"));
        // Add the active class to the clicked step
        this.classList.add("active");
    });
});
