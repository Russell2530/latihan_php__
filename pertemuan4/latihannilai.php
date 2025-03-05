<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <?php
    $nama = "";
    $tugas = "";
    $uts = "";
    $uas = "";

     // isset() memeriksa apakah variabel ada dan tidak bernilai null.
    //         mengambilkan true jika variabel ada dan tidak null.
    
    // !isset() memerikasa apakah variabel tidak ada atau bernilai null.
    //          mengambilkan true jika variabel tidak ada atau null.
    
    // session : digunakan untuk menyimpan data sementara yang dapat diakses oleh pengguna selama periode tertentu 
    
    // inisialisasi sesi untik menyimpan data siswa
    session_start();

    // memeriksa apakah $_SESSION['data_siswa'] sudah ada atau belum
    if (!isset($_SESSION["siswaList"])) { // true
        $_SESSION["siswaList"] = []; // jika kondisi true maka akan dibuatkan array kosong
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // cara apakah inputan form ada atau tidak kosong
        if (isset($_POST['nama']) && isset($_POST['nilai']) && isset($_POST['uts']) && isset($_POST['uas'])) {

            // ambil data dari form
            $nama = $_POST["nama"];
            $tugas = $_POST["nilai"];
            $uts = $_POST["uts"];
            $uas = $_POST["uas"];

            // hitung nilai akhir
            $nilai = ((30 / 100) * $uts) + ((40 / 100) * $uas) + ((30 / 100) * $tugas);

            // kategori nilai
            if ($nilai >= 85) {
                $status = "A";
            } elseif ($nilai >= 70) {
                $status = "B";
            } elseif ($nilai >= 60) {
                $status = "C";
            } elseif ($nilai >= 50) {
                $status = "D";
            } else {
                $status = "E";
            }

            // simpan data siswa ke dalam session
            $_SESSION['siswaList'][] = [
                'nama' => $nama,
                'nilai' => $tugas,
                'kategori' => $status,
            ];
        }
    }

    //  cek jika tombol hapus data di klik, maka sesi akan dihancurkan
    if (isset($_POST['hapus_data'])) {

    session_destroy(); // menghapus semua data yang ada di sesi

    session_start();
    $_SESSION['siswaList'] = [];
    }

    ?>

    <div class="bg-white p-8 rounded-lg shadow-lg w-150 m-10">
        <h2 class="text-2xl font-semibold mb-4 text-center">Form Input Nilai Siswa</h2>

        <form action="" method="POST">
            <label for="">Nama Siswa</label>
            <input type="text" name="nama" class="w-full p-2 mb-4 border border-gray-300 rounded-md" autocomplate="off">
            <label for="">Nilai Tugas</label>
            <input type="number" name="nilai" class="w-full p-2 mb-4 border border-gray-300 rounded-md"
                autocomplate="off">
            <label for="">Nilai UTS</label>
            <input type="number" name="uts" class="w-full p-2 mb-4 border border-gray-300 rounded-md"
                autocomplate="off">
            <label for="">Nilai UAS</label>
            <input type="number" name="uas" class="w-full p-2 mb-4 border border-gray-300 rounded-md"
                autocomplate="off">

            <input type="submit" name="hitung" value="Hitung Nilai"
                class="w-full p-3 mb-4 bg-purple-500 rounded-md text-white hover:bg-purple-700 cursor-pointer">
        </form>
    </div>
    <div class="container">
        <div class="bg-white p-8 rounded-lg shadow-lg w-135 mx-8">
            <h2 class="text-2xl font-semibold mb-4 text-center">Hasil Penilaian</h2>

            <table class="border-collapse border border-gray-400 w-120 items-center">
                <thead>
                    <tr class="bg-black text-white">
                        <th class="border border-gray-300 p-3 ...">Nama</th>
                        <!-- <th class="border border-gray-300 p-3...">Nilai Tugas</th>
                        <th class="border border-gray-300 p-3...">Nilai UTS</th>
                        <th class="border border-gray-300 p-3...">Nilai UAS</th> -->
                        <th class="border border-gray-300 p-3...">Nilai Akhir</th>
                        <th class="border border-gray-300 p-3...">kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['siswaList'] as $list) : ?>
                    <tr>
                        <td class="border border-gray-300 text-center"><?php echo ($list['nama']) ?></td>
                        <td class="border border-gray-300 text-center"><?php echo ($list['nilai']) ?></td>
                        <td class="border border-gray-300 text-center"><?php echo ($list['kategori']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <form method="POST">
            <button type="submit" name="hapus_data" 
            class="w-135 p-3 mb-4 bg-red-500 rounded-md text-white hover:bg-red-700 cursor-pointer mx-8 mt-5"> Hapus Semua Data </button>
        </form>
    </div>

</body>

</html>