<?php
require_once 'db.php';

try {
    $database = new Database(); 
    $db = $database->getConnection();

    if ($db) {
        echo "✅ Conexão estabelecida com sucesso!<br><br>";
        echo "<b>Listagem de Livros:</b><br>";

       
         $stmt = $db->query("SELECT * FROM Livros");

   
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
            echo "Id: " . $row['id_livro'] . "<br>\n";
            echo "Título: " . $row['titulo'] . "<br>\n";
            echo "Autor: " . $row['autor'] . "<br>\n";
            echo "Descrição: " . $row['descricao'] . "<br>\n";
            echo "<hr>";
        }
    }
} catch (Exception $e) {
    
    echo "❌ Erro: " . $e->getMessage();
}
?>