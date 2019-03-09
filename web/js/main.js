$(function(){

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
        phaseOne: function () {
            body.addClass('phase-1');
        },
        phaseTwo: function () {
            body.addClass('phase-2');
        }
    };
});