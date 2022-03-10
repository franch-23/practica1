function deleteRow(row){
    var d = row.parentNode.parentNode.rowIndex;
    document.getElementById('dsTable').deleteRow(d);
    
 }