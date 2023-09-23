document.addEventListener("DOMContentLoaded", (event) => {
    let todolist = document.querySelectorAll("p")
    let btn = document.querySelector("#bouton")

    datalist = []
    btn.addEventListener("click", (event) => {
        event.preventDefault()
        let todoHTML = ""

        todolist.forEach(paragraphe => {
            todoHTML += paragraphe.innerHTML
        })

        fetch(`traitement.php?param1=${encodeURIComponent(todoHTML)}`, {
            method: 'GET'
        })
        .then(response => {
            return response.text();
        })
        .then(data => {
            console.log('Data received:', data.slice(3));
        })
        .catch(error => {
            console.error('Error:', error);
        })
    })

    let add = document.querySelector("#add");
    let replacement = document.querySelector("#todoAdd");

    add.addEventListener("click", () => {
        let replacementText = replacement.value

        todolist.forEach((paragraphe, i) => {
            let result = paragraphe.innerHTML.replace(/{{placeholder}}/g, replacementText)
            paragraphe.innerHTML = result

            datalist[i] = result
            console.log(datalist[i])
        })
    })
})
