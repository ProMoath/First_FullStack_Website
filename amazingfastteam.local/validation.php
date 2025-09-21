<?php
    function testData($data){
        return htmlspecialchars(stripcslashes(trim($data)));
    }

    function validate(&$error){
        // Name Validation
        if(empty($_POST['name']))
            $error['name'] = "Name is required!";
        else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST['name']))
            $error['name'] = "Name is NOT in correct form!";
        else
            $_POST['name'] = testData($_POST['name']);

        // Email Validation
        if(empty($_POST['email']))
            $error['email'] = "Email is required!";
        else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            $error['email'] = "Email is NOT in correct form!";
        else
            $_POST['email'] = testData($_POST['email']);

        // Message Secure
        $_POST['message'] = testData($_POST['message']);
    }
?>