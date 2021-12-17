<?php


class Student
{
    private $host = 'localhost';
    private $username  = 'root';
    private $password = 'root';
    private $dbName = 'test';
    private $port = 8889;

    public $conn;

    // Database Connection

    public function __Construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);

        if (mysqli_connect_error()) {
            trigger_error('Error in DB' . mysqli_connect_error());
        } else {
            return $this->conn;
        }
    }

    public function Add()
    {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = $this->conn->prepare("INSERT INTO customers(name,email,username,password) VALUES(?,?,?,?)");

        $result->bind_param("ssss", $name, $email, $username, $password);

        $result->execute();

        if ($result == true) {
            $_SESSION['message'] = 'The Data has been submitted';
            header("Location:home.php");
        } else {
            echo "Error in the query";
            // header("Location:home.php");
        }

        $result->close();
        $this->conn->close();
    }

    public function displayData()
    {
        $query = "SELECT * FROM customers";

        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
        // else
        // {
        //  echo "No found records";
        // }
    }
    public function delete($del_id)
    {
        $query = "DELETE FROM customers WHERE id = '$del_id'";

        $sql = $this->conn->query($query);

        if ($sql) {
            header("Location:home.php?msg3=delete");
        } else {
            echo "Error";
        }
    }

    public function displyaRecordById($id)
    {
        $query = "SELECT * FROM customers WHERE id = '$id'";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            echo "Record not found";
        }
    }


    public function update($postData)
    {
        $name = $this->conn->real_escape_string($_POST['name']);
        $email = $this->conn->real_escape_string($_POST['email']);
        $username = $this->conn->real_escape_string($_POST['username']);
        $password = $this->conn->real_escape_string($_POST['password']);

        $id = $this->conn->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE customers SET name = '$name', email = '$email', username = '$username', password = '$password' WHERE id = '$id'";
            $sql = $this->conn->query($query);
            if ($sql == true) {
                header("Location:home.php?msg2=update");
            } else {
                echo "Registration updated failed try again!";
            }
        }
    }
}
