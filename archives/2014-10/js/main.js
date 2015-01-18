$(document).ready(function(){
	
	// Mobile menu button action
    $('.open-close').click(function(){
        $(this).next('ul').slideToggle(333);
    });

    // Countdown timer
    var end = new Date('November 3, 2013 00:00');
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {
            clearInterval(timer);
            document.getElementById('countdown').innerHTML = '0 hours';
            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);
        document.getElementById('countdown').innerHTML = days + ' days ' + hours + ' hours ' + minutes + ' minutes ' + seconds + ' seconds';
    }
    var timer = setInterval(showRemaining, 1000);

});