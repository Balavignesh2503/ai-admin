<?php 
if(isset($_SESSION['message'])):

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?=$_SESSION['message']; ?>
  <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
</body>
</html>
<?php 
unset($_SESSION['message']);
endif;
?>