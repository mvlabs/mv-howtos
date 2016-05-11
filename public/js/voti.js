$( document ).ready(function() {
    $('.js-vota').on('click', function() {
        var voto = $(this).data('voto');

        var spanRisultato = $(this).parent().find('.js-voto');
        var istruzione = spanRisultato.data('istruzione');

        $.post("/istruzioni/voto", {istruzione: istruzione, voto: voto}, function(data) {
            var voti_positivi = data.istruzione.voti_positivi;
            var voti_negativi = data.istruzione.voti_negativi;

            spanRisultato.html(voti_positivi + ' voti positivi / ' + voti_negativi + ' voti negativi');
        });

    });
});
