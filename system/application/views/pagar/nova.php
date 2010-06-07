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
<form action="<?php echo site_url(); ?>pagar/gravar" method="post" id="form_nova_pagar">
    <div class="botoes_opcao">
        <input type="submit" value="Cadastrar" />
    </div>
    <div class="limpa"></div>
    <input type="hidden" name="id_pagar" value="<?php echo (isset($conta->id)) ? $conta->id : '0'; ?>">
    <table>
        <tr>
            <td><label for="descricao">Descrição</label></td>
            <td colspan="5"><input id="descricao" name="descricao" type="text" /></td>
        </tr>
        <tr>
            <td><label for="valor">Valor</label></td>
            <td><input id="valor" name="valor" type="text" /></td>
            <td><label for="multa">Multa</label></td>
            <td><input id="multa" name="multa" type="text" /></td>
            <td><label for="desconto">Desconto</label></td>
            <td><input id="desconto" name="desconto" type="text" /></td>
        </tr>
        <tr>
            <td><label for="vencimento">Vencimento</label></td>
            <td colspan="2"><input id="vencimento" name="vencimento" type="text" /></td>
            <td><label for="pagamento">Pagamento</label></td>
            <td colspan="2"><input id="pagamento" name="pagamento" type="text" /></td>
        </tr>
    </table>
</form>