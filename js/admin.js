
$(document).ready(function() {


    afficher_msg();
    var dataTable = $('#affiche').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "affiche_admin.php",
            type: "post"
        }
    });

    function afficher_msg() {
        $.ajax({
            url: "affiche_admin.php",
            method: "POST",
            success: function(data) {
                // $('#liste_vente').html(data);
            }
        });
    }


  

    $('#user_forms').on('submit', function(event) {
        event.preventDefault();
        var login = $('#login').val();
        //alert(typeof(somme));

        

        if (login != '') {
        var form_data = $(this).serialize();
        $.ajax({

            url: "action_admin.php",
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
        text: 'Marquez comme "Lu" '

    })

}
    });


    $(document).on('click', '.editer', function() {
        $('#action_alert').empty();
        var id = $(this).attr('id');
        var action = 'afficher';
        $.ajax({
            url: "action_admin.php",
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
                $('#id_contact').val(reponse.id);
                $('#nom').val(reponse.nom);
                $('#prenom').val(reponse.prenom);
                $('#login').val(reponse.login);
                $('#password').val(reponse.password);
                $('#etat').val(reponse.etat);

                $('.modal-title').text('Modifier');
                $('#action').val('modifier');
                $('#hidden_id').val(id);
                $('#form_action').val('Validez');


            }
        });
    });

});