
document.addEventListener("DOMContentLoaded", function () {

    const formulario = document.getElementById("contact-form");

    if (!formulario) return;

    formulario.addEventListener("submit", function (evento) {

        const nombre = document.getElementById("nombre").value.trim();
        const correo = document.getElementById("correo").value.trim();
        const fecha = document.getElementById("fecha").value;
        const tema = document.getElementById("tema").value;
        const acepto = document.getElementById("acepto").checked;

        const recomendacion = formulario.querySelector(
            'input[name="recomendacion"]:checked'
        );

        let errores = [];

        if (nombre.length < 2) {
            errores.push("Escribe tu nombre.");
        }

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo)) {
            errores.push("Escribe un correo válido.");
        }

        if (!fecha) {
            errores.push("Selecciona una fecha.");
        }

        if (!tema) {
            errores.push("Selecciona un tema.");
        }

        if (!recomendacion) {
            errores.push("Selecciona una recomendación.");
        }

        if (!acepto) {
            errores.push("Debes aceptar la confirmación.");
        }

        if (errores.length > 0) {
            evento.preventDefault();
            alert(errores.join("\n"));
        }

    });

});
