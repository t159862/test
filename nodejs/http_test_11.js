var http=require('http')
var server=http.createServer(function(req, res) {
  req.on('data', function(chunk) {
    console.log(chunk.toString());
    });
  req.on('end', function() {
    console.log('Request ends');
    res.end();
    });
  });
server.listen(8080, 'localhost');
console.log('HTTP 伺服器正在監聽 8080 埠 ...');