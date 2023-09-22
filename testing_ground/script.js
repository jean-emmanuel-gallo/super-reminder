document.addEventListener("DOMContentLoaded", (event) => {
    let todolist = document.querySelectorAll("p")
    let btn = document.querySelector("#bouton")
    btn.addEventListener("click", (event) => {
       event.preventDefault()
       let todoHTML = "";

       todolist.forEach(todolist => {
        todoHTML += todolist.innerHTML;
    });

       fetch(`traitement.php?param1=${encodeURIComponent(todoHTML)}`, {
           method: 'GET',
        //    headers: {
        //        'Content-Type': 'application/x-www-form-urlencoded',
           },
        //    body: 'todoHTML=' + encodeURIComponent(todolist.innerHTML))
       )
        .then(response => {
        return response.text();
        })
        .then(data => {
            console.log('Data received:', data.slice(3));
        })
        .catch(error => {
            console.error('Error:', error);
        });
})

})
