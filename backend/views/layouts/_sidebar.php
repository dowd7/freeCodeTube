<?php

use yii\bootstrap4\Nav;

?>
<aside class="sidebar" style="margin-top: 50px;">
    <?php echo Nav::widget([
        'options' => ['class' => 'd-flex flex-column nav-pills'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Videos', 'url' => ['/video/index']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
        ],
    ]); ?>
</aside>
