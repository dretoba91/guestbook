<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Guestbook</h1>
<ul>
<?php foreach ($guestbook as $guestbooks): ?>
    <li>
        <?= Html::encode("{$guestbook->name} ({$guestbook->email})") ?>:
        <?= $guestbook->message ?>
    </li>
<?php endforeach; ?>
</ul>



<?php

// use yii\helpers\Html;
// use yii\grid\GridView;
// use yii\data\ActiveDataProvider;

// $this->title = 'GuestBook';


// ?>

<!-- // <div class="site-index">

//     <div class="jumbotron">
//         <h1>Welcome!</h1>

//         <p class="lead">We want to welcome you to our official Guestbook App. </p>

     


//          <p><a class="btn btn-lg btn-success">View Guestbook.</a></p> 
    </div>
 </div>   -->



