const sql = require("MSSQL");
const config = {
    server: "172.16.56.27",
    port: 1433,
    user: "BaseUnica",
    password: "Rede2020@",
    database: "REDESUL",
    options: {
        encrypt: false,
        trustServerCertificate: true,
        }
};

async function SeniorComplete(){
    try{
        let pool = await sql.connect(config)
        let result = await pool.request().query(`select distinct 
        R.numcad,R.numcpf,R.nomfun, N.NomLoc as NomeLocal, RUA.endrua as 'Rua', RUA.endnum as 'Numero', BAI.NomBai as Bairro, CID.NomCid as Cidade, RUA.endcep as CEP,
        RUA.endcpl as Complemento
        
        from REDESUL..R034fun R
        left join REDESUL..R016ORN N on R.numloc = N.NumLoc
        left join REDESUL..R016HIE C on N.NumLoc = c.NumLoc
        left join REDESUL..R006ESC E on R.codesc = E.CodEsc
        left join REDESUL..R034CPL RUA on RUA.numcad = R.numcad
        left join REDESUL..R074CID CID on CID.CodCid = RUA.CodCid
        left join REDESUL..R074BAI BAI on BAI.CodBai = RUA.codbai
        
        where r.Taborg = 6
        and r.numcad = 15787`)
        console.log(result)
        sql.close()
    } catch (error){
        console.log("Deu erro")
    }
}

SeniorComplete();