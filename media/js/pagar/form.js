$(document).ready( function() {
    $('#botao_cancelar').click( function() {
        window.location = site_url + 'pagar';
    });

    $('#form_pagar').validate({
        rules : {
            descricao : {
                required : true,
                minlength : 5
            },
            vencimento : {
                required : true
            },
            pagamento : {
                required : true
            },
            valor : {
                required : true
            }
        },
        messages : {
            descricao   : 'Descreva esta conta com, no mínimo, cinco caracteres',
            vencimento  : 'Informe a data de vencimento do título',
            pagamento   : 'Informe a data de pagamento do título',
            valor       : 'Informe o valor da conta'
        }
    });

    $('#valor, #multa, #desconto').priceFormat({
        prefix              : '',
        centsSeparator      : ',',
        thousandsSeparator  : '.'
    });

    $('#botao_submit').click( function() {
        $('#form_pagar').submit();
    })

    $('#vencimento, #pagamento').mask('99/99/9999');
});
