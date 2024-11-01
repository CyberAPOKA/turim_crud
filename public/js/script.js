const std = {
    nome: document.getElementById('nome'),
    incluir: document.getElementById('incluir'),
    json: document.getElementById('json'),
    tabelas: document.getElementById('tabelas'),
    inputForm: document.getElementById('inputForm')
};

function formatoJson() {

    const pretty = JSON.stringify(textarea, undefined, 4);
    std.json.value = pretty;

}

function incluir(valor, index = null) {
    if (index) {
        textarea.pessoas[index].filhos.push(valor)
    } else {
        textarea.pessoas.push({
            nome: valor,
            filhos: []
        })
    }

    render()


}

function render() {

    formatoJson()

    std.tabelas.innerHTML = ''

    for (let index in textarea.pessoas) {
        createTabela(textarea.pessoas[index], index, std.tabelas)
    }

    std.inputForm.value = JSON.stringify(textarea)
}

function createTabela(data, index, campo) {
    const tabela = document.createElement('table')
    const td = document.createElement('td')
    const tr = document.createElement('tr')
    const tdButton = document.createElement('td')
    const button = document.createElement('button')
    const tdFilho = document.createElement('td')
    const trFilho = document.createElement('tr')
    const buttonFilho = document.createElement('button')

    tabela.classList.add('table')
    td.innerHTML = data.nome
    button.innerHTML = 'Remover <i class="bi bi-trash"></i>'
    buttonFilho.innerHTML = 'Adicionar filho <i class="bi bi-plus-lg"></i>'

    button.addEventListener('click', () => {
        remove(index)
    })

    buttonFilho.addEventListener('click', () => {
        let nomeFilho = prompt('Informe o nome do filho.')
        incluir(nomeFilho, index)
    })

    tdFilho.append(buttonFilho)
    trFilho.append(buttonFilho)
    tdButton.append(button)
    tr.append(td)
    tr.append(tdButton)
    tabela.append(tr)

    for (let indexFilho in data.filhos) {
        createTr(data.filhos[indexFilho], tabela, index, indexFilho)
    }

    tabela.append(trFilho)
    campo.append(tabela)
}

function createTr(data, campo, index, indexFilho) {
    const tr = document.createElement('tr')
    const td = document.createElement('td')
    const tdButton = document.createElement('td')
    const button = document.createElement('button')

    td.innerHTML = data
    button.innerHTML = 'Remover filho <i class="bi bi-trash"></i>'

    button.addEventListener('click', () => {
        remove(index, indexFilho)
    })


    tdButton.append(button)
    tr.append(td)
    tr.append(tdButton)
    campo.append(tr)
}

function remove(index, nomeIndex = null) {
    if (nomeIndex) {
        textarea.pessoas[index].filhos.splice(nomeIndex, 1)
    } else {
        textarea.pessoas.splice(index, 1)
    }

    render()
}

window.onload = () => {
    std.incluir.addEventListener('click', () => {
        let texto = std.nome.value
        incluir(texto)
        std.nome.value = ''
    })
    render()
}
