
$(document).ready(function() {


    afficher_msg();
    var dataTable = $('#affiche_msg').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "affiche_images.php",
            type: "post"
        }
    });

    function afficher_msg() {
        $.ajax({
            url: "affiche_images.php",
            method: "POST",
            success: function(data) {
                // $('#liste_vente').html(data);
            }
        });
    }


  

    $('#user_forms').on('submit', function(event) {
        event.preventDefault();
        var photo = $('#photo').val();
        var libelle = $('#libelle').val();
        //alert(typeof(somme));

        

        if (libelle!='' || photo!='') {
        var form_data = $(this).serialize();
        $.ajax({

            url: "action_images.php",
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
            url: "action_images.php",
            method: "POST",
            data: { id: id, action: action },
            dataType: "JSON",
            success: function(reponse) {
                // $('#erreur_avance').text('');
                // $('#avance').css('border-color', '');
                // $('#erreur_montant').text('');
                // $('#montant').css('border-color', '');
                // $('#erreur_prenoms_client').text('');
                // $('#prenoms_client').css('border-color', '');
                // $('#erreur_noms_client').text('');
                // $('#noms_client').css('border-color', '');


                $('#Modal_msg').modal('show');
                //$('#id').val(reponse.id);
                $('#id_img').val(reponse.id_img);
                $('#libelle').val(reponse.libelle);
                $('#photo').val(reponse.photo);
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
            url: "action_supprimer_images.php",
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