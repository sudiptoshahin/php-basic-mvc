<?php require 'partials/head.php' ?>
    
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



<?php require 'partials/footer.php' ?>