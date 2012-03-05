<?php
/**
 * views/pagar/form.php
 *
 * Formulário para cadastrar uma nova conta a pagar
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package moedas
 * @subpackage views
 */

$this->load->helper('datas');

?>
<div class="botoes_opcao">
    <input type="button" id="botao_cancelar" value="Cancelar" />
    <input type="button" id="botao_submit" value="<?php echo $botao_submit; ?>" />
</div>
<h1><?php echo $atividade; ?></h1>
<form action="<?php echo site_url(); ?>pagar/gravar" method="post" id="form_pagar" >
    <input type="hidden" name="id_pagar" value="<?php echo (isset($conta->id)) ? $conta->id : '0'; ?>" />
    <table>
        <tr>
            <td colspan="3">
                <label for="descricao">Descrição</label>
                <input id="descricao" name="descricao" type="text" value="<?php echo (isset($conta->descricao)) ? $conta->descricao : ''; ?>" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="valor">Valor</label>
                <input id="valor" class="moeda" name="valor" type="text" value="<?php echo (isset($conta->valor)) ? number_format($conta->valor, 2, ',', '.') : '0,00'; ?>" />
            </td>
            <td>
                <label for="multa">Multa</label>
                <input id="multa" class="moeda" name="multa" type="text" value="<?php echo (isset($conta->multa)) ? number_format($conta->multa, 2, ',', '.') : '0,00'; ?>" />
            </td>
            <td>
                <label for="desconto">Desconto</label>
                <input id="desconto" class="moeda" name="desconto" type="text" value="<?php echo (isset($conta->desconto)) ? number_format($conta->desconto, 2, ',', '.') : '0,00'; ?>" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="vencimento">Vencimento</label>
                <input id="vencimento" name="vencimento" type="text" value="<?php echo (isset($conta->vencimento)) ? date_to_brazil($conta->vencimento) : ''; ?>" />
            </td>
            <td></td>
            <td>
                <label for="pagamento">Pagamento</label>
                <input id="pagamento" name="pagamento" type="text" value="<?php echo (isset($conta->pagamento)) ? date_to_brazil($conta->pagamento) : ''; ?>" />
            </td>
        </tr>
    </table>
</form>
