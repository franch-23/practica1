
var lista = [
    {id:"0", nombre: "fran" , apellido:"Romero" , email:"francisco@gmail.com" , telefono:"645717349"},
    {id:"1", nombre: "Luis" , apellido:"Romero" , email:"francisco@gmail.com" , telefono:"645717349"},
    {id:"2", nombre: "Mario" , apellido:"Romero" , email:"francisco@gmail.com" , telefono:"645717349"},
    {id:"3", nombre: "Pepe" , apellido:"Romero" , email:"francisco@gmail.com" , telefono:"645717349"}
];

window.onload=function(){
    let table = document.querySelector('#table');

    cuerpo();
}


function cabezera(){

    let Acciones = document.createElement("th");
    Acciones.innerHTML="Acciones";

    let Nombre = document.createElement("th");
    Nombre.innerHTML="Nombre";

    let Apellidos = document.createElement("th");
    Apellidos.innerHTML="Apellidos";

    let email = document.createElement("th");
    email.innerHTML="email";

    let telefono = document.createElement("th");
    telefono.innerHTML="telefono";

    let fila = document.createElement("tr");

    fila.appendChild(Acciones);
    fila.appendChild(Nombre);
    fila.appendChild(Apellidos);
    fila.appendChild(email);
    fila.appendChild(telefono);
    
    table.appendChild(fila);
}


function cuerpo(){
    cabezera();

    let tr;
    let td;

    for(let i of lista){
        tr=document.createElement("tr");
        td=document.createElement("td");

        td.appendChild(BotonBorrar());
        td.appendChild(BotonModificar());
        tr.appendChild(td);

        td = document.createElement("td");
        td.innerHTML=i.nombre;
        tr.appendChild(td);

        td = document.createElement("td");
        td.innerHTML=i.apellido;
        tr.appendChild(td);

        td = document.createElement("td");
        td.innerHTML=i.email;
        tr.appendChild(td);

        td = document.createElement("td");
        td.innerHTML=i.telefono;
        tr.appendChild(td);

        table.appendChild(tr);
        
    }
}

 function BotonBorrar(){
     let button = document.createElement("button")
     let i = document.createElement("i");
     i.setAttribute("class","fas fa-user-times");
     button.appendChild(i);

     button.addEventListener("click",(event) => {
       
        Swal.fire({
            title: 'Borrado',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'si quiero borrar!'
          })  

        event.target.parentNode.parentNode.remove()

    })

    return button;
 }
 
 function BotonModificar(){
    let button = document.createElement("button")
    let i = document.createElement("i");
     i.setAttribute("class","far fa-edit");
     button.appendChild(i);

    button.addEventListener("click",(event) => {
        modificar();

        Swal.fire({
            title: 'Seguro que quiere modificar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'si quiero modificra!'
          })  
    })
   return button; 
}

function enviar(){
    
    
    var nombre = document.getElementById("nombre");
    var apellido = document.getElementById("apellido");
    var email = document.getElementById("email");
    var telefono = document.getElementById("telefono");
    var table = document.getElementById("table");
    var table = table.insertRow(-1);
    table = table.insertCell(0)
     

    var datos = " " + nombre.value + " "+ apellido.value +" "+ email.value +" "+ telefono.value +" ";
    table.innerHTML= datos ;

    console.log(nombre);
    
}

function modificar(){
    let form=document.getElementById("modificar");
    form.style.display="block";

}

