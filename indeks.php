<?php
include "config.php";
$query = mysqli_query($conn,"SELECT * FROM customer");
?>

<!DOCTYPE html>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>
    <style>
        .btn-warning {
            width: 55px;
            height: 35px;
            font-size: 14px;
        }
        .btn-danger {
            width: 60px;
            height: 35px;
            font-size: 14px;
        }
    </style>

    <h2 style="margin-top:5%; margin-bottom: 0;" ><center>TABEL CUSTOMER</center></h2>
    <div style="margin: 2%; margin-top: 0;">
    <a class="btn btn-primary" style="margin-bottom: 10px;" href="form_Tambah.php">Tambah</a>
    <table id="tabelJQuery" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php if(mysqli_num_rows($query)>0)
        { ?>
            <?php
            while($data = mysqli_fetch_array($query)){ ?>
                <tr>
                <td><?php echo $data["id"]; ?></td>
                <td><?php echo $data["first_name"]; ?></td>
                <td><?php echo $data["last_name"]; ?></td>
                <td><?php echo $data["email"]; ?></td>
                <td><?php echo $data["phone"]; ?></td>
                <td><?php echo $data["address"]; ?></td>
                <td>
                <a class="btn btn-warning" href="edit.php?id=<?php echo $data["id"]; ?>">Edit</a>
                <a class="btn btn-danger" href="proses_delete.php?id=<?php echo $data["id"]; ?>">Delete</a>
                </td>
                </tr>
                <?php } 
                } ?>
        </tbody>
    </table>
    </div>
</body>
</html>

<script>
    $(document).ready(function () {
        $('#tabelJQuery').DataTable();
    });
</script>
