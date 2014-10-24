var RandomWords = function()  {
}

RandomWords.prototype.generate = function(length) {
    var word = [];
    for (var i=0; i < length; i++) {
        word.push('j');
    }
    return word.join('');
}
