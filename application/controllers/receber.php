<?php
/**
 * receber.php
 *
 * Arquivo com o controller 'receber'.
 *
 * O 'receber' é o responsável pelas contas à receber
 *
 * @author      Evaldo Junior <junior@casoft.info>
 * @version     0.1
 * @package     moedas
 * @subpackage  controllers
 */

/**
 * Controller receber, gerencia as contas à receber
 *
 * @property CI_Loader          $load
 * @property CI_Input           $input
 * @property Receber_model      $receber_model
 */
class Receber extends MY_Controller {

    /**
     * Função index que exibe a página principal das contas a receber,
     * nesta página são listadas as contas vencidas e vencendo hoje.
     */
    public function index() {

        /*
         * Definindo dados para a view
         */
        $data = array();

        $data['titulo'] = 'Contas à receber :: Lista';
        $data['atividade'] = 'Lista de contas à receber (vencidas e vencendo)';
        $data['pagina'] = 'receber/index';

        $this->load->model('receber_model');

        $data['lista_contas'] = $this->receber_model->pega_vencidas();

        $this->load->view('index', $data);
    }

    /**
     * Função 'nova' que é utilizada para exibir o formulário de registro de uma
     * nova conta à receber
     *
     * @access public
     */
    public function nova() {
        /*
         * Definindo dados para a view
         */
        $data = array();

        $data['titulo']         = 'Contas à receber :: Nova';
        $data['atividade']      = 'Cadastro de contas à receber';
        $data['botao_submit']   = 'Cadastrar';
        $data['pagina']         = 'receber/form';

        $this->load->view('index', $data);
    }

    /**
     * Função 'alterar' que é utilizada para exibir o formulário de registro de
     * contas à receber já preenchido com as informações de uma conta
     *
     * @access public
     */
    public function alterar($id_conta) {
        /*
         * Definindo dados para a view
         */
        $data = array();

        $data['titulo']         = 'Contas à receber :: Nova';
        $data['atividade']      = 'Alteração de contas à receber';
        $data['botao_submit']   = 'Alterar';
        $data['pagina']         = 'receber/form';

        $this->load->model('receber_model');

        $data['conta'] = $this->receber_model->pega_conta($id_conta);

        $this->load->view('index', $data);
    }

    /**
     * Esta função baixa uma conta à receber
     *
     * @param integer $id_conta ID da conta à baixar
     */
    public function baixar($id_conta) {
        if ($id_conta != '') {
            $data = array();

            $data['titulo']         = 'Contas à receber :: Nova';
            $data['atividade']      = 'Baixar conta à receber';
            $data['botao_submit']   = 'Baixar';
            $data['pagina']         = 'receber/form';

            $this->load->model('receber_model');

            $data['conta'] = $this->receber_model->pega_conta($id_conta);

            $this->load->view('index', $data);
        }
        else {
            redirect(site_url().'receber');
        }
    }

    /**
     * Função para gravar/atualizar uma conta à receber
     *
     * @access public
     */
    public function gravar() {
        if ($this->input->post('id_receber') != '') {
            $this->load->model('receber_model');
            $this->receber_model->grava();
        }
        redirect(site_url().'receber');
    }

}

/* End of file receber.php */
/* Location: ./system/application/controllers/receber.php */
