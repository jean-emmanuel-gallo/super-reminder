document.addEventListener("DOMContentLoaded", (event) => {
    let todolist = document.querySelector(".taches")
    let btn = document.querySelector("#bouton")

    datalist = []
    btn.addEventListener("click", (event) => {
        event.preventDefault()
        let todoHTML = ""
        let taches = document.querySelectorAll(".tache")
        console.log(taches)
        taches.forEach(paragraphe => {
            todoHTML +=  " "  + paragraphe.innerHTML
        })

        fetch(`traitement.php?param1=${encodeURIComponent(todoHTML)}`, {
            method: 'GET'
        })
        .then(response => {
            return response.text();
        })
        .then(data => {
            console.log('Data received:', data);
        })
        .catch(error => {
            console.error('Error:', error);
        })
    })

    let add = document.querySelector("#add");
    let replacement = document.querySelector("#todoAdd");

    add.addEventListener("click", () => {
        let replacementText = replacement.value
        let element = document.createElement("li")
        element.innerHTML = replacementText
        element.classList.add("tache")
        todolist.appendChild(element)
    })
})
