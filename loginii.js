// javaScript per validimin e fushave tformave
document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector('.login form');
    const signupForm = document.querySelector('.registration form');

    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = loginForm.querySelector('input[type="email"]').value;
        const password = loginForm.querySelector('input[type="password"]').value;

        if (!email.includes('@')) {
            alert('Ju lutem shkruani nje email valid!');
            return;
        }
        if (password.length < 6) {
            alert('Fjalekalimi duhet te kete te pakten 6 karaktere!');
            return;
        }
        alert('Kyçja u krye me sukses!');
    });

    
    signupForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = signupForm.querySelector('input[type="email"]').value;
        const password = signupForm.querySelectorAll('input[type="password"]')[0].value;
        const confirmPassword = signupForm.querySelectorAll('input[type="password"]')[1].value;

        if (!email.includes('@')) {
            alert('Ju lutem shkruani nje email valid!');
            return;
        }
        if (password.length < 6) {
            alert('Fjalekalimi duhet te kete te pakten 6 karaktere!');
            return;
        }
        if (password !== confirmPassword) {
            alert('Fjalekalimet nuk perputhen!');
            return;
        }
        alert('Regjistrimi u krye me sukses!');
    });
});
