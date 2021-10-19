<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Login - sistemas</title>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="237928075703-h7mk6rg7mkde3u3sl2spv49dkgrdmaol.apps.googleusercontent.com">
</head>

<body>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>

    <p id='msg'></p>
    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            var userID = profile.getId();
            var userName = profile.getName();
            var userPicture = profile.getImageUrl();
            var userEmail = profile.getEmail();
            var userToken = googleUser.getAuthResponse().id_token;

            //document.getElementById('msg').innerHTML = userEmail;
            if (userEmail !== '') {
                var dados = {
                    userID: userID,
                    userName: userName,
                    userPicture: userPicture,
                    userEmail: userEmail
                };
                $.post('valida.php', dados, function(retorna) {
                    if (retorna === '"erro"') {
                        var msg = "Usuário não encontrado com esse e-mail";
                        document.getElementById('msg').innerHTML = msg;
                    } else {
                        window.location.href = retorna;
                    }

                });
            } else {
                var msg = "Usuário não encontrado!";
                document.getElementById('msg').innerHTML = msg;
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>