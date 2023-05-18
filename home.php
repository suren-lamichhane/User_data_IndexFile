<?php
$conn = mysqli_connect("localhost", "suren", "suren123", "my_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
echo "<br>";

#create table if not exist

$sql = "CREATE TABLE IF NOT EXISTS guestbook (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  email VARCHAR(255),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$table_creation = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

if (mysqli_query($conn, $sql)) { ?>

<form action="" method="post">

<form method="post" action="home.php">
  <label for="name">Name:</label>
  <input type="text" name="username" id="name" required>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required>

  <label for="message">Phone:</label>
  <input type="phone" name="phone" id="phone" required>

  <input type="submit" name="submit" value="submit">
</form>
<?php if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
}
    // Prepare SQL statement
    $sql_insert = "INSERT INTO guestbook (username, email, phone) VALUES ('$username', '$email', '$phone')";
    if (mysqli_query($conn, $sql_insert)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Prepare SQL statement
    $sql = "SELECT * FROM guestbook ORDER BY id DESC";

    // Execute SQL statement
    $result = mysqli_query($conn, $sql);

    // Display records in a table
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Message</th><th>Created At</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["reg_date"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}}
