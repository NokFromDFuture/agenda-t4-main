<?php

require_once('../classes/Contato.class.php');

$c = new Contato();

$c->id = $_POST['id'];
$c->nome = $_POST['nome'];
$c->email = $_POST['email'];
$c->telefone = $_POST['telefone'];


if($c->Atualizar()==1){

  header('Location: ../agenda.php');
}else{
    echo "Falha ao modificar.";
}
?>