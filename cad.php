<?php
    include ('conect.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confsenha = $_POST['confsenha'];

    if ($senha == $confsenha) {
    
      $stmt = $conn->prepare("INSERT INTO users (email, senha) VALUES (:email, :senha)");

      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':senha', $senha);

      if ($stmt->execute()) {
          echo "<script>
                  alert('Cadastro Realizado');
                  location.href='index.php';
                </script>";
      } else {
          echo "<script>
                  alert('Erro ao Cadastrar');
                  location.href='cadastrar.php';
                </script>";
      }
    } else {
        echo "<script>
                alert('Senhas não conferem!');
                location.href='cadastrar.php';
              </script>";
    }
?>