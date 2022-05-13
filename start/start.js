document.addEventListener(`click`, function (e)
{
    var idSélectionné = e.target.id;
    localStorage.setItem("id",idSélectionné)
    console.log(localStorage)
    document.location.href="../Canvas/" 
})

