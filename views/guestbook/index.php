<?php

use yii\helpers\Html;
use yii\widgets\LinkerPager;

?>

<h1>GuestBook</h1>
<ul>
<?php foreach ($guestbooks as $guestbook): ?>

    <li>
        <?= $guestbook->message ?>
    </li>

<?php endforeach; ?>


</ul>