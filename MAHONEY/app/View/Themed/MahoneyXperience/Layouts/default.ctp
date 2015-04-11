<!DOCTYPE html>
<html lang="<?=$this->Mahoney->get_html_lang()?>">
    <head>
        <?php echo $this->Html->charset(); ?>

        <?= $this->Mahoney->get_page_title() ?>

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->webroot; ?>favicon.png">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <?php
        echo $this->Html->css('System.../com/css/bootstrap/bootstrap.min');
        echo $this->Html->css('System.../com/css/font-awesome/font-awesome.min');
        echo $this->Html->css('mahoneyBase');

        if ($authUser):
            echo $this->Html->css('System.mahoneySystem.nav');
        endif;
        
        $this->Mahoney->get_meta();
        
        echo $this->fetch('css');
        ?>
        <?= $this->Mahoney->g_analytics() ?>
    </head>
    <body class="<?=$this->Mahoney->get_page_class()?>">
        <div class="wrap">
            <?= $this->Mahoney->get_user_menu(); ?>
            <?= $this->Element("layout/header"); ?>
            <div id="container">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <?php
        echo $this->Html->script('System.../com/js/jquery/jquery-1.11.0.min');
        echo $this->Html->script('System.../com/js/bootstrap/bootstrap.min');

        echo $this->Html->script('mahoneyBase');

        echo $this->fetch('script');

        $this->Mahoney->get_plugin_scripts();

        echo $this->Element("layout/footer");
        ?>
    </body>
</html>
