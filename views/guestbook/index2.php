<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Guestbook</h1>
<ul>
<?php foreach ($guestbooks as $guestbook): ?>
    <li>
        <?= $guestbook->message ?>
    </li>
<?php endforeach; ?>
</ul>



<?php
