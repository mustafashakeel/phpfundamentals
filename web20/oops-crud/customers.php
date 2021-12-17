<?php

class Customer
{

    public $conn;

    private $host = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $database = 'customers';
    public function __Construct()
    {

        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if (mysqli_connect_error()) {
            trigger_error('ERROR in DB ' . mysqli_connect_error());
        } else {
            return $this->conn;
        }
    }
    public function displayData()
    {
        $query = 'SELECT * FROM customers';
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {

            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
    public function addCustomer()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $statement = $this->conn->prepare("INSERT INTO customers(name,email,username,password) VALUES(?,?,?,?)");
        $statement->bind_param("ssss", $name, $email, $username, $password);

        $statement->execute();

        if ($statement == true) {
            $_SESSION['message'] = 'The Data has been submitted';
            header("Location:index.php");
        } else {
            echo "error in the query ";
        }
        $statement->close();
        $this->conn->close();
    }
    //  Get a record for the update 
    public function updateRecordById($editId)
    {
        $query = "SELECT * from customers WHERE id ='$editId'";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $row =  $result->fetch_assoc();
            return $row;
        } else {
            echo "Records not found ";
        }
    }

    // Update the Record 
    public function update($postData)
    {

        $name = $this->conn->real_escape_string($_POST['name']);
        $email = $this->conn->real_escape_string($_POST['email']);
        $username = $this->conn->real_escape_string($_POST['username']);
        $password = $this->conn->real_escape_string($_POST['password']);
        $id = $this->conn->real_escape_string($_POST['id']);

        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE customers SET name='$name', email='$email', username='$username', password='$password' WHERE id='$id'";

            $res = $this->conn->query($query);
            if ($res == true) {
                header("Location:index.php?msq=update");
            }
        } else {
            echo "Update failed ";
        }
    }
    // delete record 
    public function delete($id)
    {
        $query = "DELETE FROM customers WHERE id='$id'";
        $res = $this->conn->query($query);
        if ($res) {
            header("Location:index.php");
        } else {
            echo "Errrorrr";
        }
    }
}
