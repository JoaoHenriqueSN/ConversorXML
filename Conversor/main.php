<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use NFePHP\DA\NFe\Danfe;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['xmlFile'])) {
    $xmlTmp = $_FILES['xmlFile']['tmp_name'];
    $xml = file_get_contents($xmlTmp);

    try {
        $danfe = new Danfe($xml);
        $danfe->debugMode(false);

        $pdf = $danfe->render();

        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="danfe.pdf"');
        echo $pdf;

    } catch (Exception $e) {
        echo "Erro ao gerar nota: " . $e->getMessage();
    }
} else {
    echo "Nenhum arquivo recebido";
}
