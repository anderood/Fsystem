<section class="container-central">
    <h3>Cadastro de Membros</h3>
    @include('components.messages.index')
    <form method="post">
        @csrf
        <div>
            <label>Primeiro Nome:</label>
            <input type="text" name="first_name" id="">
        </div>
        <div>
            <label>Ultimo Nome:</label>
            <input type="text" name="last_name" id="">
        </div>
        <div>
            <label>Telefone</label>
            <input type="text" name="phone" id="">
        </div>
        <div>
            <label>Data de Nascimento</label>
            <input type="text" name="dateOfBirth" id="">
        </div>
        <div>
            <label>E-mail</label>
            <input type="text" name="email" id="">
        </div>
        <div>
            <label>Ativo:</label>
            <select name="is_active">
                <option selected value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div>
            <label>Observação</label>
            <textarea name="observations" rows="4" cols="50">At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.</textarea>
        </div>

        <h2>Endereço</h2>
        <div>
            <label>CEP: </label>
            <input type="text" name="zip_code" id="">
        </div>
        <div>
            <label>Rua: </label>
            <input type="text" name="street" id="">
        </div>
        <div>
            <label>Numero</label>
            <input type="text" name="number" id="">
        </div>
        <div>
            <label>Complemento</label>
            <input type="text" name="complement" id="">
        </div>
        <div>
            <label>Bairro: </label>
            <input type="text" name="district" id="">
        </div>
        <div>
            <label>Cidade: </label>
            <input type="text" name="city" id="">
        </div>
        <div>
            <label>Estado</label>
            <input type="text" name="state" id="">
        </div>

        <button type="submit">Cadastrar</button>
    </form>
</section>
