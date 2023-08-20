<?php
    include ('conect.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = '$email'");
    $stmt->execute(array('email' => $email));

    $result = $stmt->fetchAll();

    if (count($result)) {
        foreach($result as $row) {
            if ($senha == $row[2] && $email == $row[1]){
                session_start();

                $_SESSION["email"] = $email;
                $_SESSION["logado"] = 1;

                echo "<script>
                        location.href='perfil.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Acesso Inválido')
                        location.href='index.php'
                      </script>";
            }
        }
    } else {
        echo "<script>
                alert('Acesso Inválido')
                location.href='index.php'
              </script>";
    }

?>