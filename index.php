<?php
// Webhook para WhatsApp Business API

// Pegando os dados da requisição
$data = file_get_contents("php://input");
$logFile = "log.txt";

// Salvando os dados recebidos (para testes)
file_put_contents($logFile, $data . PHP_EOL, FILE_APPEND);

// Resposta para o servidor do WhatsApp
header("Content-Type: application/json");
echo json_encode(["status" => "success"]);
