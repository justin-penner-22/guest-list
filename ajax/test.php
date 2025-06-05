<?php
/*
require '../config.php';

function getReservations()
{
    $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USER, PASSWORD);
    $stmt = "SELECT `id`, `date`, `persons`, `time`, `confirmed`, `user_name`, `email_address` FROM reservations";
    $rows = $pdo->query($stmt);
    $data = [];
    foreach ($rows as $row) {
        $data[] = $row;
    }
    return $data;
}

echo json_encode(getReservations());

//Generate fake data

$statement = $pdo->prepare("INSERT INTO reservations
(`date`, `table`, `time`, confirmed, user_name, email_address) VALUES (?,?,?,?,?,?)");

$statement->execute(array("2032-10-10", 1, "20:20", 0, "justin", "jp@gmail.com"));
*/


require '../config.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $pdo = new PDO(
            "mysql:host=" . HOST . ";dbname=" . DB . ";charset=utf8",
            USER,
            PASSWORD,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        // 2. Retrieve and validate inputs
        $dateTimeRaw = trim($_POST['datetime'] ?? '');
        $personsRaw = trim($_POST['persons'] ?? '');

        if (empty($dateTimeRaw) || empty($personsRaw) || !ctype_digit($personsRaw)) {
            throw new Exception("Ungültige Eingaben");
        }

        // 3. Split into date and time components
        //    Expecting format "YYYY-MM-DD HH:MM"
        $parts = explode(" ", $dateTimeRaw);
        if (count($parts) !== 2) {
            throw new Exception("Ungültiges Datumsformat");
        }
        $datePart = $parts[0];      // "2025-06-05"
        $timePart = $parts[1];      // "14:30"

        // 4. Prepare INSERT using placeholders
        $stmt = $pdo->prepare("
            INSERT INTO reservations
                (`date`, `time`, `persons`, `confirmed`, `user_name`, `email_address`)
            VALUES
                (?, ?, ?, 0, '', '')
        ");

        // 5. Execute with actual values
        $stmt->execute([
            $datePart,
            $timePart,
            (int)$personsRaw
        ]);

        // 6. Return JSON success
        echo json_encode(["success" => true]);
        exit;
    } catch (Exception $e) {
        // On any error, log or handle as needed, then return failure
        error_log("Reservation Error: " . $e->getMessage());
        echo json_encode(["success" => false, "error" => $e->getMessage()]);
        exit;
    }
}

// If not POST, you can optionally return an error:
echo json_encode(["success" => false, "error" => "Invalid request"]);
exit;
