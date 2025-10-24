// make sure requestAnimationFrame and cancelAnimationFrame are defined
// polyfill for browsers without native support
// by Opera engineer Erik Möller
(function () {
    var lastTime = 0;
    var venders = ["webkit", "moz", "ms", "o"];
    for (var x = 0; x < venders.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame =
            window[venders[x] + "RequestAnimationFrame"];
        window.cancelAnimationFrame =
            window[venders[x] + "CancelAnimationFrame"] ||
            window[venders[x] + "CancelRequestAnimationFrame"];
    }
    if (!window.requestAnimationFrame) {
        window.requestAnimationFrame = function (callback) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function () {
                return callback(currTime + timeToCall);
            }, timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };
    }
    if (!window.cancelAnimationFrame) {
        window.cancelAnimationFrame = function (id) {
            clearTimeout(id);
        };
    }
})();
