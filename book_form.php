<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $event = $_POST['event'];
    $guests = $_POST['guests'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    // Check if the same event type is already booked on the same date
    $check_query = "SELECT * FROM book_form WHERE event = '$event' AND date = '$date'";
    $result = mysqli_query($connection, $check_query);

    if (mysqli_num_rows($result) > 0) {
        // Conflict found: same event type on same date
        echo "<script>
                alert('Sorry, this event type is already booked for the selected date.');
                window.location.href = 'book.php';
              </script>";
    } else {
        // No conflict, proceed with booking
        $request = "INSERT INTO book_form(name, email, phone, address, event, guests, time, date) 
                    VALUES ('$name','$email','$phone','$address','$event','$guests','$time','$date')";

        if (mysqli_query($connection, $request)) {
            echo "<script>
                    alert('Booking successful!');
                    window.location.href = 'book.php';
                  </script>";
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }

} else {
    echo 'Something went wrong. Try again.';
}

?>
