<?php
// for  form submition checking
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $password = $_POST['password'];

    // Database connection 
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "your_database_name";

    // Create connection
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO your_table_name (id, password) VALUES ('$id', '$password')";

    //Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
