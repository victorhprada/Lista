<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="Lista.css">
        <meta charset="UTF-8">
        <title>Lista</title>
        
    </head>
    <body>
        <?php

        $usuarios = array(
            array("nome" => 'victor', "email" => "victor@teste", "idade" => "21"), 
            array("nome" => 'ronaldo', "email" => "ronaldo@teste", "idade" => "30"), 
            array("nome" => 'mariana', "email" => "mari@teste", "idade" => "22"), 
            array("nome" => 'luiz', "email" => "luiz@teste", "idade" => "56"),
        );

        
        ?>
        <table>
            <thead>
                <tr>
                <?php 
                    foreach($usuarios as $usuario) {
                        echo implode(",", $usuario) . "\n";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                    
                    
                    </td>

                </tr>
            </tbody>
        </table>
    </body>
</html>

