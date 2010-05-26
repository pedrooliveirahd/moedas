<?php
/**
 * views/pagar/nova.php
 *
 * Formulário para cadastrar uma nova conta a pagar
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package moedas
 * @subpackage views
 */

?>
<h1><?php echo $atividade; ?></h1>
<form action="/pagar/nova/gravar" method="post" id="form_nova_pagar">
    <fieldset>
        <legend>Nova conta à pagar</legend>
        <label>Descrição
            <input id="descricao" name="descricao" type="text" />
        </label>
        <label>Valor
            <input id="valor" name="valor" type="text" />
        </label>
        <label>Multa
            <input id="multa" name="multa" type="text" />
        </label>
        <label>Desconto
            <input id="desconto" name="desconto" type="text" />
        </label>
        <label>Vencimento
            <input id="vencimento" name="vencimento" type="text" />
        </label>
        <label>Pagamento
            <input id="pagamento" name="pagamento" type="text" />
        </label>
        <input type="submit" value="Cadastrar" />
    </fieldset>
</form>