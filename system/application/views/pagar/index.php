<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$hoje = date('Y-m-d');

?>
<h1><?php echo $atividade; ?></h1>
<table class="lista_contas">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Vencimento</th>
            <th></th>
            <th class="coluna_valor">Valor</th>
            <th class="coluna_acoes">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista_contas as $conta) : ?>
            <tr>
                <td><?php echo $conta->descricao; ?></td>
                <td class="coluna_data"><?php echo $conta->vencimento; ?></td>
                <td><?php echo ($conta->vencimento == $hoje) ? 'Hoje' : 'Vencida'; ?></td>
                <td class="coluna_valor"><?php echo $conta->valor; ?></td>
                <td class="coluna_acoes">Alterar | Baixar</td>
            <tr>
        <?php endforeach; ?>
    </tbody>
</table>