<?php
 use yii\helpers\Html;

 ?>
<h1>Instituições</h1>
<ul>
    <?php foreach($institutions as $institution):?>
        <li>
            <?= $institution->name;?> - <?= $institution->grade;?>
        </li>
    <?php endforeach;?>
</ul>
