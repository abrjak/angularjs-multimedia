<?php
    include('db-connector.php');

    session_start();

    $form_data = json_decode(file_get_contents('php://input'));
        
    $username = $form_data['email'];
    $password = $form_data['password'];

    

?>