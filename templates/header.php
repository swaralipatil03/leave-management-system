<?php 
    $server_name = $_SERVER['SERVER_NAME'];
    $base = "http://".$server_name."/Leave_Management_System";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Management System</title>
    <link rel="stylesheet" href=" <?php echo $base; ?>/assets/css/style.css">
    <link rel="stylesheet" href=" <?php echo $base; ?>/assets/css/bootstrap.min.css">
    <script src=" <?php echo $base; ?>/assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>