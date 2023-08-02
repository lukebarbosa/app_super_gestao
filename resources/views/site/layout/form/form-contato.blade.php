<form action="{{ route('contato.store') }}" method="POST">
    @csrf
    <input type="text" placeholder="Nome">
    <br>
    <input type="text" placeholder="Telefone">
    <br>
    <input type="text" placeholder="E-mail">
    <br>
    <select>
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea placeholder="Preencha aqui a sua mensagem"></textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>
