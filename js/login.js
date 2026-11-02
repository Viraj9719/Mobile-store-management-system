 // Toggle password visibility
 function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}

// Animate elements when they come into view
document.addEventListener('DOMContentLoaded', function() {
    // Add animation classes to elements
    const animatedElements = document.querySelectorAll('.card-body > *:not(.animate__animated)');
    let delay = 0;
    
    animatedElements.forEach(function(element) {
        element.classList.add('animate__animated', 'animate__fadeInUp');
        element.style.animationDelay = delay + 's';
        delay += 0.2;
    });
    
    // Form validation
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        
        // Here you would typically send the data to a server
        console.log('Login attempt:', { username, password });
        
        // For demo purposes, show a success animation
        const button = this.querySelector('.btn-primary');
        button.innerHTML = '<i class="fas fa-check-circle"></i> Success!';
        button.classList.remove('animate__pulse', 'animate__infinite');
        button.classList.add('animate__tada');
        
        setTimeout(function() {
            alert('Login successful!');
            
        }, 1500);
    });
});