<html>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "patients";


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        //Inputs from form
        $patientID          = $_POST["patientID"];
        $p_registration_no  = $_POST["p_registration_no"];
        $patientName        = $_POST["patientName"];
        $p_id_card_no       = $_POST["p_id_card_no"];
        $patientGender      = $_POST["patientGender"];
        $patientDob         = $_POST["patientDob"];
        $patient_address    = $_POST["patient_address"];
        $clinic_id          = $_POST["clinic_id"];
        $physician_id       = $_POST["physician_id"];

        $sql = "INSERT INTO patient_table ( patientID, p_registration_no, patientName, p_id_card_no, patientGender, patientDob, patient_address, clinic_id, physician_id)
        VALUES ( '$patientID', '$p_registration_no', '$patientName', '$p_id_card_no', '$patientGender', '$patientDob', '$patient_address', '$clinic_id', '$physician_id')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    ?>
</html>