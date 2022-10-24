<?php

$db = mysqli_connect('localhost', 'root', '', 'contacts_1');

$first_name = "";
$last_name = "";
$email = "";
$subject = "";
$message = "";
$errors = array();

if (isset($_POST['sent_btn'])) {
    contact();
}

// NEW CONTACT
function contact() {

    global $db, $errors, $first_name, $last_name, $email, $subject, $message;

    $to = "dido@goliveuk.com";
    $first_name = ($_POST['First_name']);
    $last_name = ($_POST['Last_name']);
    $email = ($_POST['email']);
    $subject = ($_POST['Subject']);
    $message = ($_POST['Message']);
    $first_name_escape = mysqli_real_escape_string($db, $first_name);
    $last_name_escape = mysqli_real_escape_string($db, $last_name);

    if (empty($first_name)) {
        array_push($errors, "First name is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($subject)) {
        array_push($errors, "Subject is required");
    }
    if (empty($message)) {
        array_push($errors, "Message is required");
    }
    if (mb_strlen($first_name) < 3) {
        array_push($errors, "The name is too short");
    }
    if (count($errors) == 0) {

        $query = "INSERT INTO new_contact (First_name, Last_name, email, Subject, Message) 
					  VALUES('$first_name', '$last_name', '$email', '$subject', '$message')";
        mysqli_query($db, $query);

        $headers = "From: $email \r\n";
        mail($to, $subject, $message, $headers);
        header('location: index.php');
    }
}

//ERRORS
function display_error() {
    global $errors;

    if (count($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '</div>';
    }
}

//EDIT INFORMATION
if (isset($_POST['edit_btn'])) {
    $id = $_GET['id'];
    $first_name_update = $_POST['updateFirst_name'];
    $last_name_update = $_POST['updateLast_name'];
    $emailupdate = $_POST['update_email'];
    $updateSubjec = $_POST['updateSubject'];
    $updateMessage = $_POST['updateMessage'];

    if (!empty($first_name_update) && !empty($emailupdate) && !empty($updateSubjec) && !empty($updateMessage)) {

        $q = mysqli_query($db, "UPDATE new_contact SET First_name= '$first_name_update', Last_name= '$last_name_update', email= '$emailupdate', Subject= '$updateSubjec', Message= '$updateMessage' WHERE id= '$id'");

        if (!$q) {
            die("failed");
        }
        header("location:results.php");
    } else {
        $error = "Error! No Changes Made";
    }
}

//DELETE INFORMATION
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM new_contact WHERE id= $id");
    header('location: index.php');
}
