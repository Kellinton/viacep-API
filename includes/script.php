<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
      document.getElementById('button-addon2').addEventListener('click', function() {
        var cep = document.getElementById('cepInput').value.replace('-', '');
        if (cep.length === 8) {
          fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
              if (!data.erro) {
                document.getElementById('logradouro').innerText = data.logradouro;
                document.getElementById('bairro').innerText = data.bairro;
                document.getElementById('localidade').innerText = data.localidade;
                document.getElementById('cep').innerText = data.cep;
              } else {
                toastr.error('CEP não encontrado!', 'Erro');
              }
            })
            .catch(error => {
              console.error('Erro ao buscar o CEP:', error);
              toastr.error('Erro ao buscar o CEP!', 'Erro');
            });
        } else {
          toastr.warning('Por favor, insira um CEP válido com 8 dígitos.', 'Atenção');
        }
      });
</script>