<html>
    <header>
        <title>ToDo Application</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" /><!-- REMOVE AND USE TAILWIND -->
    </header>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">ToDo App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">All Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tasks/create">New Task</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('main')
            @yield('content')
        </div>
    </body>
    <footer>
        <div class="container">Powered By Laravel; Author: Brad Mance</div>
    </footer>
</html>