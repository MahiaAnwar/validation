<?php
session_start();

//print_r($_REQUEST);
$title_req = $_REQUEST['title'];
$detail_req = $_REQUEST['detail'];
$author_req = $_REQUEST['author'];

$errors = [];


if (empty($title_req)) {
    $errors['title_error'] = 'where is title?';
} else if (strlen($title_req) < 10) {
    $errors['title_error'] = 'r koto?';
}


if (empty($detail_req)) {
    $errors['detail_error'] = 'where is details?';
} else if (strlen($detail_req) < 10) {
    $errors['detail_error'] = "r koto";
}

if (empty($author_req)) {
    $errors['author_error'] = 'where is author?';
} else if (strlen($author_req) < 10) {
    $errors['author_error'] = "r koto?";
}


if (count($errors) > 0) {
    //backward 
    $_SESSION['old'] = $_REQUEST;
    $_SESSION["form_error"] = $errors;
    header("Location: ../controller/index.php");
} else {
    //forward
};
