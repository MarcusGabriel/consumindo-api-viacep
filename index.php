<?php
    require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang='pt-BR'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Testando API</title>
    </head>
    <body>
        <label for="CEP">CEP: </label>
        <input type="text" id="cep"/>
        <button id="envia">Enviar</button>
        <hr>
        <fieldset>
            <legend>Dados</legend>
            <table>
                <thead>
                    <tr>
                        <td><label for="logradouro">rua</label></td>
                        <td><input type="text" id="logradouro" name='logradouro' ></td>                        
                    </tr>
                    <tr>
                        <td><label for="bairro">Bairro</label></td>
                        <td><input type="text" id='bairro' name="bairro" ><br></td>
                    </tr>
                    <tr>
                        <td><label for="localidade">cidade</label></td>
                        <td><input type="text" id='localidade' name="localidade" ><br></td>
                    </tr>
                    <tr>
                        <td><label for="ibge">IBGE</label></td>
                        <td><input type="text" id='ibge' name="ibge" ></td>
                    </tr> 
                    <tr>                    
                        <td><label for="uf">ESTADO</label></td>
                        <td><input type="text" id='uf' name="uf" ></td>
                    </tr>
                </thead>
            </table>
        </fieldset>
        <script src='public/js/jquery-3.1.1.js'></script>
        <script src='public/js/custom.js'></script>
        <script src='public/js/teste.js'></script>

        <div id='showData'></div>
    </body>
</html>