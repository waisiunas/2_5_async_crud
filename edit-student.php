<?php require_once('./database/connection.php'); ?>
<?php

$form_data = file_get_contents("php://input");
$_POST = json_decode($form_data, true);

if(isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $gender = htmlspecialchars($_POST['gender']);
    $id = htmlspecialchars($_POST['id']);

    if(empty($name)) {
        echo json_encode(['nameError' => 'Please provide your name from PHP']);
    } elseif(empty($gender)) {
        echo json_encode(['genderError' => 'Please provide your gender from PHP']);
    } else {
        $sql = "UPDATE `students` SET `name` = '$name', `gender` = '$gender' WHERE `id` = $id";
        if($conn->query($sql)) {
            echo json_encode(['success' => 'Magic has been spelled']);
        } else {
            echo json_encode(['error' => 'Magic has failed to spell']);
        }
    }
}
