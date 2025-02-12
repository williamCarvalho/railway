<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['hub_mode']) && $_GET['hub_mode'] === 'subscribe') {
    $verify_token = "123123"; // O mesmo que você configurou no WhatsApp
    if ($_GET['hub_verify_token'] === $verify_token) {
        // Pega o JSON enviado pelo WhatsApp
        $json = file_get_contents("php://input");

        // Define um caminho para salvar o log (certifique-se que o diretório "temp" existe e tem permissão)
        $logFile = "temp/webhook_log.json";

        // Salva o JSON recebido no arquivo
        file_put_contents($logFile, $json . PHP_EOL, FILE_APPEND);

        echo $_GET['hub_challenge'];
        exit;
    } else {
        http_response_code(403);
        echo "Erro: Token de verificação inválido.";
        exit;
    }
}
