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
     */
    public function pega_vencidas() {
        $hoje = date('Y-m-d');
        $this->db->where('vencimento <=', $hoje);
        $this->db->where('liquidado !=', True);

        $query = $this->db->get('pagar');

        return $query->result();
    }

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

?>
