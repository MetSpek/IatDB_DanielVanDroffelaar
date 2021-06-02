let checkbox_Hond = document.getElementById("Hond");
let checkbox_Kat = document.getElementById("Kat");
let checkbox_Vogel = document.getElementById("Vogel");
let checkbox_Rat = document.getElementById("Rat");
let checkbox_Reptiel = document.getElementById("Reptiel");
let checkbox_Anders = document.getElementById("Anders");
let list_of_soorten = document.getElementsByClassName("gridCard");

checkbox_Hond.checked = true;
checkbox_Kat.checked = true;
checkbox_Vogel.checked = true;
checkbox_Rat.checked = true;
checkbox_Reptiel.checked = true;
checkbox_Anders.checked = true;


for(let i = 0; i < list_of_soorten.length; i++){
    list_of_soorten[i].style.display = "";
}


checkbox_Hond.addEventListener('change', function(){
    filter(checkbox_Hond, "Hond");
});

checkbox_Kat.addEventListener('change', function(){
   filter(checkbox_Kat, "Kat");
});

checkbox_Vogel.addEventListener('change', function(){
    filter(checkbox_Vogel, "Vogel");
}); 

checkbox_Rat.addEventListener('change', function(){
    filter(checkbox_Rat, "Rat");
}); 

checkbox_Reptiel.addEventListener('change', function(){
    filter(checkbox_Reptiel, "Reptiel");
}); 

checkbox_Anders.addEventListener('change', function(){
    filter(checkbox_Anders, "Anders");
}); 

function filter(checkbox, filter){
    if(checkbox.checked){
        changeDisplay(filter, "");
    } else {
        changeDisplay(filter, "none");
    }
}

function changeDisplay(filter, style){
    for(let i = 0; i < list_of_soorten.length; i++){
        if(list_of_soorten[i].dataset.soort == filter){
            list_of_soorten[i].style.display = style;
        }
    }
}