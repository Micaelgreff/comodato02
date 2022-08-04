const http = require("http");
const port = 8001;
const server = http.createServer((req, res) => {
    res.statuscode = 200;
    res.setheader('Conten-type', 'text/plain');
    res.end('Hello  World!\n');
});

server.listen(8001, () => {
    console.log(`Servidor rodando em: http://localhost:4001`)
})