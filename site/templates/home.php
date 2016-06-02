<?php snippet('header') ?>


<h1 class="content-subhead">Latest Episode</h1>

<?php
    
    $first = $site->index()->filterBy('tag','episode')->first();
    
    snippet('single-blog', array('blog' => $first)) ?>

<h1 class="content-subhead">Recent Posts</h1>


    <?php $all = page('posts')->children()->visible()->limit(4); ?>
    <?php foreach($all as $post): ?>
        <?php if($post != $first) echo snippet('single-blog', array('blog' => $post)) ?>
    <?php endforeach ?>

<?php snippet('footer') ?>