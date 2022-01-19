<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO PHP-MYSQL-AJAX</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="h2">
        <h2>FORMULÁRIO VEÍCULOS</h2>
    </div>
    <!--Alert-->
    <div id="alert-form"></div>
    
    <div class="formulario">
            <form method="POST">
                <!--nome-->
                <div class="forms">
                    <label for="nome">Nome<br>
                        <input type="text" name="nome" id="nome" placeholder="Digite o Nome do Veículo" maxlength="50" required>
                    </label><br>
                </div>
                <!--cor-->
                <div class="forms">
                    <label for="cor">Cor<br>
                        <input type="text" name="cor" id="cor" placeholder="Digite a Cor" maxlength="50" required>
                    </label>
                </div>
                <!--placa-->
                <div class="forms">
                    <label for="placa">Placa<br>
                        <input type="text" name="placa" id="placa" placeholder="Digite a Placa" maxlength="50" required>
                    </label>
                </div>
                <!--ano-->
                <div class="forms">
                    <label for="ano">Ano<br>
                        <input type="text" name="ano" id="ano" placeholder="Digite o Ano" maxlength="50" required>
                    </label>
                </div>
                <!--cidade-->
                <div class="forms">
                    <label for="cidade">Cidade<br>
                        <input type="text" name="cidade" id="cidade" placeholder="Digite a Cidade" maxlength="50" required>
                    </label>
                </div>
                <!--button-->
                <button type="button" name="submit" id="submit">Cadastrar</button>
                  <!--Alert-Success-->
                <div id="alert-success"></div>
            <!--Form-->
            </form>
    </div>
    <!--script-->
    <script src="./jquery.js"></script>
    <script src="./script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>