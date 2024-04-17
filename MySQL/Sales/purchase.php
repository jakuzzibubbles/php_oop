<?php
include("config.php");

class Sales {
    public $customerName;
    public $country;
    public $productCategory;

    public function __construct($customerName, $country, $productCategory) {
        $this->customerName = $customerName;
        $this->country = $country;
        $this->productCategory = $productCategory;
    }
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

// Check if customer_id is set in the URL
if (!isset($_GET['customer_id'])) {
    die("Customer ID is not provided.");
}

$id = $_GET['customer_id'];

$sql = "SELECT customer_name, country, product_category FROM mock_data WHERE customer_id=$id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $customer = new Sales($row['customer_name'], $row['country'], $row['product_category']);
} else {
    echo "No purchase found.";
    $customer = new Sales('', '', '');
}
?>

<html>
<head>
    <title>Sales Form</title>
</head>
<body>
    <form action="">
        <label for="customer_name">Name:</label>
        <input type="text" id="customer_name" name="customer_name" value="<?php echo $customer->customerName; ?>"><br>
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" value="<?php echo $customer->country; ?>"><br>
        <label for="product_category">Product:</label>
        <input type="text" id="product_category" name="product_category" value="<?php echo $customer->productCategory; ?>"><br>
    </form>
</body>
</html>
