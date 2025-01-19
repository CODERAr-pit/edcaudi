<?php
if(isset($_POST['username'])){
    $server = "localhost";
    $username = "root";
    $password = ""; 

    // Establish connection
    $con = mysqli_connect($server, $username, $password);
    if (!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    $sql = "INSERT INTO `edc`.`edc` (`username`, `password`, `email`, `phone`, `dob`, `date`) 
            VALUES ('$username', '$password', '$email', '$phone', '$dob', current_timestamp())";

    if ($con->query($sql) === true) {
        echo "Successfully Submitted";  
    } else {
        echo "Error: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       h5{text-align:center;text-shadow: 2px 1px 2px white;}

        body { background-color: rgb(197, 139, 78); display: flex; justify-content:center; align-content: center; }
        
        img { display: flex; justify-content: start; z-index: -1; width: 80%; position: absolute; }
        
        .data { border: 10px solid rgb(0, 0, 0); box-shadow: 3px 2px 16px 8px black; background-color: rgb(71, 97, 124); padding: 5px; display: flex; flex-direction: column;width: 400px; 
       border-radius 5px;
       opacity:0.9;
       }
     
        
        .div { align-items: center;border-radius:5px; }
        @keyframes right {
            from{top:0px;
            left:-500px;}
            to{top:30.600px;
            left:80.200px;}}
        
            h1 {  text-shadow: 2px 2px 2px black;border: radius 5px;
               position: relative;
                animation: right 3s ease-in 0s 1 normal forwards;}
            

.detail {
    margin-top: 20px;
    text-align: center;
}

nav {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

nav a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    background-color: rgb(71, 97, 124);
    padding: 10px 20px;
    border-radius: 5px;
    border: 2px solid white;
    transition: background-color 0.3s ease, color 0.3s ease;
}

nav a:hover {
    background-color: white;
    color: rgb(71, 97, 124);
}
button {
    background-color: rgb(71, 97, 124); 
    color: white; 
    font-size: 16px; 
    padding: 10px 20px; 
    border: 2px solid white; 
    border-radius: 5px;
    cursor: pointer; 
    transition: background-color 0.3s ease, transform 0.2s ease; 
}

button:hover {
    background-color: white; 
    color: rgb(71, 97, 124); 
    transform: scale(1.1); 
}

button:active {
    transform: scale(1); /* Reset size when clicked */
}


    </style>
    <title>MY EDC AUDITION PROJECT</title>
</head>
<body>
    <img src="https://edcnitd.co.in/static/img/logo.png" alt="edc">
    <form method="post">
        <h1>EDC AUDITION</h1>
        <h5>(to store data in database) </h5>
        <div class="data">
            <label for="username">USERNAME:</label>
            <input type="text" name="username" id="username" placeholder="username">
            <br>
            <label for="password">PASSWORD:</label>
            <input type="password" name="password" id="password" placeholder="password">
            <br>
            <label for="email">E-Mail:</label>
            <input type="email" name="email" id="email" placeholder="email">
            <br>
            <label for="phone">PHONE:</label>
            <input type="tel" name="phone" id="phone" placeholder="phone">
            <br>
            <label for="dob">D.O.B:</label>
            <input type="date" name="dob" id="dob" placeholder="choose">
            <br>
            <button type="submit" >SUBMIT</button>
        </div>
    </form>
   <div class="detail"> <nav ><a href="https://edcnitd.co.in/" border:5px margin:3px>Edc Website</a>
     <a href="mailto:edc@nitdgp.ac.in" border:5px margin:3px;>Email us</a>
     <a href="https://edcnitd.co.in/team/" border:5px margin:3px>Our team</a>
    <a href="https://edcnitd.co.in/event/" >Event Reg.</a>
    <a href="index.html" >Me</a></nav></div>
</body>
</html>
