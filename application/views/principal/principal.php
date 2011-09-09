<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="lembretes">
    <h1>Hoje</h1>
    <div id="info_receber" class="info_conta">
        <h2>Receber</h2>
        <span><?php echo $total_vencidas_receber; ?></span>
        <h3>Vencidas</h3>
    </div>
    <div id="info_pagar" class="info_conta">
        <h2>Pagar</h2>
        <span><?php echo $total_vencidas_pagar; ?></span>
        <h3>Vencidas</h3>
    </div>
    <h1>Amanhã</h1>
    <div id="info_receber" class="info_conta">
        <h2>Receber</h2>
        <span><?php echo $total_vencendo_amanha_receber; ?></span>
        <h3>Vencendo</h3>
    </div>
    <div id="info_pagar" class="info_conta">
        <h2>Pagar</h2>
        <span><?php echo $total_vencendo_amanha_pagar; ?></span>
        <h3>Vencendo</h3>
    </div>
    <div style="clear: both"></div>
    <div style="clear: both"></div>
</div>