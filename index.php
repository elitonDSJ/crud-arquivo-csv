<?php
    $path = 'data.csv';
    $retorno = file_get_contents($path);
    $data = explode(',',$retorno);
    $itens = explode(';',$retorno);

    var_dump($itens);
    echo count($itens);
    
    if(!isset($nome) and isset($link)){
        $nome = $_GET['nome'];
        $link = $_GET['link'];
        $message = 'Existem';
    }else{
        $message = 'Variaveis vazias';

    }

    echo $message;
    



    

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Listagem</title>
</head>
<body>
    <div class="geral">
        <section class="section1">
            <form action="" method="get">
                <fieldset>
                    <legend>Novo Registro</legend>
                    <div>
                        <div>
                            <label for="nome">Nome do Programa</label>
                            <input type="text" name="nome" id="nome">
                        </div>
                        <div>
                            <label for="nome">Nome do Programa</label>
                            <input type="text" name="link" id="link">
                        </div>

                        <input type="submit" value="Gravar">
                    </div>
                </fieldset>
            </form>
        </section>
        <section class="section2">
            <fieldset>
                <legend>Lista de dados</legend>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>NOME</td>
                            <td>AÇÃO</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        echo"
                        <tr>
                            <th>$data[0]</th>
                            <th>$data[2]</th>
                            <th><a href='$data[1]'>Baixar</a></th>
                        </tr>
                            
                        "
                    
                    ?>
                    </tbody>
                </table>
            </fieldset> 
        </section>
    </div>
</body>
</html>