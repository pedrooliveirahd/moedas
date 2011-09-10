<?php
/**
 * views/receber/index.php
 *
 * Esta é a view principal do contas à receber.
 * Aqui é exibida uma lista das contas vencidas e vencendo.
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @package moedas
 * @subpackage views/receber
 */

$hoje = date('Y-m-d');
$this->load->helper(array('datas', 'moedas'));

?>

<div class="botoes_opcao">
    <input type="button" id="adicionar_conta_receber" value="Adicionar" />
</div>

<h1><?php echo $atividade; ?></h1>
<?php if (count($lista_contas) > 0) : ?>
    <table class="lista_contas">
        <thead>
            <tr>
                <th>Descrição</th>
                <th class="a-centro">Vencimento</th>
                <th></th>
                <th class="a-direita">Valor</th>
                <th class="a-direita">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista_contas as $conta) : ?>
                <tr>
                    <td><?php echo $conta->descricao; ?></td>
                    <td class="a-centro"><?php echo date_to_brazil($conta->vencimento); ?></td>
                    <td><?php echo ($conta->vencimento == $hoje) ? '<span class="verde">Hoje</span>' : '<span class="vermelho">Vencida</span>'; ?></td>
                    <td class="a-direita"><?php echo number_to_currency($conta->valor); ?></td>
                    <td class="a-direita"><a class="alterar" href="<?php echo site_url().'receber/alterar/'.$conta->id; ?>">Alterar</a> | <a class="baixar" href="<?php echo site_url().'receber/baixar/'.$conta->id; ?>">Baixar</a></td>
                <tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <h2>Sem recebimentos para hoje =(</h2>
<?php endif; ?>
