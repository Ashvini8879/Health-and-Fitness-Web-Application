
// Register Form Animation
const registerForm = document.getElementById('registerForm');
if (registerForm) {
    registerForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const formElements = registerForm.elements;
        let i = 0;
        const interval = setInterval(() => {
            formElements[i].style.opacity = 1;
            i++;
            if (i === formElements.length) {
                clearInterval(interval);
                registerForm.submit();
            }
        }, 100);
    });
}
