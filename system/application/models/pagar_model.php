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
     * Função que retorna as contas vencidas ou do dia
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
     * Função que retorna o número de contas vencidas
     *
     * @return array Array com os objetos das contas
     * @access public
     */
    public function conta_vencidas() {
        $hoje = date('Y-m-d');
        $this->db->where('vencimento <=', $hoje);
        $this->db->where('liquidado !=', True);

        return $this->db->count_all_results('pagar');
    }

    /**
     * Função que retornas o número de contas vencidas
     *
     * @return array Array com os objetos das contas
     * @access public
     */
    public function conta_vencendo_amanha() {
        $amanha = mktime(0, 0, 0, date("m"), date("d")+1, date("y"));
        $data = date('Y-m-d', $amanha);
        $this->db->where('vencimento', $data);
        $this->db->where('liquidado !=', True);

        return $this->db->count_all_results('pagar');
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

        // Ajustando o valor a pagar, da multa e do desconto
        $valor = strtr($this->input->post('valor'), '.', '');
        $valor = strtr($valor, ',', '.');

        $multa = strtr($this->input->post('multa'), '.', '');
        $multa = strtr($multa, ',', '.');

        $desconto = strtr($this->input->post('desconto'), '.', '');
        $desconto = strtr($desconto, ',', '.');
        
        $data = array(
            'descricao'     => $this->input->post('descricao'),
            'valor'         => $valor,
            'multa'         => $multa,
            'desconto'      => $desconto,
            'vencimento'    => brazil_to_date($this->input->post('vencimento'))
        );
        
        if ($this->input->post('pagamento') != '') {
            // A conta está paga
            $data['pagamento'] = brazil_to_date($this->input->post('pagamento'));
            $data['liquidado'] = '1';
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