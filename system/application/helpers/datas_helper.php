<?php
/**
 * Helper para as datas.
 *
 * Aqui há funções para auxiliar na formatação das datas
 *
 * @author Evaldo Junior <junior@casoft.info>
 * @version 0.1
 * @package moedas
 * @subpackage helpers
 */

/**
 * Esta função formata uma data no formado AAAA-MM-DD para o formato DD/MM/AAAA
 *
 * @param string $data Data no formado AAAA-MM-DD
 * @return string
 */
function date_to_brazil($data) {
    return substr($data, 8, 2).'/'.substr($data, 5, 2).'/'.substr($data, 0, 4);
}

/**
 * Esta função formata uma data no formado DD/MM/AAAA para o formato AAAA-MM-DD
 * use esta função para inserir datas no MySQL
 *
 * @param string $data Data no formato DD/MM/AAAA
 * @return string
 */
function brazil_to_date($data) {
    return substr($data, 6, 4).'-'.substr($data, 3, 2).'-'.substr($data, 0, 2);
}

?>
