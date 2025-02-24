<div class="container">
    <form id="praiseForm" method="POST" action="{{ route('pedido.oracao') }}">
        @csrf
        <div class="mb-3 mt-5">
            <h2 class="text-center" style="color:rgb(255, 145, 0)">Faça seu pedido de oração</h2>
            <label for="nomeInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nomeInput" name="nome" placeholder="Nome (opcional)">
        </div>

        <div class="mb-3">
            <label for="motivoTextarea" class="form-label">Motivo</label>
            <textarea class="form-control" id="motivoTextarea" name="motivo" rows="1" placeholder="Pela minha família..." required></textarea>
        </div>

        <div class="mb-3">
            <label for="conteudoTextarea" class="form-label">Conteúdo</label>
            <textarea class="form-control" id="conteudoTextarea" name="conteudo" rows="10" placeholder="..." required></textarea>
        </div>

        <div class="mb-3 text-left">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>


    <div id="mensagem"></div>
</div>

<script>
    document.getElementById('praiseForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio normal do formulário

        // Cria o objeto FormData com os dados do formulário
        var formData = new FormData(this);

        // Faz a requisição AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', this.action, true);
        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}'); // Adiciona o token CSRF

        // Define o que fazer ao receber a resposta
        xhr.onload = function() {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                // Exibe a mensagem retornada pelo PHP
                document.getElementById('mensagem').innerHTML = response.mensagem;
                document.getElementById('praiseForm').reset(); // Limpa o formulário
                // Esconde a mensagem após 5 segundos
                setTimeout(function() {
                    document.getElementById('mensagem').innerHTML = '';
                }, 5000);
            } else {
                document.getElementById('mensagem').innerHTML = "Ocorreu um erro. Tente novamente.";
            }
        };

        // Envia o formulário
        xhr.send(formData);
    });
</script>
