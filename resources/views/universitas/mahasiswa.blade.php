<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center mt-4">
        <h1>Daftar Mahasiswa</h1>
        <ol class="list-group my-4">
            <?php
            foreach ($mahasiswa as $nama) {
                echo "<li class=\"list-group-item\"> $nama </li>";
            }
            ?>
        </ol>
        <div>
            <img class="rounded-circle img-thumbnail m-2 w-25 h-25" src="/img/img1.webp">
            <img class="rounded-circle img-thumbnail m-2 w-25 h-25" src="/img/img2.webp">
            <img class="rounded-circle img-thumbnail m-2 w-25 h-25" src="/img/img3.webp">
        </div>
        <div>
            Copyright © <?php echo date('Y'); ?> Duniailkom
        </div>
    </div>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
