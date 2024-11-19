<div class="blog-post my-5">
    <div class="row" id="articles">
        <div class="col-md-8">
            <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>
            <p class="blog-post-meta lead"><?php echo $post['date']; ?> by <a href="#"><?php echo $post['author']; ?></a></p>
            <p class="lead"><?php echo $post['excerpt']; ?></p>
            <a href="<?php echo $post['link']; ?>" class="btn btn-primary">Read more</a>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center my-3">
            <img src="<?php echo $post['image']; ?>" class="img-fluid rounded-3" alt="<?php echo $post['image_alt']; ?>">
        </div>
    </div>
</div>
