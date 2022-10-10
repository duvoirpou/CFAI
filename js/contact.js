
$(document).ready(function() {


    $(document).on('submit', '#contact_form', function(e) {
        e.preventDefault();
        var identite = $('#identite').val();
        var tel = $('#tel').val();
        var msg = $('#msg').val();
        
        if (identite != '' && tel != '' && msg != '') {
            var data = $(this).serialize();
            
                    //afficher_commandes();
                    //dataTable.ajax.reload();
                    Swal.fire({
                        icon: 'success',
                        text: 'Envoyé avec succès !'
                    });
            $.ajax({
                url: "ajout_contact.php",
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
        $('#contact_form')[0].reset();
    });
});