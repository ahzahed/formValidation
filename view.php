<?php
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $country_implode = implode(',',$country);
    $hobby = $_POST['hobby'];
    $hobby_implode = implode(',',$hobby);
    $message = $_POST['message'];

    $pass_valid = '/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/';
    $email_valid = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

    if(empty($name)){
        header('location:formvalidation.php?name_err='.'Please your name');
    }

    else if(empty($email)){
        header('location:formvalidation.php?email_err='.'Please write your email');
    }
    /* else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('location:formvalidation.php?email_err='.'Email format is not valid');
    } */
    //or
    else if(!preg_match($email_valid, $email)){
        header('location:formvalidation.php?email_err='.'Email format is not valid');
    }

    else if(empty($password)){
        header('location:formvalidation.php?pass_err='.'Write your password');
    }
    else if(!preg_match($pass_valid, $password)){
        header('location:formvalidation.php?pass_err='.'Password format is not valid');
    }
    else if(empty($repassword)){
        header('location:formvalidation.php?repass_err='.'Write your password again');
    }
    else if($repassword!=$password){
        header('location:formvalidation.php?repass_err='.'Password does not match');
    }


    else if(empty($dob)){
        header('location:formvalidation.php?dob_err='.'Select your birthday');
    }

    else if(empty($country)){
        header('location:formvalidation.php?country_err='.'Select your country');
    }

    else if(empty($hobby)){
        header('location:formvalidation.php?hobby_err='.'Select your hobby');
    }

    else if(empty($message)){
        header('location:formvalidation.php?msg_err='.'Please, write something.');
    }
    else if(str_word_count($message)>10){
        header('location:formvalidation.php?msg_err='.'Your sectence is more than 10 word.');
    }

    else{
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $password;
        echo "<br>";
        echo $repassword;
        echo "<br>";
        echo $dob;
        echo "<br>";
        echo $country_implode;
        echo "<br>";
        echo $hobby_implode;
        echo "<br>";
        echo $message;
    }
?>