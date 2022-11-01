<?php
if (isset($_POST['Verzenden'])) {
    setcookie("kom", $_POST['kom'], time() + 3600);
    setcookie("avo", $_POST['avo'], time() + 3600);
    setcookie("nigirl", $_POST['nigirl'], time() + 3600);
    setcookie("phil", $_POST['phil'], time() + 3600);
    setcookie("tuna", $_POST['tuna'], time() + 3600);
    setcookie("cali", $_POST['cali'], time() + 3600);
    header('Location: /Zuzu/opsomming.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <title>ZuZu</title>
</head>
<body>
<div class="wrapper container-fluid">
    <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">ZUZU</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-light" aria-current="page" href="/Zuzu/index.php"
                    >Home</a
                    >
                    <a class="nav-link text-light" href="/Zuzu/bestel.php">Bestellen</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="container-fluid">
        <section class="row">
            <div class="col-2"></div>
            <section class="col-8">
                <h1>Sushi's bestellen</h1>
                <form method="post" action="">
                        <label for="komkomer" class="form-label"
                        >Maki komkomer (max =5)</label
                        >
                        <input
                            name="kom"
                            type="number"
                            class="form-control"
                            max="5"
                            required
                        />
                        <label for="avocado" class="form-label"
                        >Maki Avocado (max = 10)</label
                        >
                        <input
                            name="avo"
                            type="number"
                            class="form-control"
                            max="10"
                            required
                        />
                        <label for="zalm" class="form-label"
                        >Nigirl zalm (max = 10)</label
                        >
                        <input
                            name="nigirl"
                            type="number"
                            class="form-control"
                            max="10"
                            required
                        />
                        <label for="philiphia" class="form-label"
                        >Philiphia Roll (max = 5)</label
                        >
                        <input
                            name="phil"
                            type="number"
                            class="form-control"
                            max="5"
                            required
                        />
                        <label for="tuna" class="form-label"
                        >Spicy Tuna Roll (max = 5)</label
                        >
                        <input
                            name="tuna"
                            type="number"
                            class="form-control"
                            max="5"
                            required
                        />
                        <label for="roll" class="form-label"
                        >California Roll (max = 8)</label
                        >
                        <input
                            name="cali"
                            type="number"
                            class="form-control"
                            max="8"
                            required
                        />
                    <input type="submit" name="Verzenden" value="Verzenden"  class="btn btn-dark my-2">
                </form>
            </section>
        </section>
    </section>
    <footer class="container-fluid bg-dark">
        <footer class="row">
            <footer class="col-6 text-light text-center">
                <p>
                    Contactgegevens <br />
                    Appelstraat 1 <br />
                    1111AA Fruit <br />
                    zuzu@gmail.com <br />
                    06-12345678
                </p>
            </footer>
            <footer class="col-6 text-light text-center">
                <p>
                    Maandag: Gesloten <br />
                    Dinsdag: 16:00-22:00 <br />
                    Woensdag: 16:00-22:00 <br />
                    Donderdag: 16:00-22:00 <br />
                    Vrijdag: 15:00-22:00 <br />
                    Zaterdag: 15:00-22:00 <br />
                    Zondag: Gesloten
                </p>
            </footer>
        </footer>
    </footer>
</div>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
</body>
</html>