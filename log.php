<?php

header("Content-Type: application/json");
if (file_exists("/tmp/log.txt")) {
    echo nl2br(file_get_contents("/tmp/log.txt"));
} else {
    echo "O arquivo de log não existe.";
}
