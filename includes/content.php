<div class="w-50 vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="d-flex">
        <h1 class="mx-2 text-success">ViaCEP</h1>
        <img style="height: 45px;" src="./assets/img/bandeira-brasil.png" alt="Bandeira do Brasil">
    </div>
    <div class="input-group mb-3">
        <input id="cepInput" type="text" class="form-control" placeholder="Informe o CEP" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn bg-success btn-outline-secondary text-white" type="button" id="button-addon2">Procurar</button>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th class="bg-success text-white" scope="col">Logradouro</th>
            <th class="bg-success text-white"scope="col">Bairro</th>
            <th class="bg-success text-white"scope="col">Localidade</th>
            <th class="bg-success text-white"scope="col">CEP</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td id="logradouro"></td>
            <td id="bairro"></td>
            <td id="localidade"></td>
            <td id="cep"></td>
            </tr>
        </tbody>
    </table>
</div>