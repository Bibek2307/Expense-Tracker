<?php
function my_alert($color,$msg)
{
?>
<div style="position:absolute; right:20px; top:20px;" id="alert" class="alert alert-<?php echo $color ?> alert-dismissible fade show" role="alert">
  <?php echo $msg ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<script>
    setTimeout(function() {
        bootstrap.Alert.getOrCreateInstance(document.querySelector(".alert")).close();
    }, 1500)
</script>
<?php
}

function check_login(){
  if(!isset($_SESSION['is_login'])==true){
    header("Location: login_user.php");
}
}
?>

