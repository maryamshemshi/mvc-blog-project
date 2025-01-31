<?php if (count($result)): ?>
    <ol>
        <?php foreach ($result as $post): ?>
            <li><?= $post['title'] ?></li>
        <?php endforeach; ?>
    </ol>
<?php else: ?>
    <h1>Nothing post yet!</h1>
<?php endif; ?>
