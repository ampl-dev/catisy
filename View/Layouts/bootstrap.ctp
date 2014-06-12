<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $this->fetch('title') ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <?=$this->Html->css('sticky-footer-navbar')?>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>
    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?= $this->Html->link('Catisy', '/', array('class' => 'navbar-brand')) ?>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <? if ($currentUser): ?>
                            <li><p class="navbar-text">Logged in as <?= $currentUser['name'] ?></p></li>
                            <li><?= $this->Html->link('Log Out', array('admin' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'logout')) ?></li>
                        <? else: ?>
                            <li><?= $this->Html->link('Register', array('admin' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'add')) ?></li>
                            <li><?= $this->Html->link('Log In', array('admin' => false, 'plugin' => null, 'controller' => 'users', 'action' => 'login')) ?></li>
                        <? endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <?= $this->Session->flash() ?>
            <?= $this->fetch('content') ?>

        </div><!-- /container -->
        <div id="footer">
            <div class="container">
                <p class="text-muted">Place sticky footer content here.</p>
            </div>
        </div>
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
        <?= $this->fetch('script') ?>

    </body>
</html>
