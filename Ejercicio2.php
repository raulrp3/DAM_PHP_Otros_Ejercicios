<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        function randomListWithKeys($list){
            $keys = array_keys($list);
            $random = rand(0, count($keys) - 1);
            return $keys[$random];
        }
    ?>
    <?php
        $list = ['Tortilla' => ['huevo', 'patata', 'sal'], 'Ensalada' => ['lechuga', 'zanahoria', 'atun', 'aguacate']];
        $key = randomListWithKeys($list);
    ?>
    <table border="1">
        <thead>
            <th><?php echo $key?></th>
        </thead>
        <tbody>
            <?php foreach($list[$key] as $item): ?>
                <tr>
                    <td><?php echo $item ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>