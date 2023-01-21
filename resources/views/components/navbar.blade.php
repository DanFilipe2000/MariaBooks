<nav class="navbar fixed-top navbar-light border-bottom" style="background-color: #FF725E">

    <div class="container-fluid" style="width: 900px; max-width: 100%;">
    
        <div class="navbar-header">

            <a href="/dashboard" class="navbar-brand d-flex mt-2">

                <h2 class="bi bi-book fs-3">MariaBooks</h2>

            </a>

        </div>

        <form class="d-flex flex-row" method="get" action="/books/{title}">
            <input class="form-control fs-8 mr-sm-2 mt-3" style="height: 30px" type="search" placeholder="Busque por um livro" aria-label="Search">
            <button class="btn bi bi-search fs-3 ms-1" type="submit"></button>
        </form>

        <div class="navbar-nav flex-row">

            <a href="/" class="nav-link me-3">
                <i class="bi bi-heart-fill fs-3"></i>
            </a>

            <a href="/logout" class="nav-link me-3">
                <i class="bi bi-door-closed-fill fs-3"></i>
            </a>

        </div>

    </div>

</nav>