<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Funcionários</title>
    <link rel="stylesheet" text="text/css" href="estilo.css">
</head>
<body>
<?php
require ("config.php");
?>

<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$setor = $_POST['setor'];
$cargo = $_POST['cargo'];
$foto = $_POST['foto'];

//$sql = 'INSERT INTO funcionarios (nome, email, setor, cargo, foto) 
//        VALUES (:nome, :email, :setor, :cargo, :foto)';

//$stmt = $conexao->prepare($sql);

//$params = array(
//    ':nome' => $nome, 
//    ':email' => $email, 
//    ':setor' => $setor, 
//    ':cargo' => $cargo, 
//    ':foto' => $foto
//);

//$stmt->execute($params);

$sql = 'INSERT INTO funcionarios (nome, email, setor, cargo, foto) VALUES (?, ?, ?, ?, ?)';

$sth = $dbh->prepare($sql);
$sth->execute(array($nome,$email,$setor,$cargo,$foto));

echo "<script>
          alert('Funcionário cadastrado com sucesso.');
      </script>
      <meta http-equiv='refresh' content='0, url=index.php'>
";
?>
</body>
</html>