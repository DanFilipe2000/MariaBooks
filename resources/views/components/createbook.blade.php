<div class="d-flex justify-content-center align-items-center me-5 h-100" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <form action="/create/book" method="post">
        @csrf
        <h1 style="font-size: 25px; background-color: #FFA07A; color: black; padding: 10px 20px; border-radius: 10px 10px 0 0; text-align: center;">Adicione um livro à sua coleção:</h1>

        <label for="name" class="mt-3">Título:</label>

        <input class="form-control mb-3" name="title" type="text" placeholder="Memórias Póstumas de Brás Cubas">

        <label for="autor">Autor:</label>

        <input class="form-control mb-3" name="autor" type="text" placeholder="Machado de Assis">

        <label for="company">Editora</label>

        <input class="form-control mb-3" name="company" type="text" placeholder="Carambaia">

        <label for="gender">Gênero</label>

        <input class="form-control mb-3" name="gender" type="text" placeholder="Romance">

        <label for="status">Já leu esse livro?</label>

        <select class="form-control mb-3" name="status" aria-placeholder="read">
            <option value="read">Sim, já terminei</option>
            <option value="in-progress">Estou lendo</option>
            <option value="not-started">Nunca li</option>
        </select>

        <button class="btn btn-success" type="submit" style="margin-left: 77%;">Adicionar</button>
    </form>
</div>