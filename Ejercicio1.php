<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        function randomList($list){
            $random = rand(0,count($list) - 1);
            return $list[$random];
        }
    ?>
    <?php 
        $firstList = ['huevo', 'patata', 'sal'];
        $secondList = ['spaghetti', 'tomate', 'queso'];
        $thirdList = ['lechuga', 'zanahoria', 'atun', 'aguacate'];
        $list = [$firstList, $secondList, $thirdList];
        $fourthList = ['Tortilla' => $firstList, 'Ensalada' => $thirdList];
        $selectList = randomList($list);
        $selectListWithName = randomList($fourthList);
    ?>
    <ul>
        <?php foreach($selectList as $item): ?>
            <li><?php echo $item ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>