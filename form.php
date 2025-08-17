<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <style>
    body{
        background-color: whitesmoke;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center; 
    }
    form{
        background-color: white;
        border: 2px solid black;
        border-radius: 7px;
        margin: 10px;
        padding: 20px;
    }
    </style>
    </head>
    <body>
       
<form method="post" action="">
<label for ="nam"> Name:</label>
<input type="text" id="nam" name="nam" placeholder ="Enter your name" required> <br> <br>

<label for="address"> Address:</label>
<input type="text" id="address" name="address" placeholder="Enter address" required> <br><br>

<label for="Gender">Gender: </label> 
<input type="radio" id="male" name="gender" value="male" required></input>
<label for="male">Male</label>

<input type="radio" id="female" name="gender" value="female">
<label for="female"> Female</label> <br> <br>


<label for="date">Date of Birth:</label>
    <input type="date" id="date" name="dob" required> <br><br>

    
    <table>
    <tr>
        <td><label for="IT">Department:</label></td>
        <td>
            <input type="radio" id="IT" name="dep" value="IT" required>
            <label for="IT">Information Technology</label>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="radio" id="fin" name="dep" value="fin" required>
            <label for="fin">Finance</label>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="radio" id="Inv" name="dep" value="Inv" required>
            <label for="Inv">Inventory</label>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="radio" id="Prod" name="dep" value="Prod" required>
            <label for="Prod">Production</label>
        </td>
    </tr>
</table>

<button type="submit" name="submit" >Submit</button>
<button type="reset">Reset</button>

</body>
</html>