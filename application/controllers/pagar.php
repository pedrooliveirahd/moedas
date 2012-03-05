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
class Pagar extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->data['javascripts'] = array_merge($this->data['javascripts'], array(
            'pagar/geral'
        ));
    }

    /**
     * Função index que exibe a página principal das contas a pagar,
     * nesta página são listadas as contas vencidas e vencendo hoje.
     */
    public function index() {
        $this->load->model('pagar_model');

        $this->data['titulo']       = 'Contas à pagar :: Lista';
        $this->data['atividade']    = 'Lista de contas à pagar (vencidas e vencendo)';
        $this->data['pagina']       = 'pagar/index';

        $this->data['lista_contas'] = $this->pagar_model->pega_vencidas();

        $this->load->view('index', $this->data);
    }

    /**
     * Função 'nova' que é utilizada para exibir o formulário de registro de uma
     * nova conta à pagar
     *
     * @access public
     */
    public function nova() {
        $this->data['titulo']       = 'Contas à pagar :: Nova';
        $this->data['atividade']    = 'Cadastro de contas à pagar';
        $this->data['botao_submit'] = 'Cadastrar';

        $this->data['pagina']       = 'pagar/form';

        $this->data['javascripts'] = array_merge($this->data['javascripts'], array(
            'pagar/form'
        ));

        $this->load->view('index', $this->data);
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
        $this->data = array();

        $this->data['titulo']       = 'Contas à pagar :: Nova';
        $this->data['atividade']    = 'Alteração de contas à pagar';
        $this->data['botao_submit'] = 'Alterar';
        $this->data['pagina']       = 'pagar/form';

        $this->load->model('pagar_model');

        $this->data['conta'] = $this->pagar_model->pega_conta($id_conta);

        $this->load->view('index', $this->data);
    }

    /**
     * Esta função baixa uma conta à pagar
     *
     * @param integer $id_conta ID da conta à baixar
     */
    public function baixar($id_conta) {
        if ($id_conta != '') {
            $this->data = array();

            $this->data['titulo']         = 'Contas à pagar :: Nova';
            $this->data['atividade']      = 'Baixar conta à pagar';
            $this->data['botao_submit']   = 'Baixar';
            $this->data['pagina']         = 'pagar/form';

            $this->load->model('pagar_model');

            $this->data['conta'] = $this->pagar_model->pega_conta($id_conta);

            $this->load->view('index', $this->data);
        }
        else {
            redirect(site_url().'pagar');
        }
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
