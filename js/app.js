"use strict"

const API_URL = "api/comentarios/"; 



async function getComments() {
    try {
        let response = await fetch (API_URL);
        let comments = await response.json();

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