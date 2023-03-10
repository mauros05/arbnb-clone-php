<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/components/footer.css">

    <script src="https://kit.fontawesome.com/85c1e3eb43.js" crossorigin="anonymous"></script>
    
    <?php if(isset($data["Url_css"])){?>
        <link rel="stylesheet" href="<?php echo $data["Url_css"]?>">
    <?php }?>

    <?php if(isset($data["Title"])){?>
        <title><?php echo $data["Title"] ?></title>
    <?php }?>

</head>
<body class="bg-light">
