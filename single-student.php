<?php require_once './database/connection.php'; ?>

<?php
$form_input = file_get_contents("php://input");
$_POST = json_decode($form_input, true);

if (isset($_POST['submit'])) {
    $student_id = $_POST['id'];
    $sql = "SELECT * FROM `students` WHERE `id` = $student_id";
    $result = $conn->query($sql);
    $student = $result->fetch_assoc();
    echo json_encode($student);
}