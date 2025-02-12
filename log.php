<?php
$logFile = "temp/webhook_log.json";

if (file_exists($logFile)) {
    // Lê o conteúdo do arquivo
    $json = file_get_contents($logFile);

    // Decodifica o JSON para um array PHP
    $data = json_decode($json, true);

    // Exibe formatado (para debug)
    echo "<pre>";
    print_r($data);
    echo "</pre>";
} else {
    echo "Arquivo de log não encontrado!";
}
