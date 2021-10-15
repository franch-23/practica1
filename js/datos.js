
let table = document.createElement('table');
let thead = document.createElement('thead');
let tbody = document.createElement('tbody');


table.appendChild(thead);
table.appendChild(tbody);


document.getElementById('dsTable').appendChild(table);


let row_1 = document.createElement('tr');
let heading_1 = document.createElement('th');
heading_1.innerHTML = "Nombre";
let heading_2 = document.createElement('th');
heading_2.innerHTML = "Apellido";
let heading_3 = document.createElement('th');
heading_3.innerHTML = "Telefono";
let heading_4 = document.createElement('th');
heading_4.innerHTML = "Email";
let heading_5 = document.createElement('th');
heading_5.innerHTML = "Acciones";



row_1.appendChild(heading_1);
row_1.appendChild(heading_2);
row_1.appendChild(heading_3);
row_1.appendChild(heading_4);
row_1.appendChild(heading_5);
thead.appendChild(row_1);



let row_2 = document.createElement('tr');
let row_2_data_1 = document.createElement('td');
row_2_data_1.innerHTML = "Fran";
let row_2_data_2 = document.createElement('td');
row_2_data_2.innerHTML = "Romero";
let row_2_data_3 = document.createElement('td');
row_2_data_3.innerHTML = "645717349";
let row_2_data_4 = document.createElement('td');
row_2_data_4.innerHTML = "franciscoballedta4@gmail.com";


row_2.appendChild(row_2_data_1);
row_2.appendChild(row_2_data_2);
row_2.appendChild(row_2_data_3);
row_2.appendChild(row_2_data_4);
tbody.appendChild(row_2);


let row_3 = document.createElement('tr');
let row_3_data_1 = document.createElement('td');
row_3_data_1.innerHTML = "Mario";
let row_3_data_2 = document.createElement('td');
row_3_data_2.innerHTML = "Romero";
let row_3_data_3 = document.createElement('td');
row_3_data_3.innerHTML = "66728463";
let row_3_data_4 = document.createElement('td');
row_3_data_4.innerHTML = "marioromero4@gmail.com";



row_3.appendChild(row_3_data_1);
row_3.appendChild(row_3_data_2);
row_3.appendChild(row_3_data_3);
row_3.appendChild(row_3_data_4);
tbody.appendChild(row_3);

function deleteRow(row){
    var d = row.parentNode.parentNode.rowIndex;
    document.getElementById('dsTable').deleteRow(d);
 }