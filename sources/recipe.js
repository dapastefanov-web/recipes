var i = 0;
var j = 0;
function add_ingredient(){
    i++;
    //add ingredient input box and button for it's deletion
    let ingrediant_input = `<div>
    <input type = "text" name = "ingredient_${i}">
    <button type="button" onclick = "delete_container(this)">
    delete
    </button>
    <br><br></div>`
    //insert ingredient <div> to the page
    document.getElementById('ingredient').insertAdjacentHTML("beforeend", ingrediant_input);
}
function add_prep_step(){
    j++;
    //add preperation step input box and button for it's deletion in a <div>
    let step_input = `<div>
    <input type = "text" name = "step_${j}">
    <button type="button" onclick = "delete_container(this)">
    delete
    </button>
    <br><br></div>`
    //insert preperation <div> to the page
    document.getElementById('preperation').insertAdjacentHTML("beforeend", step_input);
}
function delete_container(element){
    element.parentElement.remove();
}
function change_favorite(){
    favorite_checkbox = document.getElementById("favorite");
    favorite_recipe = document.getElementById("favorite").value.split(",");
    console.log("raboti 1");
    if (favorite_checkbox.checked){
        localStorage.setItem("favorite_recipe|" + favorite_recipe[0], favorite_recipe);
    }
    if (!favorite_checkbox.checked){
        localStorage.removeItem("favorite_recipe|" + favorite_recipe[0]);
    }
}
