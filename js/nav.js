fetch("nav.html")
    .then(Response => Response.text())
    .then((nav)=> {
        document.querySelector("header").innerHTML = nav;
    });