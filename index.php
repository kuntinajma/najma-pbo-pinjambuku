<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunti Najma Jalia - 2022150182</title>

    <style>
        main {
            width: 100vw;
            min-height: 100vh;
            display: flex;
            flex-direction: row;
            align-items: start;
            justify-content: center;
        }

        section {
            width: 50%;
            padding: 10px;
        }

        .form-pinjam {
            display: flex;
            flex-direction: column;
            gap: 5px;
            justify-content: start;
            align-items: start;
        }
    </style>
</head>
<body>
    <h1>Pinjam Meminjam</h1>

    <?php
        require_once './db.php';

        $dataPinjam = $_POST;
        $listDataPinjam = array();

        array_push($listDataPinjam, $dataPinjam);
    ?>

    <main>
        <section>
            <form action="" method="post" class="form-pinjam">
                <label for="mahasiswa">Pilih Mahasiswa</label>
                <select name="mahasiswa" id="mahasiswa">
                    <option value="">-- Pilih Mahasiswa --</option>
                    <?php foreach ($listMhs as $mhs) {
                        echo "<option value=", $mhs->nimMahasiswa, ">", $mhs->namaMahasiswa, "</option>";
                    } ?>
                </select>
                <label for="buku">Pilih Buku</label>
                <select name="buku" id="buku">
                    <option value="">-- Pilih Buku --</option>
                    <?php foreach ($listBook as $book) {
                        echo "<option value=", $book->kodeBuku, ">", $book->judulBuku, "</option>";
                    } ?>
                </select>
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam" id="tanggal_pinjam">

                <button type="submit">Pinjam!</button>
            </form>
        </section>
        <section>
                <?php 
                    var_dump($listDataPinjam);
                ?>
        </section>
    </main>
</body>
</html>
