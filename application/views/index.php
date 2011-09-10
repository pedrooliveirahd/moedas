<?php echo doctype('xhtml1-strict'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $titulo; ?> :: Moedas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>media/css/reset.css" media="all" />
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>media/css/moedas.css" media="all" />
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>media/css/menu.css" media="all" />
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>media/css/rodape.css" media="all" />
    </head>
    <body>
        <div id="corpo">
            <div id="menu">
                <h1><?php echo $titulo; ?></h1>
                <?php
                    echo ul(array(
                        anchor('/', 'Resumo'),
                        anchor('/receber/', 'Contas à receber'),
                        anchor('/pagar/', 'Contas à pagar')
                    ));
                ?>
            </div><!-- menu -->
            <div id="conteudo">
                <div id="altura"></div>
                <?php $this->load->view($pagina); ?>
                <div class="limpa"></div>
            </div><!-- conteudo -->
        </div>
        <div id="rodape">
            <p>
                Moedas :: Simplifique seu controle financeiro
            </p>
            <p>
                Desenvolvido por
                <a href="http://casoft.info" title="CaSoft Tecnologia e Desenvolvimento">CaSoft</a>
            </p>
            <p>
                Feito com <a href="http://php.net" title="Site do PHP">PHP</a> e
                <a href="http://codeigniter.com" title="Site oficial do CodeIgniter">CodeIgniter</a>
            </p>
        </div>
    </body>
    <script type="text/javascript" src="<?php echo site_url(); ?>media/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo site_url(); ?>media/js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo site_url(); ?>media/js/jquery.price_format.js"></script>
    <script type="text/javascript" src="<?php echo site_url(); ?>media/js/jquery.maskedinput.js"></script>
    <?php if (isset($javascripts)) : ?>
        <?php foreach ($javascripts as $j) : ?>
            <script type="text/javascript" src="<?php echo site_url(); ?>media/js/<?php echo $j; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</html>
