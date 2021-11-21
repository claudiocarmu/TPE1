"use strict"

const API_URL = "api/comentarios/"; 

let app = new Vue({
    el: "#app",
    data: {
        titulo: "Comentarios",
        comments: [],
    }
});

// let form = document.querySelector("formAltaComentario");
// form.addEventListener('submit', addComment);

async function getComments() {
    let id_producto = document.getElementById('listCommentsVue').getAttribute('data-idProducto');
    try {
        
        let response = await fetch(API_URL + 'producto/' + id_producto);
        let nComments = await response.json();

        app.comments = nComments;
        console.log (nComments);
    } catch(e) {
        console.log(e);
    }
}

async function addComment(e) {
    e.preventDefault();
    let data = new FormData(form);
    let comment = {
        comentario: data.get('comentario'),
        puntuacion: data.get('puntuacion'),
        // id_producto: data.get('idProducto'),
    }

    console.log(comment);
    return;

    try {
        let response = await fetch(API_URL, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(comment),
        });

        if (response.ok) {
            let comment = await response.json();
            app.comment.push(comment);
        }

    } catch(e) {
        console.log(e)
    }
}

// function render(comments) {
//     let list = document.querySelector('#listaComentarios');
//     list.innerHTML = "";
//     for (const comment of comments) {
//             let html = `<tr>
//                             <td>${comment.comentario}</td> 
//                             <td>${comment.puntuacion}</td> 
//                         </tr>`;
            
//             list.innerHTML += html ;
//     }
// }


getComments();