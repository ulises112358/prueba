// MENU RESPOSIVO
let movil = document.getElementById("movil");
let menu = document.getElementById("menu");
movil.addEventListener("click", () => {
        menu.classList.toggle("menu");
    })
    // CAMBIAR DE COLOR
let color = document.getElementById('color');
document.getElementById('red').addEventListener("click", () => {
    color.setAttribute("href", "./css/red.css");
})
document.getElementById('blue').addEventListener("click", () => {
    color.setAttribute("href", "./css/blue.css");
})
document.getElementById('green').addEventListener("click", () => {
    color.setAttribute("href", "./css/green.css");
})

//FORMULARIO INTERACTIVO
let btnformulario = document.getElementById("btnformulario");
let frm = document.getElementById("frm");
btnformulario.addEventListener("click", () => {
    frm.classList.toggle("frm");
})

// let datos = [{
//         titulo: 'Toyota',
//         img: './img/negro.jpg',
//         descripcion: 'Toyota Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem est id error assumenda recusandae voluptas quod consequatur, nesciunt molestiae excepturi soluta tempora sapiente quas alias neque necessitatibus. Tempore, reprehenderit consequatur.'
//     },
//     {
//         titulo: 'Nissan',
//         img: './img/azul.jpg',
//         descripcion: 'Nissan Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem est id error assumenda recusandae voluptas quod consequatur, nesciunt molestiae excepturi soluta tempora sapiente quas alias neque necessitatibus. Tempore, reprehenderit consequatur.'
//     },
//     {
//         titulo: 'Renault',
//         img: './img/rojo.jpg',
//         descripcion: 'Renault Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem est id error assumenda recusandae voluptas quod consequatur, nesciunt molestiae excepturi soluta tempora sapiente quas alias neque necessitatibus. Tempore, reprehenderit consequatur.'
//     },
//     {
//         titulo: 'JAC',
//         img: './img/verde.jpg',
//         descripcion: 'JAC Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem est id error assumenda recusandae voluptas quod consequatur, nesciunt molestiae excepturi soluta tempora sapiente quas alias neque necessitatibus. Tempore, reprehenderit consequatur.'
//     },
//     {
//         titulo: 'Suzuki',
//         img: './img/negro.jpg',
//         descripcion: 'Suzuki Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem est id error assumenda recusandae voluptas quod consequatur, nesciunt molestiae excepturi soluta tempora sapiente quas alias neque necessitatibus. Tempore, reprehenderit consequatur.'
//     },
//     {
//         titulo: 'Mercedes Benz',
//         img: './img/rojo.jpg',
//         descripcion: 'Mercedes Benz Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem est id error assumenda recusandae voluptas quod consequatur, nesciunt molestiae excepturi soluta tempora sapiente quas alias neque necessitatibus. Tempore, reprehenderit consequatur.'
//     }
// ]

// let contenido = document.getElementById('contenido');
// datos.forEach(dato => {
//     let articulo = `<div class="articulo">
//     <img src="${dato.img}" alt="rojo">
//     <h3>${dato.titulo}</h3>
//     <p>${dato.descripcion}</p>
//     <a href="#" class="enlace">Leer mas...</a>
//     </div>`;
//     contenido.innerHTML = articulo;
// })