<?php
header('Content-Type: application/json; charset=utf-8');

try {
    // Database connection
    $conn = mysqli_connect(
        "localhost",
        "root",
        "",
        "admin_db"
    );

    // Check connection
    if (!$conn) {
        throw new Exception("Connection failed: " . mysqli_connect_error());
    }

    // Set charset to utf8
    mysqli_set_charset($conn, "utf8");

    // Fetch all threats from library_table
    $sql = "SELECT id, name, category, severity, about, how_it_works, prevention, image FROM library_table ORDER BY name ASC";
    $result = mysqli_query($conn, $sql);

    // Check for query errors
    if (!$result) {
        throw new Exception("Query failed: " . mysqli_error($conn));
    }

    $threats = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $threats[] = array(
                "id" => $row["id"],
                "name" => $row["name"],
                "category" => $row["category"],
                "severity" => $row["severity"],
                "about" => $row["about"],
                "how_it_works" => $row["how_it_works"],
                "prevention_tips" => $row["prevention"],
                "image" => $row["image"],
                "video_url" => ""
            );
        }
    }

    echo json_encode($threats);
    mysqli_close($conn);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
}
?>
