<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>

        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('robo.jpg');


}

h2 {
    text-align: center;
    color: white;
}

form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: transparent;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-st
}

label {
    font-weight: bold;
    color: white;
}

input[type="text"],
input[type="email"],
input[type="tel"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-family: sans-serif;

}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.error {
    color: red;
    font-size: 14px;
}
.notice{
    border: 1px solid purple;
    
    width: 350px;
    height: 200px;
    margin-top:60px;
    margin-left:560px;
    background-color: yellow;

}
</style>
</head>
<body>
    <h2>Registration Form</h2>

    <div class="notice">

        <h1>Please also Register your Details in the payment page</h1>
        
    </div>

    <div class="reg">
    <form action="submit.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

         <label for="department">Degree:</label><br>
             <select id="degree" name="degree">
            <option value="UG">UG</option>
            <option value="PG">PG</option>
        </select>

           <label for="department">Department Name:</label><br>
        <input type="text" id="department" name="department" required><br>
        
        <label for="college">College Name:</label><br>
        <input type="text" id="college" name="college" required><br>

        
        
        <label for="contact">Contact Number:</label><br>
        <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" required><br>
        
        <label for="firstevent"> First Event:</label><br>
        <select id="firstevent" name="firstevent" required>
            <option value="Glitch Hunt">Glitch Hunt</option>
            <option value="Web Wizard">Web Wizard</option>
            <option value="Brain Byte">Brain Byte</option>
            <option value="Idea expo">Idea Expo</option>
            <option value="Tech Charades">Tech Charades</option>
            <option value="Connection">Connection</option>
            <option value="ad zap">AD-Zap</option>
            <option value="poster making">Poster Making</option>
           
        </select>

        <label for="secondevent"> Second Event:</label><br>
        <select id="secondevent" name="secondevent">
            <option value="Glitch Hunt">Glitch Hunt</option>
            <option value="Web Wizard">Web Wizard</option>
            <option value="Brain Byte">Brain Byte</option>
            <option value="Idea expo">Idea Expo</option>
            <option value="Tech Charades">Tech Charades</option>
            <option value="Connection">Connection</option>
            <option value="ad zap">AD-Zap</option>
            <option value="poster making">Poster Making</option>

        </select><br><br>
        
        <input type="submit" value="Click To Pay">
    </form>
    </div>
</body>
</html>
