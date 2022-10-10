
$(document).ready(function () {


    $(document).on('submit', '#formulaire', function (e) {
        e.preventDefault();
        var nom_user = $('#nom_user').val();
        var prenom_user = $('#prenom_user').val();
        var pseudo = $('#pseudo').val();
        var mpass = $('#mpass').val();
        var tel = $('#tel').val();
        var confirm = $('#confirm').val();

        if (nom_user != '' && prenom_user != '' && pseudo != '' && confirm != '' && tel != '' && mpass != '') {

            if (mpass == confirm) {
                var data = $(this).serialize();

                $.ajax({
                    url: "ajout_user.php",
                    method: "POST",
                    data: data,
                    // dataType: "JSON",
                    success: function(data) {
                        $('#msg').html(data);
                    }
                });
                

            } else {
                Swal.fire({
                    icon: 'error',
                    text: 'Confirmation du mot de passe incorrecte !'
                })
            }



        } else {
            Swal.fire({
                icon: 'error',
                text: 'Remplissez tout le formulaire !'
            })
        };



    });



});