<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FWD1_MarizkaMaulidina_PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@800&family=Open+Sans:wght@600&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Open Sans', sans-serif; background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);; background-size:cover; background-attachment:fixed; background-repeat:no-repeat">
    <div class="container bg-white my-5 py-3 px-5 rounded-4">
        <h1 class="text-center py-3" style="font-family: 'Maven Pro', sans-serif !important">Latihan1_php</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input class="form-control" type="text" name="str" id="str" placeholder="Masukkan String" required>
                        <label for="str">Masukkan String</label> <br>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <input class="form-control" type="number" name="loop" id="loop" placeholder="Masukkan perulangan" required>
                        <label for="loop">Masukkan Pengulangan</label>
                    </div>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-primary" style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 3rem; --bs-btn-font-size: 1rem;" type="submit">Submit</button>
                </div>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kata = $_POST['str'];
            $banyak = $_POST['loop'];

            $hitung = 1;
            echo "<h4 class='mt-3'>Output : <hr></h4>";
            while ($hitung <= $banyak) {
                echo "$kata $hitung <br>";
                $hitung++;
            }
            echo "<hr>";
            if ($banyak % 2 == 0) {
                echo "$banyak merupakan Bilangan Genap";
            } else {
                echo "$banyak merupakan Bilangan Ganjil";
            }
        }
        ?>
    </div>

    <div class="text-center text-white">
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 20 20">
                <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z" />
            </svg>
            2022 by Marizka Maulidina | FWD 1
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>