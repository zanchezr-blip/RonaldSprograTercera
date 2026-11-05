const btnmenu = document. querySelector('#btnmenu');
const menu = document.querySelector('#menu');
const titulos = document.querySelectorAll('.acordion.titulo');

btnmenu.addEventListener('click', () => {
    menu.classList.toggle('abierto');
    btnmenu.classList.toggle('activo');});



    //cerrar el menu al hacer click en un enlace

    document.querySelectorAll('#menu a').forEach(enlace => {
        enlace.addEventListener('click', () => {
            menu.classList.remove('abierto');
            btnmenu.classList.remove('activo');
        });
    });


    // Acordion para los titulos del menu
    titulos.forEach((titulo) => {
  titulo.addEventListener("click", () => {
    const item= titulo.parentElement;
    document.querySelectorAll(".acordion .item").forEach(otro => {
        if(otro !== item) otro.classList.remove("activo");
    });
    item.classList.toggle("activo");
  });
});

//Arreglo de onjetos

const servicios = [
    {titulo: "lavado", precio: 8000, img: "img/imagen1.jpg"},
    {titulo: "pulido", precio: 5000, img: "img/imagen2.jpg"},
    {titulo: "encerado", precio: 10000, img: "img/imagen3.jpg"}
];

const contenedor = document.querySelector("#cards");

function pintarCards(lista){
contenedor.innerHTML = "";
    lista.forEach(s => {
        const art =document.createElement("article");
        art.classList.add("tarjeta");
        art.innerHTML = `
        <img src="${s.img}" alt="${s.titulo}">
        <h3>${s.titulo}</h3>
        <p>Precio: $${s.precio}</p>
        `;
        contenedor.appendChild(art);
    });
}

if(contenedor) pintarCards(servicios);


const slides = document.querySelectorAll('.slide');
let actual = 0;
function mostrar(i) {
    slides.forEach(s => s.classList.remove('activa'));
    slides[i].classList.add('activa');
}

if (slides.length > 0) {
    document.querySelector('#siguiente').addEventListener('click', () => {
        actual = (actual + 1) % slides.length;
        mostrar(actual);
    });
    document.querySelector('#anterior').addEventListener('click', () => {
        actual = (actual - 1 + slides.length) % slides.length;
        mostrar(actual);
    });
}



const form = document.querySelector('.formulario');

if (form) {
    form.addEventListener('submit', (e) => {
        const nombre = form.nombre.value.trim();
        const correo = form.correo.value.trim();
        let errores = [];

        if (nombre === '') errores.push('El nombre es obligatorio.'); 
        if (!correo.includes("@")) errores.push('El correo debe ser válido.'); 

        if (errores.length > 0) {
            e.preventDefault();
            document.querySelector("#mensajes").textContent = errores.join
            (" ");
        }
    });
}
     
