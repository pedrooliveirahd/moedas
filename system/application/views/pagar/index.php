<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$hoje = date('Y-m-d');

?>
<h1><?php echo $atividade; ?></h1>
<table>
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Vencimento</th>
            <th></th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista_contas as $conta) : ?>
            <tr>
                <td><?php echo $conta->descricao; ?></td>
                <td><?php echo $conta->vencimento; ?></td>
                <td><?php echo ($conta->vencimento == $hoje) ? 'Hoje' : 'Vencida'; ?></td>
                <td><?php echo $conta->valor; ?></td>
            <tr>
        <?php endforeach; ?>
    </tbody>
</table>