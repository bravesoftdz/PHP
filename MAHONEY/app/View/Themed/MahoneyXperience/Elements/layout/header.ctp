<div class="container">
    <header>
        <div class="brand">
            <h1><?= $this->Html->link(Configure::read("SystemSiteInfo.siteName"), "/") ?> <span class="subtitle">| <?= Configure::read("SystemSiteInfo.siteDescription"); ?></span></h1>
        </div>
        <?= $this->Element("menu") ?>
    </header>
    <hr>
</div>