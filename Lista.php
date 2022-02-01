<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="Lista.css">
        <meta charset="UTF-8">
        <title>Lista</title>
        
    </head>
    <body>
        <?php
        $usuario1 = [
            'Nome' => 'Victor',
            'E-mail' => 'victor@teste',
            'Idade' => '21'
        ];

        $usuario2 = [
            'Nome' => 'Ronaldo',
            'E-mail' => 'ronaldo@teste',
            'Idade' => '30'
        ];

        $usuario3 = [
            'Nome' => 'Mariana',
            'E-mail' => 'mariana@teste',
            'Idade' => '22'
        ];

        $usuario4 = [
            'Nome' => 'Luiz',
            'E-mail' => 'luiz@teste',
            'Idade' => '56'
        ];

        $contasUsuarios = [$usuario1, $usuario2, $usuario3, $usuario4];

        /*foreach($contasUsuarios as $usuario) {
            echo $usuario['Nome'];
        }*/
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                    <?php 
                    foreach($contasUsuarios as $usuario){
                        echo $usuario['Nome'] . PHP_EOL;
                    }
                    ?></td>
                    <th>E-mail:</th>
                    <td>
                    <?php 
                    foreach($contasUsuarios as $usuario){
                        echo $usuario['E-mail'] . PHP_EOL;
                    }
                    ?></td>
                    </td>
                    <th>Idade:</th>
                    <td>
                    <?php 
                    foreach($contasUsuarios as $usuario){
                        echo $usuario['Idade'] . PHP_EOL;
                    }
                    ?></td>

                </tr>
            </tbody>
        </table>
    </body>
</html>

