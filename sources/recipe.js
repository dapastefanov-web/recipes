//adding and editing functions

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
    document.getElementById("ingredient").insertAdjacentHTML("beforeend", ingrediant_input);
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
    document.getElementById("preperation").insertAdjacentHTML("beforeend", step_input);
}

function delete_container(element){
    element.parentElement.remove();
}

//favorite recipes functions
var favorite = {
    recipes : [],
    init : function(){
        if (localStorage.favorite_recipes){
            this.recipes = JSON.parse(localStorage.favorite_recipes);
        }
    },
    is_set : function (id){
        this.recipes.forEach(function(element){
            if (element.id === id){
                document.getElementById("favorite").checked = true;
            }
        });
    },
    save : function (){
        localStorage.favorite_recipes = JSON.stringify(this.recipes);       
    },
    change : function (checkbox, id, name){
        if (checkbox.checked){   
            this.recipes.push({
                "id": id,
                "name": name
            });
            this.save();
        }
        else {
            this.remove(id);
        }
    },
    remove : function (id){
        let new_recipes = [];
        this.recipes.forEach(function(element){
            if (element.id !== id){
                new_recipes.push(element);
            }
        });
        this.recipes = new_recipes;
        this.save();
    },
    list : function(){
        this.recipes.forEach(function(element){
            let recipe = 
            `<li><a href = /recipe/?id=${element.id}>
                ${element.name}
            <a></li>`
            document.getElementById("favorites").insertAdjacentHTML("beforeend", recipe);
        })
    }
};

var view_history = {
    recipes : [],
    init : function(){
        if (localStorage.history){
            this.recipes = JSON.parse(localStorage.history);
        }
    },
    save : function (){
        localStorage.history = JSON.stringify(this.recipes);       
    },
    add : function (id, name){ 
        this.recipes.push({
            "id": id,
            "name": name
        });
        if (this.recipes.length > 20){
            this.recipes.shift();
        }
        this.save();
    },
    list : function(){
        this.recipes.toReversed().forEach(function(element, index){
            if (index === 5){
                return 0;
            }
            let recipe = 
            `<li style><a href = /recipe/?id=${element.id}>
                ${element.name}
            <a></li>`
            document.getElementById("history").insertAdjacentHTML("beforeend", recipe);
        })
    }
}
var rating = {
    rated : [],
    init : function(){
        if (localStorage.rated){
            this.rated = JSON.parse(localStorage.rated);
        }
    },
    is_set : function (id){
        this.rated.forEach(function(element){
            if (element === id){
                document.getElementById("rating").remove();
            }
        });
    },
    save : function (){
        localStorage.rated = JSON.stringify(this.rated);       
    },
    add : function(id){
        this.rated.push(id);
        this.save();
    },
    rate : function(input){
        for (i = 5; i > 0; i--){
            document.getElementById(i + "_star").checked = false
        }
        for (input; input > 0; input--){
            document.getElementById(input + "_star").checked = true
        }
    },
}