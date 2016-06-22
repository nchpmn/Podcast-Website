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
    
<div class="container">
  <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F270095690"></iframe>
  <p>Setting soundcloud player's width to 100% makes it cheese.</p>
</div>
    
    .container {
  width: 90%;
  max-width:50em;
  margin: 0 auto;
  height: 4em;
}

.container iframe { max-height:6em; }
    
    
    <div class="post-description">
        <p><?php echo str::excerpt($blog->text()->kirbytext(), 500, FALSE);
 ?></p>
    </div>
</section>