<html>
<body>

    Nome: <?php echo $_POST["nome"]; ?><br>
    Email: <?php echo $_POST["email"]; ?><br>
    Mensagem: <?php echo $_POST["msg"]; ?><br>
    Arquivo: <?php $uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}

echo 'Aqui está mais informações de debug:';
print_r($_FILES);

print "</pre>"; ?>
    
</body>
</html> 
