<?php include 'header-menu.php' ?>
<?php
session_start();
if (!empty($_SESSION['id'])) {
    
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
    header("Location: ../");
}
?>

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