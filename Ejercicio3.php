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
            <? foreach($list as $item): ?>
                <tr>
                    <td rowspan="4"><?php echo $item["Nombre"]?></td>
                    <td>Clave</td>
                    <td>Valor</td>
                    <? foreach($item as $key => $data): ?>
                        <tr>
                            <td><?php echo $key ?></td>
                            <td><?php echo $data ?></td>
                        </tr>
                    <? endforeach ?>
                </tr>
            <? endforeach ?>
        </tbody>
    </table>
</body>
</html>