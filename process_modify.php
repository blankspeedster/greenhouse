<?php
    include("dbh.php");
    if(isset($_POST['add_log'])){
        $temperature = $_POST['temperature'];
        $moisture = ucfirst($_POST['moisture']);
        $device_id = 1;

        $mysqli->query(" INSERT INTO logs ( device_id, temperature, moisture) VALUES('$device_id','$temperature','$moisture') ") or die ($mysqli->error);

        $_SESSION['notification'] = "Log has been added!";
        $_SESSION['msg_type'] = "success";

        header("location: modify.php");
    }

    if(isset($_GET['clear_log'])){
        $device_id = $_GET['clear_log'];

        $mysqli->query("DELETE FROM logs WHERE device_id = '$device_id' ") or die ($mysqli->error);

        $_SESSION['notification'] = "Logs has been cleared!";
        $_SESSION['msg_type'] = "danger";

        header("location: modify.php");
    }

?>