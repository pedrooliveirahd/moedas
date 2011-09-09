<?php
/**
 * Helper para a formatação de números/moeda.
 *
 * Aqui há funções para auxiliar na formatação dos números/moeda
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package moedas
 * @subpackage helpers
 */

/**
 * Esta função formata um número em moeda do Brasil 'R$ 0.000,00'
 *
 * @param float $numero Número a formatar
 * @return string
 */
function number_to_currency($numero) {
    return 'R$ '.number_format($numero, 2, ',', '.');
}

?>
