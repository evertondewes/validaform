<html>
<head>
    <script>
        function enviar() {
            var email = document.getElementById("e").value;
            var endereco = document.getElementById("ende").value;

            if(email.length>0 && endereco.length>0) {
                alert('é um ou outro, não pode ser os dois');
                return false;
            }
            if(email.length == 0 && endereco.length == 0) {
                alert('preencha UM e um único!');
                return false
            }
            return true;

        }
    </script>
</head>
<body>
<form method="post" onsubmit="return enviar();">
    Entre OU com o email OU com o Endereço: <br>
    e-mail:<input type="email" name="email" id="e"  /><br>
    Endereco:<input type="text" name="endereco" id="ende"  /><br>
    <input type="submit" name="Enviar" />
</form>
</body>
</html>

<?php

$botao = filter_input(INPUT_POST, "Enviar", FILTER_SANITIZE_STRING);

if(isset($botao)) {

    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING);

    if(strlen($email) > 0 &&  strlen($endereco) > 0) {
        die('é um OU outro! Os dois não pode!');
    }

    if(strlen($email) == 0 &&  strlen($endereco) == 0) {
        die('Escolha ao menos um!');
    }

    echo 'E ae guri! Tenho um brique bom pra ti!';

}
