<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="paginator">
                <ul>
                    <?= $this->Paginator->numbers(array('tag' => 'li', 'separator' => '')); ?>
                </ul>
            </div>
            <?php if ($this->Blog->have_post()): while ($this->Blog->have_posts()): ?>
                    <div class="post-object wrapper post-id-<?= $this->Blog->post_id() ?>">
                        <div class="row">
                            <?= $this->Blog->post_categories(array("parent" => "span", "parentClass" => "categories pull-left")) ?>
                            <?= $this->Blog->post_tags(array("parent" => "span", "parentClass" => "tags pull-right")) ?>
                        </div>
                        <div class="row">
                            <a href="<?= $this->Blog->post_permalink() ?>">
                                <div class="col-lg-5 post-image" style="background: url('<?= $this->Blog->post_image() ?>') center center;"><span class='post-date'><?= $this->Blog->post_date() ?> por <?= $this->Blog->post_author() ?></span></div>
                                <div class="col-lg-7"><h4><strong><?= $this->Blog->post_title() ?></strong></h4><p><?= $this->Blog->post_excerpt() ?></p></div>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <?php
                endwhile;
            endif;
            ?>
            <div class="paginator">
                <ul>
                    <?= $this->Paginator->numbers(array('tag' => 'li', 'separator' => '')); ?>
                </ul>
            </div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</div>