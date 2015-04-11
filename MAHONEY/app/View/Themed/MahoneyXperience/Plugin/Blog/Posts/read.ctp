<div class="container">
    <div class="row">
        <?php if ($this->Blog->have_post()): while ($this->Blog->have_posts()): ?>
                <div class="col-md-8">
                    <div class="page-header">
                        <div class="span6">
                            <p class="text-muted">Postado em <?= $this->Blog->post_date() ?>, por <?= $this->Blog->post_author() ?></p>
                        </div>
                        <h1><?= $this->Blog->post_title() ?></h1>
                        <div class='wrapper'>
                            <?= $this->Blog->post_categories(array("parent" => "span", "parentClass" => "categories pull-left")) ?>
                            <?= $this->Blog->post_tags(array("parent" => "span", "parentClass" => "tags pull-right")) ?>
                        </div>
                    </div>

                    <div class="post-image-jumbo" style="background-image: url('<?= $this->Blog->post_image(array('class' => 'img-responsive'), 'url') ?>')"></div>

                    <hr>

                    <div class="post-content">
                        <?= $this->Blog->post_content() ?>
                    </div>
                    <?php
                    $neighbors = $this->Blog->get_neighbors();
                    ?>
                    <hr>
                    <h6><?= $this->Blog->comment_count() . " " . ($this->Blog->comment_count(null, "return") > 1 ? __d("blog", "comentários") : __d("blog", "comentário")); ?></h6>
                    <?php if ($this->Blog->have_comment()): ?>
                        <?php while ($this->Blog->have_comments()): ?>
                            <div class="row">
                                <div class="col-lg-8 blog-bg">
                                    <div class="col-lg-4 text-center">
                                        <p><?= $this->Blog->comment_avatar() ?></p>
                                        <h4><?= $this->Blog->comment_author() ?></h4>
                                        <h5><?= $this->Blog->comment_date() ?></h5>
                                    </div>
                                    <div class="col-lg-8 blog-content">
                                        <?= $this->Blog->the_comment() ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?= $this->Element("layout/sidebar") ?>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-md-12">
                Não há posts :(
            </div>
        <?php endif; ?>
    </div>
</div>