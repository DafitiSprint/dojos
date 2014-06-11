(function(){

    var Class = function() {
        this.hello = 'hello';
    }

    Class.prototype.world = function() {
        return 'world';
    }

    Class.prototype.sayHello = function () {
        $('body').html(this.hello + ' ' + this.world() + "<br><br><br><br><br>JQuery!");
        $(document).trigger('sup.JQuery');
    }

    $(document).on('keypress', function(){
        var obj = new Class();
        obj.sayHello();
    });

    $(document).on('click keypress touch hoasdhoaiw shang', function(){
        alert('oi');
    });

})();


(function(){
    $(document).on('sup.JQuery', function(){
        $('body').css('background-color','red');
        $('body').css('color','white');
        $(document).one('sup.simple', function(){
            $('body').css('color','green');
        });
    });
})();




var data = new Data();

data.metodo()
data['metodo']()

var met = 'metodo';

data[met]()










// this does the DOM search for $('.container') "n" times
for (var i = 0; i < n; i++) {
    $('.container').append(“Line “+i+”<br />”);
}

// this accomplishes the same thing...
// but only does the DOM search for $('.container') once,
// although it does still modify the DOM "n" times
var $container = $('.container');
for (var i = 0; i < n; i++) {
    $container.append("Line "+i+"<br />");
}

// or even better yet...
// this version only does the DOM search for $('.container') once
// AND only modifies the DOM once
var $html = '';
for (var i = 0; i < n; i++) {
    $html += 'Line ' + i + '<br />';
}
$('.container').append($html);












