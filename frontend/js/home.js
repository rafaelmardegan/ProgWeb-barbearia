function addButton(){
     var btn = document.createElement('Btn');
     btn.classList.add('btn');
     btn.classList.add('btn-primary');
     btn.classList.add('btn-lg');

     var lbl = document.createTextNode("js_button");   
     btn.appendChild(lbl);   

     btn.onclick = function(){
         alert('JS ESTA FUNCIONANDO')
     };
       

    document.getElementsByClassName("add_buttons")[0].append(btn);
}