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
                    <a class="nav-link text-light" aria-current="page" href="/index.php"
                    >Home</a
                    >
                    <a class="nav-link text-light" href="/Zuzu/bestel.php">Bestellen</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="wrapper container-fluid">

        <section class="row">
            <div class="col-12 banner"></div>
        </section>

        <article class="container-sm">
            <article class="row text-center">
                <article class="row">
                    <h1>
                        <?php
                        echo "Goede ";
                        $pora = date("H");
                        if ($pora <= 23 && $pora >= 18) {
                            echo "avond";
                        } elseif ($pora <= 17 && $pora >= 12) {
                        echo "middag";
                        } elseif ($pora <= 11 && $pora >= 6) {
                        echo "ochtend";
                        } else {
                            echo "nacht";
                        }
                        echo ", welkom op Zuzu"
                        ?>
                    </h1>
                </article>
                <article class="row">
                    <a
                    >Wij zijn gespecialiseerd in de Japanse keuken <br />
                        Het woord is afkomstig van "su", wat azijn betekent en "shi"
                        --- rijst.
                    </a>
                </article>
                <article class="row">
                    <p>
                        <?php
                            echo "Vandaag ";
                            if (date("w")==1) {
                                echo "mandaag ";
                            } elseif (date("w")==2) {
                                echo "dinsdag ";
                            } elseif (date("w")==3) {
                                echo "woensdag ";
                            } elseif (date("w")==4) {
                                echo "donderdag ";
                            } elseif (date("w")==5) {
                                echo "vrijdag ";
                            } elseif (date("w")==6) {
                                echo "zaterdag ";
                            } else {
                                echo "zondag ";
                            }
                            echo date("d ");
                            switch (date("m")) {
                                case 0: echo "january ";
                                    break;
                                case 1: echo "februari";
                                    break;
                                case 3: echo "march ";
                                    break;
                                case 4: echo "april ";
                                    break;
                                case 5: echo "mai ";
                                    break;
                                case 6: echo "juni ";
                                    break;
                                case 7: echo "juli ";
                                    break;
                                case 8: echo "augustus ";
                                    break;
                                case 9: echo "september ";
                                    break;
                                case 10: echo "october ";
                                    break;
                                case 11: echo "november ";
                                    break;
                                default: echo "december ";
                            }
                            echo date("Y");
                            echo "<br>";
                            $bezorgtijd = date("H") + 1 . ":" . date("i");
                            echo "Bezorgtijd vanaf nu: " . $bezorgtijd;
                        ?>
                    </p>
                </article>
            </article>
        </article>
        <section class="container-sm">
            <section class="row">
                <div class="card col-6">
                    <img
                        src="/Zuzu/media/sushi-card.jpg"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">Bestel bij ons je sushi's</h5>
                    </div>
                </div>
                <div class="card col-6">
                    <img
                        src="/Zuzu/media/sushi-2.1.jpg"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">
                            Keuze uit verschillende soorten sushi's
                        </h5>
                    </div>
                </div>
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
                        Contactgegevens <br />
                        Appelstraat 1 <br />
                        1111AA Fruit <br />
                        zuzu@gmail.com <br />
                        06-12345678
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