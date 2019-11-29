<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашно</title>
</head>
<body>

<h1>Task For The Day</h1>


        <ul>
        <?php foreach ($task as $heading => $value) : ?>
            <li>
                <strong><?= ucwords($heading); ?>: </strong> <?=$value; ?>
            
        </li>
        <?php endforeach; ?>

          <br>      


        <li><strong>шо ќе правме: </strong> <?= $task['title']; ?></li>
        <li><strong>оти: </strong> <?= $task['due']; ?></li>
        <li><strong>koj ќе славе: </strong> <?= $task['assignet_to']; ?></li>

<strong>Status: </strong>


            <?php if($task['completed'])  : ?>

            <span class="icon">&#9989;</span>

            <?php endif;?>

            <li><strong>време е за: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete' ;?></li>


            <strong>Status: </strong>

<?php
        if ($task['completed']) {
            echo '<span class="icon">&#9989;</span>';

        } else {
            echo'Incomplete';

        }
    ?>
    
        <li><strong>време е за: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete' ;?></li>

</ul>

</body>
</html>