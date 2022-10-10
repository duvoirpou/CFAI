
$(document).ready(function() {


    $(document).on('submit', '#formulaire', function(e) {
        e.preventDefault();
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var date_naiss = $('#date_naiss').val();
        
        if (nom != '' && prenom != '' && date_naiss != '') {
            var data = $(this).serialize();
            
                    //afficher_commandes();
                    //dataTable.ajax.reload();
                    Swal.fire({
                        icon: 'success',
                        text: 'Envoyé avec succès !'
                    });
            $.ajax({
                url: "ajout_inscription.php",
                method: "POST",
                data: data,
                dataType: "JSON",
                success: function(response) {
                    
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                text: 'Remplissez tout le formulaire !'
            })
        };
        $('#formulaire')[0].reset();
    });
});