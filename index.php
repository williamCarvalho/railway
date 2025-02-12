<?php
// Webhook para WhatsApp Business API

// Pegando os dados da requisição
$data = file_get_contents("php://input");
$logFile = "/tmp/log.txt";

// Salvando os dados recebidos (para testes)
if (is_writable("/tmp/")) {
    file_put_contents($logFile, $data . PHP_EOL, FILE_APPEND);
} else {
    error_log("O diretório /tmp/ não é gravável!");
    die();
}

// Resposta para o servidor do WhatsApp
header("Content-Type: application/json");
echo json_encode(["status" => "success"]);

echo "<a href='./log.php'>acessar log<a/>";
