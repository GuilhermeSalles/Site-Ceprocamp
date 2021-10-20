<?php include 'header-menu.php' ?>

<br>
<br>
<a href="../" onclick="signOut();">Sair</a>
<script>
    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function() {
            console.log('User signed out.');
        });
    }
</script>
<br>

<?php include 'footer.php' ?>