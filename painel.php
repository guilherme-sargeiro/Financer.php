<?php
    session_start();

    $logado = $_SESSION["logado"];

    if ($logado == 1) {
        echo "
            <!DOCTYPE html>
            <html lang='pt-br'>
            <head>
                <!-- Meta tags Obrigatórias -->
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

                <!-- Bootstrap CSS -->
                <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

                <title>Financer</title>
            </head>
            <body class='bg-success'>
                <div class='container'>
                    <div class='row'>
                        <h1 class='text-white display-5 font-italic font-weight-bold'>Financer</h1>
                    </div>
                    <div class='row'>
                        <h1 class='text-white display-5 font-italic font-weight-bold'>Painel do Usuário</h1>
                        <a href='sair.php' class='btn btn-success btn-md btn-block'>Sair</a>
                    </div>
                </div>
                <div class='container'>
                    <div class='row'>
                        <div class='col-5 bg-light' style='margin-top: 5%;'>
                            User
                        </div>
                        <div class='col-1' style='margin-top: 5%;'>
                        </div>
                        <div class='col-2 bg-light' style='margin-top: 5%;'>
                            Dados 1
                        </div>
                        <div class='col-1' style='margin-top: 5%;''>
                        </div>
                        <div class='col-2 bg-light' style='margin-top: 5%;'>
                            Dados 2
                        </div>
                    </div>
                </div>



                
                <!-- JavaScript (Opcional) -->
                <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
                <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
                <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
            </body>
            </html>";

    } else {
        echo "<script>
                alert('Não está logado')
                location.href='index.php'
              </script>";
    }
?>