<?php
/**
 * pagar.php
 *
 * Arquivo com o controller 'pagar'.
 *
 * O 'pagar' é o responsável pelas contas à pagar
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package moedas
 * @subpackage controllers
 */

/**
 * Controller Pagar, gerencia as contas à pagar
 *
 * @property CI_Loader      $load
 * @property Pagar_model    $pagar_model
 */
class Pagar extends Controller {

    /**
     * Função index que exibe a página principal das contas a pagar,
     * nesta página são listadas as contas vencidas e vencendo hoje.
     */
    public function index() {

        /*
         * Definindo dados para a view
         */
        $data = array();

        $data['titulo'] = 'Moedas :: Contas à pagar :: Lista';
        $data['atividade'] = 'Lista de contas à pagar (vencidas e vencendo)';
        $data['pagina'] = 'pagar/index';

        $this->load->model('pagar_model');

        $data['lista_contas'] = $this->pagar_model->pega_vencidas();

        $this->load->view('index', $data);
    }

    /**
     * Função 'nova' que é utilizada para registrar uma nova conta a pagar
     */
    public function nova($funcao) {

        if ($funcao == 'gravar') {
            
        }

        /*
         * Definindo dados para a view
         */
        $data = array();

        $data['titulo'] = 'Moedas :: Contas à pagar :: Nova';
        $data['atividade'] = 'Cadastro de contas à pagar';
        $data['pagina'] = 'pagar/nova';

        $this->load->view('index', $data);
    }

}

?>