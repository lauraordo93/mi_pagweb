// document.addEventListener("DOMContentLoaded", () => {
//     const imgs = document.querySelectorAll('.aparecer');

//     const observer = new IntersectionObserver((entries, observer) => {
//         entries.forEach((entry, i) => {
//             if (entry.isIntersecting) {
//                 setTimeout(() => {
//                     entry.target.classList.add('animada'); // <- nueva clase de animación
//                 }, i * 300); // menos delay para que no se vean "pilladas"
//                 // observer.unobserve(entry.target); deja de observar una vez ya se animó
//             }
//         });
//     }, {
//         threshold: 0.2
//     });

//     imgs.forEach(img => observer.observe(img));
// });