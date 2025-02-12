<?php

// if (isset($_REQUEST['hub_mode']) && $_REQUEST['hub_mode'] === 'subscribe') {
//     $verify_token = "123123"; // O mesmo que você configurou no WhatsApp
//     if ($_REQUEST['hub_verify_token'] === $verify_token) {
// Pega o JSON enviado pelo WhatsApp
$json = file_get_contents("php://input");

// Define um caminho para salvar o log (certifique-se que o diretório "temp" existe e tem permissão)
$logFile = "/tmp/webhook_log.json";

// Salva o JSON recebido no arquivo
file_put_contents($logFile, $json . PHP_EOL);

// echo $_REQUEST['hub_challenge'];
exit;
//     } else {
//         http_response_code(403);
//         echo "Erro: Token de verificação inválido.";
//         exit;
//     }
// }
