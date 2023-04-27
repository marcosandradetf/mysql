<html>
<body>

    Nome: <?php echo $_POST["nome"]; ?><br>
    Email: <?php echo $_POST["email"]; ?><br>
    Mensagem: <?php echo $_POST["msg"]; ?><br>
    Arquivo: <?php $arquivo = $_FILES["arquivo"];
  			move_uploaded_file($arquivo["tmp_name"], "uploads/".$arquivo["name"]); ?>
    
</body>
</html> 
