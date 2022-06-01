    <?php
        require "layouts/header.php";
        require "layouts/footer.php";
    ?>

    <main class="container mt-2">
        <!-- Example split danger button -->
        <div class="row">
            <div class="dropdown col-auto">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Patrones de creación
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="factory.php">Factory</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="prototype.php">Prototype</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="singleton.php">Singleton</a></li>
                </ul>
            </div>

            <div class="dropdown col-auto">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Patrones de estructura
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="adapter.php">Adapter</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="decorator.php">Decorator</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="facade.php">Facade</a></li>
                </ul>
            </div>

            <div class="dropdown col-auto">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                    Patrones de comportamiento
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                    <li><a class="dropdown-item" href="iterator.php">Iterator</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="observer.php">Observer</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="strategy.php">Strategy</a></li>
                </ul>
            </div>
        </div>
    </main>
