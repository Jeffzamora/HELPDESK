function init(){
    $("#ticket_form").on("submit",function(e){
        guardaryeditar(e);
    });

}

$(document).ready(function() {
    $('#tick_descrip').summernote({
        height:100
    });

    $.post("../../controller/tipo.php?op=combo",function(data,status){
        $('#tipo_id').html(data);
    });

    $.post("../../controller/proceso.php?op=combo",function(data,status){
        $('#proceso_id').html(data);
    });

});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#ticket_form")[0]);
    $.ajax({
        url:"../../controller/ticket.php?op=insert",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            $('#tipo_id').val('reset');
            $('#proceso_id').val('reset');
            $('#tick_orden').val('');
            $('#tick_acta').val('');
            $('#tipo_descrip').summernote('reset');
            swal("Correcto!","Registrado Correctamente","success");
        }
    });
}

init();