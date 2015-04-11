<div class="container">
    <div class="page-header">
        <h1><?= __d("system","User detail"); ?></h1>
        <h3><?= ($user['User']['name'] != null) ? $user['User']['name'] . " | " : ""; ?><?= $user['User']['username']; ?></h3>
    </div>
</div>