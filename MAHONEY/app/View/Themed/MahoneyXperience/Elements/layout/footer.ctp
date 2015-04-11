<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <span class="logo"><h4><?= Configure::read("SystemSiteInfo.siteName"); ?></h4></span>
                <span class="copyright"><?= date("Y") ?></span>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3 text-right">
                <div>Contato</div>
                <p class="text-muted">
                    <?= $this->Html->link(Configure::read("SystemEmail.from"), "mailto:" . Configure::read("SystemEmail.from")) ?>
                </p>
            </div>
        </div>
    </div>
</footer>