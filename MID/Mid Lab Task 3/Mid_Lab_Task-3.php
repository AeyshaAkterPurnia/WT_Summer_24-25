<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
        <link rel ="stylesheet" href = "Lab_Task-3CSS.css">
</head>
<body>
    
    <table>
        <from onsubmit = "return handlesubmit()">
        <tr><td><h1>Donor Information</h1></td></tr>

        <form onsubmit=" handlesubmit()">

       <tr><td><label>First Name</label></td></tr>
       <tr><td><input type = "text" id = "fname"></td></tr>

       <tr><td><label>Last Name</label></td></tr><br>
       <tr><td><input type = "text" id ="lname"></td></tr>

       <tr><td><label>Address</label></td></tr><br>
       <tr><td><input type = "text" id ="address"></td></tr>

       <tr><td><label>City</label></td></tr><br>
       <tr><td><input type = "text" id ="city"></td></tr>

        <tr><td><label>State</label></td></tr>
        <tr><td><select name = "Maritial Status">
        <option value = "--Select a state--">--Select a state-- </option> 
        <option value = "--Select--">Dhaka </option> 
        <option value = "--Select--">Rajsahi </option>
        <option value = "--Select--">Cumilla</option>
        <option value = "--Select--">Barishal</option></td></tr><br>

       <tr><td><label>Phone</label></td></tr><br>
       <tr><td><input type = "text" id ="phone"></td></tr>

       <tr><td><label>Email</label></td></tr><br>
       <tr><td><input type = "email" id ="email"></td></tr>

       <tr><td><label>Password</label></td></tr><br>
       <tr><td><input type = "password" id ="password"></td></tr>

       <tr><td><label>Confirm Password</label></td></tr><br>
       <tr><td><input type = "password" id ="cpassword"></td></tr>

       <tr><td><lebel>Donation Amount</lebel></td></tr>
      <tr><td><input type ="radio" name = "des"> None
      <input type ="radio" name = "des">500 BDT
      <input type ="radio" name = "des">1000 BDT
      <input type ="radio" name = "des">2000 BDT
      <input type ="radio" name = "des">3000 BDT
      <input type ="radio" name = "des"> Other</td></tr>

      <tr><td><label>Other Amount</label></td></tr><br>
      <tr><td><input type = "text"></td></tr>

      <tr><td><input type = "checkbox"><lebel>I am interested in givin on a regular basis. </td></tr>

      <tr><td><p>Additional Information</p></td></tr>

      <tr><td><input type = "checkbox"><lebel>I would like my gift to remain anonymous.</lebel> </td></tr>
      <tr><td><input type = "checkbox"><lebel>My empolyer offers a matching gift program.</lebel></td></tr>
      <tr><td><input type = "checkbox"><lebel>Please don't send a thank you letter.</lebel></td></tr>

      <tr><td><label>Comments</label></td></tr><br>
      <tr><td><input time = "text"></td></tr>

      <tr><td><button type ="Reset">Reset</button></td>
      <td><button type ="submit">submit</button></td><tr> 

      <script src = "Lab_Task-3_valid.js"></script>




       

</table>
</form>
</body>
    </html>
