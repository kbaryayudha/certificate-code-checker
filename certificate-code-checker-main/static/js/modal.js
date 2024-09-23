document.addEventListener("DOMContentLoaded", function() {
    const emailInput = document.getElementById('email');
    const sendButton = document.getElementById('btn-send');
    const modal = document.getElementById('modal');
    const closeModal = document.querySelector('.close');
    const errorMessage = document.getElementById('error-message');
    const otpInput = document.getElementById('otp');
    const sendOtpButton = document.querySelector('.btn-send-otp');

    function validateEmail(email) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    function validateOtp(otp) {
        return otp.trim() !== ''; // Simple validation, adjust as needed
    }

    sendButton.addEventListener('click', function(event) {
        const email = emailInput.value.trim();

        if (!email || !validateEmail(email)) {
            event.preventDefault();

            emailInput.style.border = "2px solid red";

            errorMessage.textContent = !email ? "Email is required." : "Please enter a valid email address.";
            errorMessage.style.display = "block";
        } else {
            errorMessage.style.display = "none";
            emailInput.style.border = "";

            modal.style.display = 'flex';
        }
    });

    closeModal.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    emailInput.addEventListener('input', function() {
        emailInput.style.border = "";
        errorMessage.style.display = "none";
    });

    sendOtpButton.addEventListener('click', function(event) {
        const otp = otpInput.value.trim();

        if (!validateOtp(otp)) {
            event.preventDefault();
            
            otpInput.style.border = "2px solid red";
        } else {
            otpInput.style.border = "";
        }
    });
});
