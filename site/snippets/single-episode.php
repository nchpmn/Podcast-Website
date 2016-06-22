<section class="post blog">
    <header class="post-header">
        <?php if($avatar = $site->user($blog->author())->avatar()): ?>
            <img class="post-avatar" src="<?php echo $avatar->url() ?>" alt="<?php echo $blog->author() ?>'s avatar" height="48" width"48">
        <?php endif ?>
        
        <h2 class="post-title"><?php echo $blog->title() ?></h2>

        <p class="post-meta">
            By <a class="post-author" href="#"><?php echo $blog->author() ?></a> under <a class="post-category post-category-blog" href="#"><?php echo $blog->tag() ?></a>
        </p>
    </header>
    
    <?php echo $blog->embed()->oembed() ?>

    <div class="post-description">
        <p><?php echo str::excerpt($blog->text()->kirbytext(), 500, FALSE);
 ?></p>
    </div>
</section>