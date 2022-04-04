<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// get reffer server
is($_SERVER['HTTP_REFERER'] === "http://localhost:8000/"){
    //get data from GET Method
    $name = isset($_GET['name']) ? $_GET['name'] : null;
    $email = isset($_GET['email']) ? $_GET['email'] : null;
    $gender = isset($_GET['gender']) ? $_GET['gender'] : null;
    $content = isset($_GET['content']) ? $_GET['content'] : null;
}



?>