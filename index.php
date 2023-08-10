<!-- Import DB -->
<?php
    require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>CRUD</title>
</head>
<body>
    <!-- Container -->
    <div class="container">
        <h1 class="text-center mt-5">Learn Native - CRUD PHP Native</h1>
            <br />
        <!-- Form -->
        <form method="post" action="controller/add.php" class="form-group mt-5">
            <!-- Form Container -->
            <div class="form-container">
                <div class="row g-3 align-item-center mb-3">
                    <div class="col-auto">
                        <input type="text" name="name[]" placeholder="Masukkan Nama" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="address[]" placeholder="Masukkan Alamat" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="col-auto">
                        <input type="date" name="date[]" placeholder="Masukkan Tanggal" class="form-control" autocomplete="off" required>
                    </div>
                </div>
            </div>
            <!-- End Form Container -->

            <div class="">
                <button class="btn btn-primary" type="button" id="add">Add</button>
            </div>
            <div class="col-auto mt-3">
                <button class="btn btn-primary" type="submit" id="submit" name="submit">Submit</button>
            </div>
        </form>
        <!-- End Form -->

        <!-- Table -->
        <table class="table table-bordered mt-3">
            <!-- Head table -->
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Name</th>
                <th class="text-center">Address</th>
                <th class="text-center">Date</th>
                <th class="text-center" colspan="2">Action</th>
            </tr>
            <!-- End Head table -->

            <!-- Call data -->
            <?php
                $query = $conn->query('SELECT * FROM people');
                $i = 1;

                while($data = $query->fetch_assoc()) :
            ?>
            <!-- Body table -->
            <tr>
                <td class="text-center"><?= $i++?></td>
                <td class="text-center"><?= $data['name']?></td>
                <td class="text-center"><?= $data['address']?></td>
                <td class="text-center"><?= $data['date']?></td>
                <td class="text-center">
                    <!-- Action Button -->
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Update</a>
                </td>
            </tr>
            <!-- end Body table -->

            <?php
                endwhile;
            ?>
            <!-- end Call data -->

        </table>
    </div>
    <!-- End Container -->


    <!-- Import JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Import Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Local Script -->
    <script src="js/script.js"></script>
</body>
</html>
