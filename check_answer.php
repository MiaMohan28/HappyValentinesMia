<?php
header('Content-Type: application/json');

// Server-side correct answers (hidden from frontend)
$correctAnswers = ["mia", "mohan"];

$answer = strtolower(trim($_POST['answer'] ?? ''));

if ($answer === "") {
    echo json_encode(["status" => "blank"]);
} elseif (in_array($answer, $correctAnswers)) {
    echo json_encode(["status" => "correct"]);
} else {
    echo json_encode(["status" => "wrong"]);
}

?>