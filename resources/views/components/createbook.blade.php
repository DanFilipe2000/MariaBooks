<div class="d-flex justify-content-center align-items-center me-5 h-100">
    <form action="/create/book" method="POST">
        <h1 style="font-size: 25px">Adicione um livro a sua coleção:</h1>

        <label for="name">Título:</label>

        <input class="form-control mb-3" name="name" type="text" placeholder="Memórias Póstumas de Brás Cubas">

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

        <button class="d-flex btn bi bi-plus-circle-fill fs-3" type="submit" style="color: #228B22;  border-radius: 100%; padding: 0px; margin-left: 90%"></button>
    </form>
</div>