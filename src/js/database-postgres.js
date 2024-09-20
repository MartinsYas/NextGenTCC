import { sql } from "./db.js"
import { randomUUID } from "node:crypto"

export class DatabasePostgres {

    registrarUsuario() {
        const userID = randomUUID();
        const userInfo = {
            nomeCompleto: document.getElementById('nomeCompleto').innerText,
            nomeEmpresa: document.getElementById('nomeEmpresa').innerText,
            email: document.getElementById('email').innerText,
            senha: document.getElementById('senha').innerText,
            genero: document.querySelector("input[name='genero']:checked")
        }

        sql
    }
}

