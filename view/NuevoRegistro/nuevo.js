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