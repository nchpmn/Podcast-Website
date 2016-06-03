<?php snippet('header') ?>


<h1 class="content-subhead">Latest Episode</h1>

<?php
    
    $first = $site->index()->filterBy('tag','episode')->first();
    
    snippet('single-'.$first->tag(), array('blog' => $first)) ?>

<h1 class="content-subhead">Recent Posts</h1>


    <?php $all = page('posts')->children()->visible(); ?>
    <?php foreach($all as $post): ?>
        <?php if($post != $first) echo snippet('single-'.$post->tag(), array('blog' => $post)) ?>
    <?php endforeach ?>

<?php snippet('footer') ?>