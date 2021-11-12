"use strict"

const API_URL = "api/comentarios/"; 



async function getComments() {
    try {
        let response = await fetch (API_URL);
        let comments = await response.json();

        console.log(comments);
    } catch(e) {
        console.log(e);
    }
    
}

getComments();