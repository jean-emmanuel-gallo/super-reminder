document.addEventListener("DOMContentLoaded", (event) => {
    let todolist = document.querySelector(".taches")
    let btn = document.querySelector("#bouton")

    datalist = []
    btn.addEventListener("click", (event) => {
        event.preventDefault()
        let todoHTML = [];
        let taches = document.querySelectorAll(".tache")
        console.log(taches.values)
    //Ajout d'une clés valeurs a chaque taches
        let formData = new FormData();
        for(let i = 0; i < taches.length; i++){
            console.log(taches[i].textContent)
            formData.append(`task-${i}`,taches[i].textContent)
            }
        
        console.log(formData,'data')
    //Envoie des taches vers traitement.php
        fetch(`traitement.php?param1`, {
            method: 'POST',
            body: formData
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
    //Creations des taches
    add.addEventListener("click", () => {
        let replacementText = replacement.value
        let element = document.createElement("li")
        // let bouton = document.createElement("button")
        // bouton.innerHTML("bouton")
        // bouton.name = "Delete"
        // bouton.onclick = deleteTask()
        element.innerHTML = replacementText
        element.classList.add("tache")
        todolist.appendChild(element)
        // todolist.appendChild(bouton)
    })
    displayTask()
    //Récuperation des taches
    async function displayTask(){
        let result = await fetch('traitement.php?param2',{
            method: 'GET',
        })
        let response = await result.json()
        console.log(response)
    }
    //Suspression des taches quand "clique"
    let del = document.querySelector("#delete")
        console.log(del)
        del.addEventListener("click", () => {
            deleteTask()
        })
    
    //Fonction suspression
    async function deleteTask(){
        let finalResult = await fetch('traitement.php?param3',{
            method: 'DELETE',
        })
        let respond = await finalResult.json()
        console.log(respond)
    }
})