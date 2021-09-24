function addButton(){
     var btn = document.createElement('Btn');
     btn.classList.add('btn');
     btn.classList.add('btn-light');
     btn.classList.add('btn-lg');

     var lbl = document.createTextNode("js_button");   
     btn.appendChild(lbl);   

    document.getElementsByClassName("add_buttons")[0].append(btn);
}


function alertButton(){
    alert('JS ESTA FUNCIONANDO')
}

function returnButton(){
    window.scrollTo(0,0);
}