<div class="row">
    <div class="col-md-12 content-page">
        <!-- ADD A POST -->
        <div>
            <a href="form.html" type="button" class="btn btn-primary">Add a Post</a>
        </div>
        <!-- ADD A POST END -->

        <!-- Blog Post Start -->
        <div class="col-md-12 blog-post row">
            <?php foreach ($posts as $post): ?>
                <div class="post-title">
                    <a href="?posts=show&id=<?php echo $post['id'] ?>">
                        <h1>
                            <?php echo $post['title'] ?>
                        </h1>
                    </a>
                </div>
                <div class="post-info">
                    <span><?php $date = new DateTime($post['created_at']);
                            echo $date->format('d/m/Y'); ?></span> | <span><?php echo $post['category_name']; ?></span>
                </div>
                <p>
                    <?php echo \Core\Helpers\truncate($post['text']) ?>
                </p>
                <a
                    href="?posts=show&id=<?php echo $post['id'] ?>"
                    class="
                        button button-style button-anim
                        fa fa-long-arrow-right
                      "><span>Read More</span></a>
            <?php endforeach; ?>
        </div>
        <!-- Blog Post End -->



        <nav aria-label="Page navigation example" style="text-align: center;">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

    </div>
</div>