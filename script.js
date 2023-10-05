const novoCafe = {
    usuarios: [
        {
            username: 'Clayton',
        }
    ],
    postscafe: [
        {
            id: 1,
            owner: 'Clayton',
            content: 'Primeiro café'
        }
    ],
};
// CREATE
function criaCafe({dados}){
    novoCafe.postscafe.push({
        id: novoCafe.postscafe.length + 1,
        owner: dados.owner,
        content: dados.content
    })
}
criaCafe({ owner: 'Clayton', content: 'Segundo café'});
console.log(novoCafe.postscafe)

//READ
function pegaCafe() {
    return novoCafe.postscafe;
}
console.log(pegaCafe())
//UPDATE
function atualizaContentDoPost(id, novoConteudo) {
    const postscafeQueVaiSerAtualizado = pegaCafe().find((postscafe) => {
        return postscafe.id === id;
    })
    console.log(postscafeQueVaiSerAtualizado)
    postscafeQueVaiSerAtualizado.content = novoConteudo


}
atualizaContentDoPost(1, 'Novo conteúdo do café')
console.log(pegaCafe())
//DELETE
function apagaCafe(id) {
    const listaDeCafeAtualizada = pegaCafe().filter((cafeAtual) => {
        return cafeAtual.id !== id;
    })
    novoCafe.postscafe = listaDeCafeAtualizada;
}
apagaCafe(1);
console.log(pegaCafe());