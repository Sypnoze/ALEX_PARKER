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
                    <a href="single.html">
                        <h1 <?php echo $post['title'] ?>>
                            How to make your company website based on bootstrap
                            framework on localhost?
                        </h1>
                    </a>
                </div>
                <div class="post-info">
                    <span <?php echo $post['created_at'] ?>>2016-03-03</span> | <span>Life style</span>
                </div>
                <p <?php echo $post['text'] ?>>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Molestiae ut ratione similique temporibus tempora dicta
                    soluta? Qui hic, voluptatem nemo quo corporis dignissimos
                    voluptatum debitis cumque fugiat mollitia quasi quod.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Molestiae ut ratione similique...
                </p>
                <a
                    href="single.html"
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