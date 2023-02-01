<?php
    include ('conect.php');

    session_start();

    $email = $_SESSION["email"];

    $stmt = $conn->prepare("SELECT * FROM profiles WHERE email = '$email'");
    $stmt->execute(array('email' => $email));

    $result = $stmt->fetchAll();

    if (count($result)) {
        foreach($result as $row) {
            if ($email == $row[1]){
                echo "<script>
                        location.href='painel.php';
                      </script>";
            }    
        }  
    } else {
        echo "<script>
                location.href='registrar.php';
              </script>";
    }

?>