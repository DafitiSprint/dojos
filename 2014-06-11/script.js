/*
(function(){
    //self called
})();

function oi(){

}
oi();

(function(){
    alert('bruno');
}());

*/





(function(){

    var Class = function() {
        this.hello = 'hello';
    }

    Class.prototype.world = function() {
        return 'world';
    }

    Class.prototype.sayHello = function() {
        document.getElementsByTagName('body')[0].innerText = this.hello + ' ' + this.world();
        document.dispatchEvent(new Event('sup.pure'));
    }

    document.addEventListener('click', function(){
        var obj = new Class();
        obj.sayHello();
    })

})();

(function(){
    document.addEventListener('sup.pure', function(){
        document.body.style.backgroundColor = 'yellow';
        document.body.style.color = 'black';
    });
})();















/*
function Scope(){
    console.log('scope', this);
    function ContextChild() {
        console.log('child', this);
    }
    ContextChild();
}

Scope();
new Scope();

*/




/**
 *
 *
 *      Melhorias (?)
 *
 *
 */

 // minify
(function(d, w){
    console.log(d);
    console.log(w);
    d.innerText = w.location.href;
})(document, window);



// named functions
(function(){
    function Class() {
        this.hello = 'hello';
    }

})();