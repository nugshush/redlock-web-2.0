<?php

$host = 'db';

$user = 'nugshush';

$pass = 'password';

$mydatabase = 'database';

$conn = new mysqli($host, $user, $pass, $mydatabase);

$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->ID . " " . $user->Nama . " " . $user->Alamat . " " . $user->Jabatan;
    echo "<br>";
}
?>