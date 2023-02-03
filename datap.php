<?php
    include ('conect.php');

    session_start();

    $email = $_SESSION["email"];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    

    $stmt = $conn->prepare("INSERT INTO profiles (email, nome, telefone) VALUES (:email, :nome, :telefone)");

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);

    if ($stmt->execute()) {
        echo "<script>
                alert('Dados Salvos');
                location.href='perfil.php';
            </script>";
    } else {
        echo "<script>
                alert('Erro ao Salvar');
                location.href='index.php';
            </script>";
    }
?>