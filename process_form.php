<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "certification_applications";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize POST data
$company_name = $_POST['company_name'] ?? '';
$company_address = $_POST['company_address'] ?? '';
$contact_name = $_POST['contact_name'] ?? '';
$job_position = $_POST['job_position'] ?? '';
$mobile_no = $_POST['mobile_no'] ?? '';
$telephone_no = $_POST['telephone_no'] ?? '';
$fax_no = $_POST['fax_no'] ?? '';
$email = $_POST['email'] ?? '';
$website = $_POST['website'] ?? '';
$scope_work = $_POST['scope_work'] ?? '';
$main_activities = $_POST['main_activities'] ?? '';
$legal_requirements = $_POST['legal_requirements'] ?? '';
$total_employees = $_POST['total_employees'] ?? 0;
$admin_employees = $_POST['admin_employees'] ?? 0;

// Prepare SQL
$sql = "INSERT INTO applications (company_name, company_address, contact_name, job_position, mobile_no, telephone_no, fax_no, email, website, scope_work, main_activities, legal_requirements, total_employees, admin_employees) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("SQL prepare failed: " . $conn->error);
}

// Bind parameters
$stmt->bind_param(
    "sssssssssssiii",
    $company_name,
    $company_address,
    $contact_name,
    $job_position,
    $mobile_no,
    $telephone_no,
    $fax_no,
    $email,
    $website,
    $scope_work,
    $main_activities,
    $legal_requirements,
    $total_employees,
    $admin_employees
);

// Execute statement
if ($stmt->execute()) {
    echo "Form submitted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
