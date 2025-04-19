// // javaScript per validimin e fushave tformave
// document.addEventListener("DOMContentLoaded", () => {
//   const loginForm = document.querySelector(".login form");
//   const signupForm = document.querySelector(".registration form");

//   loginForm.addEventListener("submit", (e) => {
//     e.preventDefault();
//     const email = loginForm.querySelector('input[type="email"]').value;
//     const password = loginForm.querySelector('input[type="password"]').value;

//     if (!email.includes("@")) {
//       alert("Ju lutem shkruani nje email valid!");
//       return;
//     }
//     if (password.length < 6) {
//       alert("Fjalekalimi duhet te kete te pakten 6 karaktere!");
//       return;
//     }
//     alert("Kyçja u krye me sukses!");
//   });

//   signupForm.addEventListener("submit", (e) => {
//     e.preventDefault();
//     const email = signupForm.querySelector('input[type="email"]').value;
//     const password = signupForm.querySelectorAll('input[type="password"]')[0]
//       .value;
//     const confirmPassword = signupForm.querySelectorAll(
//       'input[type="password"]'
//     )[1].value;

//     if (!email.includes("@")) {
//       alert("Ju lutem shkruani nje email valid!");
//       return;
//     }
//     if (password.length < 6) {
//       alert("Fjalekalimi duhet te kete te pakten 6 karaktere!");
//       return;
//     }
//     if (password !== confirmPassword) {
//       alert("Fjalekalimet nuk perputhen!");
//       return;
//     }
//     alert("Regjistrimi u krye me sukses!");
//   });
// });


// /*Definimi dh Perdorimi i Objekteve ne JS, si "ZORRE QORRE"*/

// var detajet_personale = function (email, password) {
//   this.email = email;
//   this.password = password;
// };

// var users = [];

// function add_user(event) {
//   event.preventDefault(); // Parandalon rifreskimin e faqes kur forma bahet submit

//   // te dhenat nga input
//   var email = document.getElementById("signup-email").value;
//   var password = document.getElementById("signup-password").value;
//   var confirmPassword = document.getElementById(
//     "signup-confirm-password"
//   ).value;

//   // Krijo nje objekt te ri perdoruesi dhe shtoje ne listen 'users'
//   var newUser = new detajet_personale(email, password);

//   users.push(newUser); //shton userin e ri ne listen e perdoruesve

//   console.log("Registered Users:", users); //Verifikin
// }
