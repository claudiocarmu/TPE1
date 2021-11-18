"use strict"

const API_URL = "api/comentarios/"; 

async function getComments() {
    try {
        let response = await fetch (API_URL);
        let comments = await response.json();
        render(comments);

    } catch(e) {
        console.log(e);
    }  
} 

function addComment() {

}

function render(comments) {
    let list = document.querySelector('#listaComentarios');
    list.innerHTML = "";
    for (const comment of comments) {
        let html = `<tr>
                        <td>${comment.comentario}</td> 
                        <td>${comment.puntuacion}</td> 
                    </tr>`;
        
        list.innerHTML += html ;
    }
}


getComments();