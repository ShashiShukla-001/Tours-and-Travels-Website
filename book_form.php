<?php
$conn = mysqli_connect('localhost', 'root', '', 'book_db');
if(isset($_POST['send']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];
    $request = "INSERT INTO `book_form`(`name`, `email`, `phone`, `address`, `location`, `guests`, `arrival`, `departure`	) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrival', '$departure')";

    mysqli_query($conn, $request);
    header('location:book.php');
}
else{
    echo 'something went wrong try again';
}

?>