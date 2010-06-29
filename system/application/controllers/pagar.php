<?php
/**
 * pagar.php
 *
 * Arquivo com o controller 'pagar'.
 *
 * O 'pagar' é o responsável pelas contas à pagar
 *
 * @author      Evaldo Junior <junior@casoft.info>
 * @version     0.1
 * @package     moedas
 * @subpackage  controllers
 */

/**
 * Controller Pagar, gerencia as contas à pagar
 *
 * @property CI_Loader      $load
 * @property CI_Input       $input
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

        $data['titulo'] = 'Contas à pagar :: Lista';
        $data['atividade'] = 'Lista de contas à pagar (vencidas e vencendo)';
        $data['pagina'] = 'pagar/index';

        $this->load->model('pagar_model');

        $data['lista_contas'] = $this->pagar_model->pega_vencidas();

        $this->load->view('index', $data);
    }

    /**
     * Função 'nova' que é utilizada para exibir o formulário de registro de uma
     * nova conta à pagar
     *
     * @access public
     */
    public function nova() {
        /*
         * Definindo dados para a view
         */
        $data = array();

        $data['titulo'] = 'Contas à pagar :: Nova';
        $data['atividade'] = 'Cadastro de contas à pagar';
        $data['pagina'] = 'pagar/form';

        $this->load->view('index', $data);
    }

    /**
     * Função 'alterar' que é utilizada para exibir o formulário de registro de
     * contas à pagar já preenchido com as informações de uma conta
     *
     * @access public
     */
    public function alterar($id_conta) {
        /*
         * Definindo dados para a view
         */
        $data = array();

        $data['titulo'] = 'Contas à pagar :: Nova';
        $data['atividade'] = 'Cadastro de contas à pagar';
        $data['pagina'] = 'pagar/form';

        $this->load->model('pagar_model');

        $data['conta'] = $this->pagar_model->pega_conta($id_conta);

        $this->load->view('index', $data);
    }

    /**
     * Função para gravar/atualizar uma conta à pagar
     *
     * @access public
     */
    public function gravar() {
        if ($this->input->post('id_pagar') != '') {
            $this->load->model('pagar_model');
            $this->pagar_model->grava();
        }
        redirect(site_url().'pagar');
    }

}

/* End of file pagar.php */
/* Location: ./system/application/controllers/pagar.php */