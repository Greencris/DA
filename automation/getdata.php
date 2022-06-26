<?php
    $date  = isset($_POST['date']) ? date('d/m/Y',strtotime($_POST['date'])) : "";

    $timestamp = strtotime($date);
   
    // Create the new format from the timestamp
    $d = date("d-m-Y", $timestamp);
    echo $date;

   

?>