<div class="see-also my-5">
    <h3>See also</h3>
    <ul class="list-group list-group-flush">
        <?php foreach ($see_also_links as $link) : ?>
            <li class="list-group-item"><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

