"use strict"

const API_URL = "api/comentarios/"; 

let app = new Vue ({
    el: "#app",
    data: {
        titulo: "Lista de comentarios",
        comentarios: [],
    }
})



async function getComments() {
    try {
        let response = await fetch (API_URL);
        let comments = await response.json();

        app

    } catch(e) {
        console.log(e);
    }  
} 

function addComment(e) {
    // e.preventDefault();
    // let data = new FormData(form);
    // let comentario = {
    //     id
    // }
}

getComments();