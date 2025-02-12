<?php

// if (isset($_REQUEST['hub_mode']) && $_REQUEST['hub_mode'] === 'subscribe') {
//     $verify_token = "123123"; // O mesmo que você configurou no WhatsApp
//     if ($_REQUEST['hub_verify_token'] === $verify_token) {
// Pega o JSON enviado pelo WhatsApp
$json = file_get_contents("php://input");

// Define um caminho para salvar o log (certifique-se que o diretório "temp" existe e tem permissão)
$logFile = "/tmp/webhook_log.json";

if (file_exists($logFile)) {
    $jasonFile = file_get_contents($logFile);
    $data1 = json_decode($jasonFile, true);
    $data2 = json_decode($json, true);

    $mergedData = array_merge($data1, $data2);

    $mergedJson = json_encode($mergedData, JSON_PRETTY_PRINT);

    file_put_contents($logFile, $mergedJson . PHP_EOL);
} else {
    // Salva o JSON recebido no arquivo
    file_put_contents($logFile, $json . PHP_EOL);
}

// echo $_REQUEST['hub_challenge'];
exit;
//     } else {
//         http_response_code(403);
//         echo "Erro: Token de verificação inválido.";
//         exit;
//     }
// }
