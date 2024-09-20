import {sql} from './db.js'

sql `
create table usuarios(
	id_Usuario text PRIMARY KEY,
	nomeCompleto text,
	nomeEmpresa text,
	email text,
	senha text,
	genero text
);
`
.then(()=>
console.log('Tabela criada com sucesso!'))