document.getElementById('ponto-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const nome = document.getElementById('nome').value;
    const tipo = document.getElementById('tipo').value;
    const listaRegistros = document.getElementById('lista-registros');

    const novoRegistro = document.createElement('li');
    const dataAtual = new Date().toLocaleString();
    novoRegistro.textContent = `${dataAtual} - ${nome} registrou ${tipo}`;
    
    listaRegistros.appendChild(novoRegistro);

    // Limpar o formulário
    this.reset();
});