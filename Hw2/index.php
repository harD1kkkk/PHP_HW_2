<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = "voytk_dp34@student.itstep.org"; 
    $subject = "New Student Registration";

    $message = "Student Information:\n";
    $message .= "Name: " . $_POST['name'] . "\n";
    $message .= "City: " . $_POST['city'] . "\n";
    
    if(!empty($_POST['subjects'])) {
        $message .= "Subjects: " . implode(", ", $_POST['subjects']) . "\n";
    }
    
    if(!empty($_POST['langs'])) {
        $message .= "Languages: " . implode(", ", $_POST['langs']) . "\n"; 
    }
    
    mail($to, $subject, $message);
    
    echo "<script>alert('Form submitted!');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Student Registration Form</title>
</head>
<body>
    <form method="post">
        <h2>Student Registration</h2>
        
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="pass" required>
        </div>
        
        <div class="form-group">
            <label>Subjects:</label>
            <div>
                <label>
                    <input type="checkbox" name="subjects[]" value="algorithms">
                    Algorithms
                </label>
                <label>
                    <input type="checkbox" name="subjects[]" value="oop">
                    OOP
                </label>
                <label>
                    <input type="checkbox" name="subjects[]" value="data">
                    Data Structures
                </label>
            </div>
        </div>
        
        <div class="form-group">
            <label>Card:</label>
            <div>
                <label>
                    <input type="radio" name="card" value="visa" required>
                    Visa
                </label>
                <label>
                    <input type="radio" name="card" value="master">
                    MasterCard
                </label>
                <label>
                    <input type="radio" name="card" value="amex">
                    AmEx
                </label>
            </div>
        </div>
        
        <div class="form-group">
            <label>City:</label>
            <select name="city">
                <option value="">Select a city</option>
                <option value="lahore">Lahore</option>
                <option value="karachi">Karachi</option>
                <option value="islamabad">Islamabad</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>Programming Languages:</label>
            <select name="langs[]" multiple size="4">
                <option value="java">Java</option>
                <option value="php">PHP</option>
                <option value="python">Python</option>
                <option value="js">JavaScript</option>
            </select>
        </div>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
