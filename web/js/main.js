$(function () {

    var body = $('body'),
        rocketPayloadAndromeda = $('#rocket-payload-andromeda');

    window.andro = {
        speaking: function () {
            rocketPayloadAndromeda.addClass('glow');
            setTimeout(function(){
                andro.silent();
            }, 10000);
        },
        silent: function () {
            rocketPayloadAndromeda.removeClass('glow');
        },
        phase: function (n) {
            body.addClass('phase-' + n);
            this.speaking();
        },
    };

    setInterval(function () {
        $.get('/phase.dat', function(data) {
            switch (data) {
                case 0:
                    return;
                default:
                    andro.phase(data);
                    return;
            }
        });
    }, 200);
});