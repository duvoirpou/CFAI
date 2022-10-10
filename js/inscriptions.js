
$(document).ready(function() {


    afficher();
    var dataTable = $('#affiche').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "affiche_insc.php",
            type: "post"
        }
    });

    function afficher() {
        $.ajax({
            url: "affiche_insc.php",
            method: "POST",
            success: function(data) {
                // $('#liste_vente').html(data);
            }
        });
    }


  

    $('#user_forms').on('submit', function(event) {
        event.preventDefault();
        var etat = $('#etat').val();
        //alert(typeof(somme));

        

        if (etat != '' && etat=='traité') {
        var form_data = $(this).serialize();
        $.ajax({

            url: "action_inscriptions.php",
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
        text: 'Marquez comme "Traité" '

    })

}
    });


    $(document).on('click', '.editer', function() {
        $('#action_alert').empty();
        var id = $(this).attr('id');
        var action = 'afficher';
        $.ajax({
            url: "action_inscriptions.php",
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
                $('#id_app').val(reponse.id_app);
                $('#nom').val(reponse.nom);
                $('#prenom').val(reponse.prenom);
                $('#date_naiss').val(reponse.date_naiss);
                $('#lieu_naiss').val(reponse.lieu_naiss);
                $('#sexe').val(reponse.sexe);
                $('#adresse').val(reponse.adresse);
                $('#cni').val(reponse.cni);
                $('#email').val(reponse.email);
                $('#tel').val(reponse.tel);
                $('#date_insc').val(reponse.date_insc);
                $('#nom_pere').val(reponse.nom_pere);
                $('#prenom_pere').val(reponse.prenom_pere);
                $('#adresse_pere').val(reponse.adresse_pere);
                $('#ville_pere').val(reponse.ville_pere);
                $('#tel_pere').val(reponse.tel_pere);
                $('#nom_mere').val(reponse.nom_mere);
                $('#prenom_mere').val(reponse.prenom_mere);
                $('#adresse_mere').val(reponse.adresse_mere);
                $('#ville_mere').val(reponse.ville_mere);
                $('#tel_mere').val(reponse.tel_mere);
                $('#formation').val(reponse.formation);
                $('#etat').val(reponse.etat);

                $('.modal-title').text('Modifier');
                $('#action').val('modifier');
                $('#hidden_id').val(id);
                $('#form_action').val('Validez');


            }
        });
    });

});