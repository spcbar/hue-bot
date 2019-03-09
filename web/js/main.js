$(function () {

    var body = $('body'),
        rocket = $('#rocket'),
        rocketPayload = $('#rocket-payload'),
        rocketPayloadAndromeda = $('#rocket-payload-andromeda');

    window.andro = {
        speaking: function () {
            rocketPayloadAndromeda.addClass('glow');
        },
        silent: function () {
            rocketPayloadAndromeda.removeClass('glow');
        },
        phase: function (n) {
            body.addClass('phase-' + n);
            if (n == 3) {
                this.speaking();
            }
            if (n == 4) {
                this.silent();
            }
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