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
<script type="text/javascript">
    $(document).ready( function() {
        $('#botao_cancelar').click( function() {
            window.location = '<?php echo site_url(); ?>pagar';
        });
    });
</script>
<h1><?php echo $atividade; ?></h1>
<form action="<?php echo site_url(); ?>pagar/gravar" method="post" id="form_pagar">
    <div class="botoes_opcao">
        <input type="button" id="botao_cancelar" value="Cancelar" />
        <input type="submit" value="<?php echo (isset($conta->id)) ? 'Atualizar' : 'Cadastrar' ?>" />
    </div>
    <div class="limpa"></div>
    <input type="hidden" name="id_pagar" value="<?php echo (isset($conta->id)) ? $conta->id : '0'; ?>" />
    <table>
        <tr>
            <td><label for="descricao">Descrição</label></td>
            <td colspan="5"><input id="descricao" name="descricao" type="text" value="<?php echo (isset($conta->descricao)) ? $conta->descricao : ''; ?>" /></td>
        </tr>
        <tr>
            <td><label for="valor">Valor</label></td>
            <td><input id="valor" name="valor" type="text" value="<?php echo (isset($conta->valor)) ? $conta->valor : '0,00'; ?>" /></td>
            <td><label for="multa">Multa</label></td>
            <td><input id="multa" name="multa" type="text" value="<?php echo (isset($conta->multa)) ? $conta->multa : '0,00'; ?>" /></td>
            <td><label for="desconto">Desconto</label></td>
            <td><input id="desconto" name="desconto" type="text" value="<?php echo (isset($conta->desconto)) ? $conta->desconto : '0,00'; ?>" /></td>
        </tr>
        <tr>
            <td><label for="vencimento">Vencimento</label></td>
            <td colspan="2"><input id="vencimento" name="vencimento" type="text" value="<?php echo (isset($conta->vencimento)) ? date_to_brazil($conta->vencimento) : ''; ?>" /></td>
            <td><label for="pagamento">Pagamento</label></td>
            <td colspan="2"><input id="pagamento" name="pagamento" type="text" value="<?php echo (isset($conta->pagamento)) ? date_to_brazil($conta->pagamento) : ''; ?>" /></td>
        </tr>
    </table>
</form>