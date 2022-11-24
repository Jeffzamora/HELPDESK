function init(){

}

$(document).ready(function() {

});

$(document).on("click","#btntecnico", function(){

    if ($('#rol_id').val()==1){
        $('#lbltitulo').html("Acceso Tecnico");
        $('#btntecnico').html("Acceso Admin");
        $('#rol_id').val(2);
    }else{
        $('#lbltitulo').html("Acceso Admin");
        $('#btntecnico').html("Acceso Tecnico");
        $('#rol_id').val(1);
    }

});

init();