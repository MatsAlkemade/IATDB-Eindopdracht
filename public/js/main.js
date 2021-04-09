const navButton = document.getElementById('js--navButton');
const navDropdown = document.getElementById('js--navDropdown');
const adminPanel = document.getElementById('js--adminPanel');

navButton.addEventListener('click', function(){
    if(navDropdown.style.display === 'none'){
        navDropdown.style.display = 'block';
    }else {
        navDropdown.style.display = 'none';
    }
});

document.addEventListener('click', function(e){
    if(e.target.classList.contains('js--nc')){
        return;
    } else {
        navDropdown.style.display = 'none';
    }
});

function goBack() {
    window.history.back();
}

function checkIfAdmin(){
    if(adminPanel.dataset.checkIfAdmin == 'Admin'){
        adminPanel.style.display = "block"
    }else{
        adminPanel.style.display = "none"
    }
}

checkIfAdmin();

let checkbox_dog = document.getElementById("dog");
let checkbox_cat = document.getElementById("cat");
let list_of_pets = document.getElementsByClassName("petFilter");

if(checkbox_dog){
    checkbox_dog.checked = true;
    checkbox_cat.checked = true;
    
    checkbox_dog.addEventListener('change', function(){
        if(checkbox_dog.checked){
            for(let i = 0; i < list_of_pets.length; i++){
                if(list_of_pets[i].dataset.kindOfPet === 'Hond'){
                    list_of_pets[i].style.display = '';
                }
            }
        }
        else {
            for(let i = 0; i < list_of_pets.length; i++){
                if(list_of_pets[i].dataset.kindOfPet === 'Hond'){
                    list_of_pets[i].style.display = 'none';
                }
            }
        }
    });
    
    checkbox_cat.addEventListener('change', function(){
        if(checkbox_cat.checked){
            for(let i = 0; i < list_of_pets.length; i++){
                if(list_of_pets[i].dataset.kindOfPet === 'Kat'){
                    list_of_pets[i].style.display = '';
                }
            }
        }
        else {
            for(let i = 0; i < list_of_pets.length; i++){
                if(list_of_pets[i].dataset.kindOfPet === 'Kat'){
                    list_of_pets[i].style.display = 'none';
                }
            }
        }
    });
    
}

