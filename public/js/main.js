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
