const validarDatos = ()=>{
    let verificar = true;
    //alert(document.getElementById('title_text'));

    if(!document.getElementById('title_text').value){
        alert('El campo titulo es requerido');
        document.getElementById('title_text').focus();
        verificar = false;
    }
    if(!document.getElementById('description_text').value){
        alert('El campo descripción es requerido');
        document.getElementById('description_text').focus();
        verificar = false;
    }
    if(verificar === true){
        document.valida_datos.submit();
   }
}


window.onload = ()=>{
    document.getElementById('btn_guardar').onclick= validarDatos;
    
}