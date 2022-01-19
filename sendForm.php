<?php
include("./config.php");

extract($_POST);
if(isset($_POST['nome']) && isset($_POST['cor']) && isset($_POST['placa']) && isset($_POST['ano']) && isset($_POST['cidade'])){
    $nome = $_POST['nome'];
    $cor = $_POST['cor'];
    $placa = $_POST['placa'];
    $ano = $_POST['ano'];
    $cidade = $_POST['cidade'];

    global $pdo;
    $sql = $pdo->prepare("INSERT INTO `cars`(nome, cor, placa, ano, cidade) 
    VALUES (?,?,?,?,?)");
    $sql->execute(array($nome,$cor,$placa,$ano,$cidade));
    if($sql->rowCount() > 0){
        $row = $sql->fetchAll(PDO::FETCH_ASSOC);
    }else{
        header("Location: ./index.php");
        die();
    }
    return $sql;
}else{
    header("Location: ./index.php");
    die();
}

?>
