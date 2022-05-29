<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        header {
            background-color: lightgreen;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <h1>Hello <?= $name ?></h1>
    </header>
    
    <!-- <ul>
        <?php foreach($names as $i=> $name): ?>
            <li><?= $i ?>. <?= $name ?></li>
        <?php endforeach; ?>
    </ul> -->

    <!-- associative array -->
    <!-- <ul>
        <?php foreach($person as $key=> $val): ?>
            <li><strong><?= $key ?></strong> <?= $val ?></li>
        <?php endforeach ?>
    </ul> -->

    <ul>
        <?php foreach($tasks as $task): ?>
            <li>
                <?php if($task->completed): ?>
                    <strike><?= $task->description ?></strike>
                <?php else: ?>
                    <?= $task->description ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>