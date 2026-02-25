<?php

require_once'db.php';

try {

  $database = new Database();
  $db = $database->getConnection();
  if($db){
    echo "sucesso: A ponte com o Banco de Dados funcionou";
  }
} catch(Execption $e){
    echo "error: Algo deu errado na tentativa de solução"

}
?>
