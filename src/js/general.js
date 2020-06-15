let Employee_list_btn = document.getElementById("Employee_list_btn");
let add_Employee_btn = document.getElementById("add_Employee_btn");
let change_Employee_info_btn = document.getElementById('change_Employee_info_btn');
let Employee_request_btn = document.getElementById("Employee_request_btn");

let change_Employee_info = document.getElementById('change_Employee_info');
let Employee_list = document.getElementById("Employee_list");
let add_Employee = document.getElementById("add_Employee");
let Employee_request = document.getElementById("Employee_request");



Employee_list_btn.addEventListener('click', ()=> {
    add_Employee.style.display = 'none';
    Employee_list.style.display = 'block';
    change_Employee_info.style.display = 'none';
    Employee_request.style.display = 'none';
 
})
add_Employee_btn.addEventListener('click', ()=> {
    add_Employee.style.display = 'block';
    Employee_list.style.display = 'none';
    change_Employee_info.style.display = 'none';
    Employee_request.style.display = 'none';
 
})
change_Employee_info_btn.addEventListener('click', ()=> {
    add_Employee.style.display = 'none';
    Employee_list.style.display = 'none';
    change_Employee_info.style.display = 'block';
    Employee_request.style.display = 'none';
 
})
Employee_request_btn.addEventListener('click', ()=> {
    add_Employee.style.display = 'none';
    Employee_list.style.display = 'none';
    change_Employee_info.style.display = 'none';
    Employee_request.style.display = 'block';
 
})

$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
