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
 */
class Pagar_model extends Model {

    /**
     * ID da conta a pagar, este número é auto incrementado pelo sgbd
     *
     * @var integer
     */
    var $id = 0;

    /**
     * Diz se a conta a pagar foi liquidada
     *
     * @var boolean
     */
    var $liquidado = False;

    /**
     * A descrição da conta a pagar
     *
     * @var string
     */
    var $descricao = '';

    /**
     * O valor da conta a pagar
     *
     * @var float
     */
    var $valor = 0.0;

    /**
     * O valor da multa da conta a pagar
     *
     * @var float
     */
    var $multa = 0.0;

    /**
     * O valor do desconto da conta a pagar
     *
     * @var float
     */
    var $desconto = 0.0;

    /**
     * A data de vencimento da conta a pagar
     *
     * Formato: YYYY-MM-DD
     *
     * @var string
     */
    var $vencimento = '0000-00-00';

    /**
     * A data de pagamento da conta a pagar
     *
     * Formato: YYYY-MM-DD
     *
     * @var string
     */
    var $pagamento = '0000-00-00';

    /**
     * Função construtora do Model (exigido pelo CodeIgniter)
     */
    public function Pagar_model() {
        parent::Model();
    }

    /**
     * Função que retornas as contas vencidas ou do dia
     */
    public function pega_vencidas() {
        $hoje = date('Y-m-d');
        $this->db->where('vencimento <=', $hoje);
        $this->db->where('liquidado !=', True);

        $query = $this->db->get('pagar');

        return $query->result();
    }

}

?>
