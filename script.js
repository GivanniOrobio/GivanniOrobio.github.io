const urlRemota = "https://apinodetestpython.onrender.com/imagenes.json";
const urlRemotaTextos = "https://apinodetestpython.onrender.com/textos.json";
const urlLocal = "assets/data/imagenes.json";
const urlLocalTextos = "assets/data/textos.json";
let imagenesCache = null;
let textosCache = null;

async function obtenerImagenes() {
    if (imagenesCache) return imagenesCache;
    try {
        const response = await fetch(urlLocal + "?t=" + Date.now());
        if (!response.ok) throw new Error("No se pudo cargar el backup local de imagenes");
        const data = await response.json();
        imagenesCache = data;
        return data;
    } catch (err) {
        console.error("No se pudo cargar imágenes localmente", err);
        return [];
    }
}

async function obtenerTextos() {
    if (textosCache) return textosCache;
    try {
        const response = await fetch(urlLocalTextos + "?t=" + Date.now());
        if (!response.ok) throw new Error("No se pudo cargar el backup local de textos");
        const data = await response.json();
        textosCache = data;
        return data;
    } catch (err) {
        console.error("No se pudo cargar textos localmente", err);
        return [];
    }
}

// Función genérica para asignar imágenes a elementos
async function asignarImagenes(elementos) {
    const imagenes = await obtenerImagenes();
    elementos.forEach(({ selector, nombre }) => {
        const elemento = document.querySelector(selector);
        const imagen = imagenes.find(e => e.nombre === nombre);
        if (elemento && imagen) {
            if (elemento.tagName === "IMG") {
                elemento.src = imagen.imagen_url;
            } else {
                // Si no es img, asignar como background-image
                elemento.style.backgroundImage = `url(${imagen.imagen_url})`;
            }
        }
    });
}

// Función genérica para asignar textos a elementos
async function asignarTextos(elementos) {
    const textos = await obtenerTextos();
    elementos.forEach(({ selector, titulo }) => {
        const elemento = document.querySelector(selector);
        if (!elemento) return;
        const texto = textos.find(e => e.titulo === titulo);
        if (texto) {
            if (elemento.tagName === "A" && selector.includes("telefono")) {
                // Para enlaces telefónicos, asignar href y texto
                elemento.textContent = texto.contenido;
                elemento.href = "tel:" + texto.contenido;
            } else {
                elemento.textContent = texto.contenido;
            }
        }
    });
}
//funcion icono setting
async function cargarIconos() {
    await asignarImagenes([
        { selector: ".header-logo", nombre: "logo" },
        { selector: ".header-logo2", nombre: "logo" }
        { selector: ".icon1", nombre: "icon-1" },
        { selector: ".icon2", nombre: "icon-2" },
        { selector: ".icon3", nombre: "icon-3" },
        { selector: ".phone", nombre: "phone" },
        { selector: ".address", nombre: "address" }
    ]);
}
