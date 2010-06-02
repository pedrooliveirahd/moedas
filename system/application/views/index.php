<?php
/**
 * index.php
 *
 * Esta é a view principal, todas as outras são chamadas através desta, para
 * isso utiliza-se a variável $pagina.
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package moedas
 * @subpackage views
 */
?>
<?php $this->load->helper('url'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $titulo; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="<?php echo site_url(); ?>js/jquery.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>styles/moedas.css" media="all" />
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>styles/superfish.css" media="all" />
    </head>
    <body>
        <div id="corpo">
            <div id="nome_topo">
                <h1><?php echo $titulo; ?></h1>
            </div>
            <div id="menu">
                <ul id="super_menu" class="sf-menu">
                    <li><?php echo anchor($uri = '/', $title = 'Página inicial', $attributes = array('title' => 'Ir para a página inicial.')); ?></li>
                    <li><?php echo anchor($uri = '/receber/', $title = 'Receber', $attributes = array('title' => 'Página de contas à receber.')); ?></li>
                    <li><?php echo anchor($uri = '/pagar', $title = 'Pagar', $attributes = array('title' => 'Página de contas à pagar.')); ?></li>
                </ul>
                <div style="clear: both"></div>
            </div><!-- menu -->
            <div id="conteudo">
                <?php $this->load->view($pagina); ?>
            </div><!-- conteudo -->
        </div>
        <div id="rodape">
            <p>Moedas :: Simplifique seu controle financeiro<br />
            Desenvolvido por <a href="http://casoft.info" title="CaSoft Tecnologia e Desenvolvimento">CaSoft</a><br />
            Powered By PHP and CodeIgniter</p>
        </div>
    </body>
</html>