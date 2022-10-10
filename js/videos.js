
$(document).ready(function() {


    afficher_msg();
    var dataTable = $('#affiche_msg').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "affiche_videos.php",
            type: "post"
        }
    });

    function afficher_msg() {
        $.ajax({
            url: "affiche_videos.php",
            method: "POST",
            success: function(data) {
                // $('#liste_vente').html(data);
            }
        });
    }


  

    $('#user_forms').on('submit', function(event) {
        event.preventDefault();
        var video = $('#video').val();
        var libelle = $('#libelle').val();
        //alert(typeof(somme));

        

        if (libelle!='' || video!='') {
        var form_data = $(this).serialize();
        $.ajax({

            url: "action_video.php",
            method: "POST",
            data: form_data,
            success: function(data) {
                dataTable.ajax.reload();
                Swal.fire({
                    icon: 'success',
                    text: 'effectué avec success..'

                })

                $('#user_forms')[0].reset();

                setTimeout(function() {
                    $('#action_alerts').empty();
                }, 5000);
            }
        });
} else {
    Swal.fire({
        icon: 'error',
        title: 'Erreur...',
        text: 'Remplissez bien les champs ! '

    })

}
    });


     $(document).on('click', '.editer', function() {
        $('#action_alert').empty();
        var id = $(this).attr('id');
        var action = 'afficher';
        $.ajax({
            url: "action_video.php",
            method: "POST",
            data: { id: id, action: action },
            dataType: "JSON",
            success: function(reponse) {


                $('#Modal_msg').modal('show');
                //$('#id').val(reponse.id);
                $('#id_video').val(reponse.id_video);
                $('#video').val(reponse.video);
                $('#libelle').val(reponse.libelle);
                $('#date_ajout').val(reponse.date_ajout);
                $('#heure_ajout').val(reponse.heure_ajout);

                $('.modal-title').text('Modifier');
                $('#action').val('modifier');
                $('#hidden_id').val(id);
                $('#form_action').val('Validez');


            }
        });
    });








    $(document).on('click', '.suppr', function(){
        var id = $(this).attr("id");
        $('#id_conf').val(id);
        $('#supprModal').modal('show');
        $('#msg').html('');

    });

    $(document).on('submit', '#confirm', function (e) {
        e.preventDefault();
        $.ajax({
            url: "action_supprimer_videos.php",
            method: "POST",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function(data){
                    dataTable.ajax.reload();
                    Swal.fire({
                        icon: 'success',
                        text: 'supprimée avec success..'
    
                    })
    
                    $('#confirm')[0].reset();
    
                    // setTimeout(function() {
                    //     $('#action_alerts').empty();
                    // }, 5000); 
                    dataTable.ajax.reload();
                }

                // $('#msg').html(data);
                

           
        });

    });


});