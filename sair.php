<?php
    session_start();

    $sair = session_destroy();

    if ($sair == true) {
        echo "<script>
                location.href='index.php';
              </script>";
    } else {
        echo "Erro!";
    }
?>