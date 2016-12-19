$("#registro").click(function(){
    var dato = $("#genere").val();
    var route = "http://localhost:8000/genere";
    var token = $("#token").val();

    $.ajax({
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data:{genere: dato},

            success:function(){
                    $("#msj-success").fadeIn();
            },           
            error:function(msj){
                    $("#msj").html(msj.responseJSON.genere);
                    $("#msj-error").fadeIn();
            }
    });
        
});