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
 * @property CI_Loader      $load
 * @property Pagar_model    $pagar_model
 */
class Principal extends Controller {

    /**
     * Função index que exibe a página principal.
     *
     * @access public
     */
    public function index() {

        /**
         * Definindo dados para a view
         */
        $data = array();

        $data['titulo'] = 'Simplifique seu controle financeiro';
        $data['atividade'] = 'Página inicial';
        $data['pagina'] = 'principal/principal';

        /**
         * Verificando se há contas à pagar
         */
        $this->load->model('pagar_model');
        $data['total_vencidas_pagar']           = $this->pagar_model->conta_vencidas();
        $data['total_vencendo_amanha_pagar']    = $this->pagar_model->conta_vencendo_amanha();

        /**
         * Verificando se há contas à receber
         */
        $this->load->model('receber_model');
        $data['total_vencidas_receber']         = $this->receber_model->conta_vencidas();
        $data['total_vencendo_amanha_receber']  = $this->receber_model->conta_vencendo_amanha();

        $this->load->view('index', $data);
    }
    
}

/* End of file principal.php */
/* Location: ./system/application/controllers/principal.php */