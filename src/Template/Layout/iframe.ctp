<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if(!empty($og_locale)) : ?>
        <meta property="og:locale" content="<?php echo $og_locale; ?>">
    <?php endif; ?>

    <?php if(!empty($og_url)) : ?>
        <meta property="og:url" content="<?php echo $og_url; ?>">
    <?php endif; ?>

    <?php if(!empty($og_title)) : ?>
        <meta property="og:title" content="<?php echo $og_title; ?>">
    <?php endif; ?>

    <?php if(!empty($og_site_name)) : ?>
        <meta property="og:site_name" content="<?php echo $og_site_name; ?>">
    <?php endif; ?>

    <?php if(!empty($og_description)) : ?>
        <meta property="og:description" content="<?php echo $og_description; ?>">
    <?php endif; ?>

    <?php if(!empty($og_image)) : ?>
        <meta property="og:image" content="<?php echo $og_image; ?>">
    <?php endif; ?>

    <?php if(!empty($og_image_type)) : ?>
        <meta property="og:image:type" content="<?php echo $og_image_type; ?>">
    <?php endif; ?>

    <?php if(!empty($og_image_width)) : ?>
        <meta property="og:image:width" content="<?php echo $og_image_width; ?>">
    <?php endif; ?>

    <?php if(!empty($og_image_height)) : ?>
        <meta property="og:image:height" content="<?php echo $og_image_height; ?>">
    <?php endif; ?>

    <meta property="og:type" content="website">

    <title><?= $this->fetch('title') ?> - Clenance</title>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Roboto:400,700,300') ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') ?>
    <?= $this->Html->css('app.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js') ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') ?>
    <?= $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js') ?>
    <?= $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/localization/messages_pt_BR.js') ?>
    <?= $this->Html->script('http://cdnjs.cloudflare.com/ajax/libs/camanjs/4.0.0/caman.full.min.js') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js') ?>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <?= $this->Html->script('app.min.js') ?>
</head>

<body class="<?php echo strtolower($this->request->params['controller']); ?> <?php echo strtolower($this->request->params['controller']); ?>-<?php echo strtolower($this->request->params['action']); ?>">

<div class="page-wrap">

<nav class="navbar navbar-default navbar-clenance">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-principal">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand animated fadeIn" href="<?php echo $this->Url->build(['controller' => 'home', 'action' => 'index']); ?>">
          <?php echo $this->Html->image("logo_avene.png", ['class' => 'img-responsive']); ?>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-principal">
      <ul class="nav navbar-nav pull-right animated fadeIn pos-r" id="navlist">
        <li <?= ($this->request->params['controller'] == 'Home') ? 'class="active"' : ''; ?>>
            <a href="<?php echo $this->Url->build(['controller' => 'Home', 'action' => 'index']); ?>">Home</a>
        </li>
        <li <?= ($this->request->params['controller'] == 'Desafio') ? 'class="active"' : ''; ?>>
            <a href="<?php echo $this->Url->build(['controller' => 'Desafio', 'action' => 'index']); ?>">Desafio</a>
        </li>
        <li <?= ($this->request->params['controller'] == 'Wall') ? 'class="active"' : ''; ?>>
            <a href="<?php echo $this->Url->build(['controller' => 'Wall', 'action' => 'index']); ?>">Cleanance Wall</a>
        </li>
        <li <?= ($this->request->params['controller'] == 'Linha') ? 'class="active"' : ''; ?>>
            <a href="<?php echo $this->Url->build(['controller' => 'Linha', 'action' => 'index']); ?>">Linha Completa</a>
        </li>
        <li <?= ($this->request->params['controller'] == 'Regulamento') ? 'class="active"' : ''; ?>>
            <a href="<?php echo $this->Url->build(['controller' => 'Regulamento', 'action' => 'index']); ?>">Regulamento</a>
        </li>
      </ul>


      <div class="clearfix"></div>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>


</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xs-5 text-center">
                <a href="http://www.eau-thermale-avene.com.br/contactar-nos" target="_blank"><span class="hidden-xs hidden-sm">ENTRE EM</span> CONTATO</a>
            </div>
            <div class="col-lg-6  col-xs-7 text-center">
                <a href="https://www.facebook.com/AveneBrasilOficial" target="_blank" class="btn-rede">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://instagram.com/avenebrasil/" target="_blank" class="btn-rede">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="http://www.eau-thermale-avene.com.br/" target="_blank" class="hidden-xs">
                    www.eau-thermale-avene.com.br
                </a>
            </div>
            <div class="col-lg-3 hidden-xs text-right">
                <a href="http://www.eau-thermale-avene.com.br/">
                    Avène 2015
                </a>
            </div>
        </div>
    </div>
</footer>

<script src="//localhost:35729/livereload.js"></script>

</body>
</html>