"use strict"

const API_URL = "api/comentarios/"; 

let app = new Vue({
    el: "#app",
    data: {
        titulo: "Comentarios",
        comments: [],
    },

    methods: {
        addComment: function (e) {
            e.preventDefault();
    
        postComment();
        },
        
        delComment: function (id) {
            deleteComment(id);
        }
    }
});


function getProductID() {
    let id_producto = document.getElementById('listCommentsVue').getAttribute('data-idProducto');
    return id_producto;
}

async function getComments() {
    let id_producto = getProductID();
    try {
        
        let response = await fetch(API_URL + 'producto/' + id_producto);
        let nComments = await response.json();

        app.comments = nComments;
        console.log (nComments);
    } catch(e) {
        console.log(e);
    }
}

async function postComment() {
    
    var data = new FormData(formAddComment);
    let comment = {
        comentario: data.get('comentario'),
        puntuacion: data.get('puntuacion'),
        id_producto: getProductID(),
    }

    console.log (comment);

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
            app.comments.push(comment);
        }

    } catch(e) {
        console.log(e)
    }
}

async function deleteComment(id) {

        

        try {
            let response = await fetch(API_URL + id , {
                "method": "DELETE"
            });
            if (response.ok) {
                console.log("Comentario eliminado con exito");
            }
        }
        catch (e) {
            console.log(e);
        }
}

getComments();