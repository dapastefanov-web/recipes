var i = 0;
var j = 0;
function add_ingredient(){
    i++;
    let ingrediant_input = `<div>
    <input type = "text" name = "ingredient_${i}">
    <button type="button" onclick = "delete_container(this)">
    delete
    </button>
    <br><br></div>`
    document.getElementById('ingredient').insertAdjacentHTML("beforeend", ingrediant_input);
}
function add_prep_step(){
    j++;
    let step_input = `<div>
    <input type = "text" name = "step_${j}">
    <button type="button" onclick = "delete_container(this)">
    delete
    </button>
    <br><br></div>`
    document.getElementById('preperation').insertAdjacentHTML("beforeend", step_input);
}
function delete_container(element){
    element.parentElement.remove();
}