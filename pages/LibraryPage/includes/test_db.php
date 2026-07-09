<?php
// Test database connection
echo "<h2>ThreatBuddy Database Connection Test</h2>";

$conn = new mysqli("localhost", "root", "", "threatbuddy_db");

if ($conn->connect_error) {
    echo "<p style='color: red;'>❌ Connection failed: " . $conn->connect_error . "</p>";
    die();
}

echo "<p style='color: green;'>✓ Connected successfully to threatbuddy_db</p>";

// Check if library_table exists
$sql = "SELECT * FROM library_table LIMIT 1";
$result = $conn->query($sql);

if (!$result) {
    echo "<p style='color: red;'>❌ Table query failed: " . $conn->error . "</p>";
    die();
}

echo "<p style='color: green;'>✓ library_table exists</p>";

// Count records
$count_sql = "SELECT COUNT(*) as count FROM library_table";
$count_result = $conn->query($count_sql);
$count_row = $count_result->fetch_assoc();

echo "<p style='color: green;'>✓ Records in library_table: " . $count_row['count'] . "</p>";

// Show table structure
echo "<h3>Table Columns:</h3>";
$columns = $conn->query("DESCRIBE library_table");
if ($columns) {
    while ($col = $columns->fetch_assoc()) {
        echo "- " . $col['Field'] . " (" . $col['Type'] . ")<br>";
    }
}

// Show sample data
echo "<h3>Sample Data:</h3>";
$sample = $conn->query("SELECT * FROM library_table LIMIT 2");
if ($sample->num_rows > 0) {
    echo "<pre>";
    while ($row = $sample->fetch_assoc()) {
        print_r($row);
    }
    echo "</pre>";
}

$conn->close();
?>
