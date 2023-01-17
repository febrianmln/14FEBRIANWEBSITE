<?php
include 'database_conn.php';
$query = "SELECT * FROM tampilan limit 200";
$result = mysqli_query($db_connect, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="">Guide Hebat</a>
            </div>
        </nav>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Tambah Data Admin</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Silahkan Masukkan Data Admin Yang Ingin Ditambahkan</p>
                </div>
            </div>
        </header>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="float-start mb-4">
                        <h2>Data Admin</h2>
                    </div>
                    <div class ="float-end">
                        <a href="add.php" class="btn btn-success">Tambah Data Baru</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID Admin</th>
                                <th scope="col">Nama Admin</th>
                                <th scope="col">Password Admin</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result->num_rows > 0) : ?>
                                <?php while ($data_baru = mysqli_fetch_assoc($result)) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $data_baru['id_admin'] ?></th>
                                        <td><?php echo $data_baru['nama_admin'] ?></td>
                                        <td><?php echo $data_baru['password_admin'] ?></td>
                                        <td>
                                            <a href="edit.php?id_admin=<?php echo $data_baru['id_admin']; ?>" class="btn btn-primary">Edit</a>
                                            <a href="delete.php?id_admin=<?php echo $data_baru['id_admin']; ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="3" rowspan="1" headers="">Tidak Ada Data Ditemukan!</td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php mysqli_free_result($result); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>