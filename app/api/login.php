<?php
    include('db-connector.php');

    session_start();

    $form_data = json_decode(file_get_contents('php://input'));
        $validation_error = '';

        if(empty($form_data->email)){
            $error[] = 'Email is Required';
        } else {
            
        }
?>