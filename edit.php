<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit form</title>
</head>
<?php 
include_once("config.php");

$id = $_GET['id'];
$customer = mysqli_query($conn,"SELECT * FROM customer WHERE id='$id'");
while ($data = mysqli_fetch_array($customer)) {
    $id = $data['id'];
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $address = $data['address'];
}
?>
<body>
    <form action="proses_edit.php?id=<?php echo $id; ?>" method="post">
    <table width="25%" border="0">
        <tr>
            <td>id</td>
            <td><input type="text" name="id" value="<?php echo $id; ?>"></td>
        </tr>
        <tr>
            <td>first_name</td>
            <td><input type="text" name="first_name" value="<?php echo $first_name; ?>"></td>
        </tr>
        <tr>
            <td>lastname</td>
            <td><input type="text" name="last_name" value="<?php echo $last_name; ?>"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
        </tr>
        <tr>
            <td>phone</td>
            <td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
        </tr>
        <tr>
            <td>address</td>
            <td><input type="text" name="address" value="<?php echo $address; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Simpan"></td>
        </tr>
    </table>
    </form>
</body>
</html>