<?php
header('Content-Type: application/json');

$server = "172.30.0.2";
$username = "HOSVITAL";
$password = "CCQ2019Clinica";
$database = "HOSVITAL";

try {
    $conn = new PDO("sqlsrv:server=$server;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query4 = "SELECT 
    ltrim(rtrim(FecRadi)) FecRadi, 
    ltrim(rtrim(Radicador)) Radicador, 
    ltrim(rtrim(TipDoc)) TipDoc, 
    ltrim(rtrim(Documento)) Documento,
    ltrim(rtrim(Paciente)) Paciente,
    ltrim(rtrim(Tel1)) Tel1,
    ltrim(rtrim(tel2)) tel2,
    ltrim(rtrim(Cups1)) Cups1,
    ltrim(rtrim(Cups2)) Cups2,
    ltrim(rtrim(Cups2)) Cups3,
    ltrim(rtrim(Cups2)) Cups4,
    ltrim(rtrim(Cups2)) Cups5,
    ltrim(rtrim(Cups2)) OtroCups,
    ltrim(rtrim(Cups2)) OtroProcedimiento,
    ltrim(rtrim(Cups2)) Esp,
    ltrim(rtrim(Cups2)) Especialista, Eps, TipoContrato, Regimen, Anestesia, FecAnestesia, Observacion, Comentarios FROM RADICACIONCX";
    $ej = $conn->prepare($query4);
    $ej->execute();
    $results = $ej->fetchAll(PDO::FETCH_ASSOC);
       
    
    echo json_encode($results);
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>



