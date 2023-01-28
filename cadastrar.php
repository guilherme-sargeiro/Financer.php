<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Financer</title>
  </head>
  <body class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-white display-3 font-italic font-weight-bold" style="margin-top: 40%;">Financer</h1>
                <h4 class="text-white font-italic font-weight-light">Finalize seu cadastro</h4>
            </div>
                
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 25rem; margin-top: 30%; margin-left: 5%;">
                    <div class="card-body text-center">
                        <form action="cad.php" method="POST">
                            <h5 class="card-title">Cadastrar</h5><br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">E-mail:</span>
                                </div>
                                <input type="text" class="form-control" name="email" aria-label="" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Senha:</span>
                                </div>
                                <input type="password" class="form-control" name="senha" aria-label="" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Confirme a Senha:</span>
                                </div>
                                <input type="password" class="form-control" name="confsenha" aria-label="" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <input type="submit" class="btn btn-success btn-md btn-block" value="Cadastrar"><br>
                            <hr></hr><br>
                            <a href="index.php" class="btn btn-success btn-md btn-block">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>