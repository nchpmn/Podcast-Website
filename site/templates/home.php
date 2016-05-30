<?php snippet('header') ?>

First, the latest podcast episode

---

Now all the episodes

<?php foreach(page('posts')->children()->visible()->flip()->limit(4) as $post): ?>
<?php snippet('single-blog', array('blog' => $post)) ?>

<?php endforeach ?>

<?php snippet('footer') ?>