<?php
/**
 * pagar.php
 *
 * Este arquivo contém o model 'pagar', que é relacionado às contas à pagar
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package moedas
 * @subpackage models
 */

/**
 * Model Pagar
 *
 * @property CI_Input               $input
 * @property CI_DB_active_record    $db
 */
class Pagar_model extends Model {

    /**
     * Função construtora do Model (exigido pelo CodeIgniter)
     */
    public function Pagar_model() {
        parent::Model();
    }

    /**
     * Função que retornas as contas vencidas ou do dia
     *
     * @return array Array com os objetos das contas
     * @access public
     */
    public function pega_vencidas() {
        $hoje = date('Y-m-d');
        $this->db->where('vencimento <=', $hoje);
        $this->db->where('liquidado !=', True);

        $query = $this->db->get('pagar');

        return $query->result();
    }

    /**
     * Função que retorna os dados de uma conta à pagar
     *
     * @param integer $id_conta ID da conta à pegar
     * @return pagar
     * @access public
     */
    public function pega_conta($id_conta) {
        $query = $this->db->get_where('pagar', array('id' => $id_conta));
        return $query->row();
    }

    /**
     * Função que baixa uma conta à pagar
     *
     * @param integer $id_conta ID da conta a baixar
     */
    public function baixa($id_conta) {
        $this->db->update('pagar', array('liquidado' => '1'), array('id' => $id_conta));
    }

    /**
     * Função que grava/atualiza os dados de uma conta à pagar
     *
     * @return boolean
     * @access public
     */
    public function grava() {
        // Helper para formatar as datas
        $this->load->helper('datas');
        $data = array(
            'descricao'     => $this->input->post('descricao'),
            'valor'         => $this->input->post('valor'),
            'multa'         => $this->input->post('multa'),
            'desconto'      => $this->input->post('desconto'),
            'vencimento'    => brazil_to_date($this->input->post('vencimento'))
        );
        if ($this->input->post('pagamento') != '') {
            $data['pagamento'] = brazil_to_date($this->input->post('pagamento'));
        }
        
        if ($this->input->post('id_pagar') == '0') {
            // Gravando uma nova conta
            $this->db->insert('pagar', $data);
        }
        else {
            // Atualizando uma conta existente
            $this->db->where('id', $this->input->post('id_pagar'));
            $this->db->update('pagar', $data);
        }
        return true;
    }

}

/* End of file pagar_model.php */
/* Location: ./system/application/controllers/pagar_model.php */