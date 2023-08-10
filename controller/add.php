<?php
    require_once '../config/db.php'; // Adjust the path based on your directory structure

    if (isset($_POST['submit'])) {
        $names = $_POST['name'];
        $addresses = $_POST['address'];
        $dates = $_POST['date'];

        $no = 1; // Initialize the counter
        foreach ($names as $key => $name) {
            $address = $addresses[$key];
            $date = $dates[$key];

            $query = "INSERT INTO people (name, address, date) VALUES ('$name', '$address', '$date')";
            $conn->query($query);

            $no++; // Increment the counter
        }

        // Redirect or send a response back to the frontend
        if($query){
            echo "<script>alert('Data berhasil ditambah'); window.location.href='../index.php'</script>";
        }else{
            echo "<script>alert('Data gagal ditambah'); window.location.href='../index.php'</script>";
        }
    }else{
        header('Location: ../index.php');
    }


