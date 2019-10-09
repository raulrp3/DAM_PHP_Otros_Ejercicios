<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $pablo = ["Nombre" => "Pablo", "Profesión" => "Ministro", "Edad" => 50];
        $roberto = ["Nombre" => "Roberto", "Profesión" => "Agricultor", "Edad" => 45];
        $list = [$pablo, $roberto];
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Clave</th>
                <th colspan="2">Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($list as $item){
                    echo '<tr>';
                    echo '<td rowspan="4">'.$item['Nombre'].'</td>';
                    echo '<td>Clave</td>';
                    echo '<td>Valor</td>';
                    foreach($item as $key => $data){
                        echo '<tr>';
                        echo '<td>'.$key.'</td>';
                        echo '<td>'.$data.'</td>';
                        echo '</tr>';
                    }
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>