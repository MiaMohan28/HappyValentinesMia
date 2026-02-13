<?php
header('Content-Type: application/json');

// Server-side IGN answer
$correctIGN = ["legendaryninja28"];

$answer = strtolower(trim($_POST['answer'] ?? ''));

if ($answer === "") {
    echo json_encode(["status" => "blank"]);
} elseif (in_array($answer, $correctIGN)) {
    echo json_encode(["status" => "correct"]);
} else {
    echo json_encode(["status" => "wrong"]);
}
