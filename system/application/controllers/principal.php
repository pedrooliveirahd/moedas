<?php
/**
 * principal.php
 *
 * Arquivo com o controller 'principal'.
 *
 * O 'principal' é o responsável por exibir a página principal com um resumo
 * simples do que há a pagar e receber.
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package moedas
 * @subpackage controllers
 */

/**
 * Controller principal
 *
 * @property CI_Loader $load
 */
class Principal extends Controller {

    /**
     * Função index que exibe a página principal.
     */
    public function index() {

        /*
         * Definindo dados para a view
         */
        $data = array();

        $data['titulo'] = 'Moedas :: Simplifique seu controle financeiro';
        $data['atividade'] = 'Página inicial';
        $data['pagina'] = 'principal/principal';

        $this->load->view('index', $data);
    }
    
}

?>