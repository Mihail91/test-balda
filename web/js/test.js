test = (function(){

    var init = function () {
        begin = prompt('enter begin number');
        end = prompt('enter end number');
        var sum = (end - begin)/2*end + (end - begin)/2;
        console.log('tester');
        /*for(var i = 1; i <= end; i++){
            sum += i;
        }*/
        alert(sum);
        /*number = prompt('enter count iterate');
        if (number < 2){
            number == 1 ? alert('fibonachchi numbers: 0 1') : alert('fibonachchi numbers: 0');
            return;
        }
        var first = 0,
            second = 1,
            text = 'fibonachchi numbers: 0 1';
        for (var i = 2; i <= number; i++){
            second = first + second;
            first = second - first;
            text += ' ' + (second);
        }
        alert(text);*/
      /*  number = prompt('enter your number');
        var sum = 1;
        for (var i = 1; i <= number; i++){
            sum *= i;
        }
        alert('factorial is '+ sum);*/
    };

    return {
        init: init
    };
}());