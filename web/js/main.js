$(function(){

    var rocket = $('#rocket'),
        rocketPayload = $('#rocket-payload'),
        rocketPayloadAndromeda = $('#rocket-payload-andromeda');

    window.andro = {
        speaking: function () {
            rocketPayloadAndromeda.addClass('glow');
        },
        silent: function () {
            rocketPayloadAndromeda.removeClass('glow');
        },

    };
});