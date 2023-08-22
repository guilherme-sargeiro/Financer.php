<?php
    include ('conect.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confsenha = $_POST['confsenha'];

    $stmt1 = $conn->prepare("SELECT * FROM users WHERE email = '$email'");
    $stmt1->execute(array('email' => $email));

    $result1 = $stmt1->fetchAll();

    if (count($result1)) {
      foreach($result1 as $row1) {
          if ($email == $row1[1]) {

              echo "<script>
                      alert('E-mail Já Cadastrado');
                      location.href='index.php';
                    </script>";
                    
          } else if ($senha == $confsenha) {
    
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
      }
    }
?>