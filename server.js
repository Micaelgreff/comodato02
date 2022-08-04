const http = require("http");

http
    .createServer((request, response) =>{
        response.writeHead(200, { 'Content-Type': 'application/json' });

        if(request.url === '/users'){
            response.end(JSON.stringify({
                message : 'Página de users'
            }));
        }

        if(request.url === '/cadastro'){
            response.end(JSON.stringify({
                message : 'Página de cadastro'
            }));
        }
    })
    .listen(4001, () => console.log("O servidor está rodando na porta 4001"));