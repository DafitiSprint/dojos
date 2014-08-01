var http = require('http');
var router = require('./router');

var server = http.createServer(router.index);

server.listen(8083);