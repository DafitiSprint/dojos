var truncate = function(str, num) {
    var truncated = str;
    var trash = str.length - num;

     if (num >= 1) {
        truncated = str.slice(0 , -trash);
    }

    return truncated + '...';
}
