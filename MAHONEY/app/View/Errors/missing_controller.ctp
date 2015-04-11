<style>
    .block h1 {
        position: absolute;
        bottom: 0px;
        right: 30px;
        width: 248px;
        height: 248px;
    }
    .block h2 {
        width: 220px;
        height: 105px;
    }
    .block .dontWorry {
        position: relative;
        width: 400px;
        top: -27px;
        left: 160px;
        font-size: 15px;
    }
    .block #innerMenu ul { list-style: none }
    .block #innerMenu ul li {
        float: left;
        padding-right: 30px;
    }
    .block #innerMenu ul li a {
        height: 17px;
        display: block;
    }
    .block {
        margin-top:100px; height: 100%; overflow:hidden;
        font: 14px trebuchet ms,tahoma,arial;
        color: #ADADAD;
        position: relative;
        margin: 0 auto;
        margin-bottom: 40px;
        background: #FFFFFF;
        border: 1px solid #D5D5D5;
        width: 820px;
        padding: 40px;
        height: 280px;
    }
    .block p a {
        color: #666666;
        text-decoration: none;
        border-bottom: 1px dotted #AAAAAA;
    }
    .block p a:hover {
        color: #000000;
        border-bottom: 1px dotted #000000;
    }
    .block .info {
        position: relative;
        width: 510px;
        float: left;
    }
    .block .column {
        position: relative;
        width: 285px;
        font-size: 12px;
        padding-top: 6px;
        float: right;
    }
    .block .column p {
        clear: both;
        color: #ADADAD;
        margin-bottom: 3em;
    }
    .block .column br {
        clear: both;
        display: block;
        height: 0px;
        line-height: 0px;
    }
    .block .column h3 {
        clear: both;
        width: 100%;
        height: 15px;
    }
    .block .column .textContainer {
        position: relative;
        background: #FFFFFF;
        z-index: 20;
    }
    .errorContent { width: 820px; margin: 0 auto; }
    @media screen and (max-width:820px) {
        .block {
            width:550px;
        }
        .errorContent { width: 550px; }
        .block .dontWorry { visibility: hidden; }
    }
    @media screen and (max-width:550px) {
        .block {
            width:480px;
        }
        .block h2 { visibility: hidden; }
        .block .row { z-index: 999999; position: absolute; }
        .errorContent { display: none; }
        .block .dontWorry { visibility: hidden; }
    }
</style>
<div class="block">
    <h1><?= $this->Html->image("error/error404.gif"); ?></h1>
    <h2><?= $this->Html->image("error/oops!.gif"); ?></h2>
    <div class="dontWorry"><?= __("Parece que você se perdeu"); ?><br><?= __("Calma, todo mundo já passou por isso"); ?></div>
</div>
<div class="errorContent">
        <?php
        echo(Debugger::trace());
        ?>
    </div>