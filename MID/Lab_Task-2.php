<!DOCTYPE HTML>
<html>
    <title> Lab Task 2</title>
    <style>
      div{
        width:160px;
        height:50px;
        border:1px solid red;
        overflow: scroll;
        padding:5px;
        margin: 10px;
      }
      body{
        background-color:lightblue;
      }
      table{
        background-color:white;
      }
     h1,h2{
        text-align:center;
        color:blue;
     }
      .register_button{
        padding:5px;
        background-color:blue;
        color:white;
        border:white;
      }
      .clear_button{
        padding:5px;
        color:white;
        background-color:blue;
        border:white;
      }

        </style>
    <body>
        
         <h1>Bank Management System</h1>
       <h2 style = "color:blue;">Your Trusted Financial Partner </h2>   

       <h3> Customer Registration Form </h3>
       <table>
    <tr><td> Full Name:</td> <td><input type ="text"></td></tr> <br>

       <tr><td>Date of Birth:</td> <td><input type = "date"></td></tr> <br>

       <tr><td>
        Gender:</td>
        <td><input type ="radio" name = "des">Male 
              <input type = "radio" name = "des">Female
              <input type = "radio" name = "des">Other </td> </tr><br>
        
        <tr><td>      
        Maritial Status:</td>
        <td><select name = "Maritial Status">
        <option value = "--Select--">single </option> 
        <option value = "--Select--">Married </option></td></tr><br>
        
      
        <tr><td>
        Account Type:</td>
        <td><select name = "Account Type">
        <option value = "Savings">Savings </option> 
        <option value = "Fixed Deposite">Fixed Deposite </option></td></tr><br>
       
        <tr><td>Initial Deposite Amount:</td> <td> <input type ="text"></td></tr> <br>

         <tr><td>Mobile Number:</td> <td> <input type ="text"></td> </tr><br>

        <tr><td>Email Address:</td> <td> <input type ="email"></td></tr> <br>

        <tr><td>Address:</td> <td> <input type ="text"></td></tr> <br>

        <tr><td>Occupation:</td> <td> <input type ="text"></td></tr> <br>

        <tr><td>National ID (NID):</td> <td> <input type ="email"></td></tr> <br>

        <tr><td>Set password:</td> <td> <input type ="password"></td></tr> <br>

        <tr><td>Upload ID Proof:</td> <td> <input type ="file"></td></tr> <br>
    
        <tr><td><input type ="checkbox"> I agree to the terms and condition<td></tr>
        
       <tr><td></td><td><input type = "button" value = "Register" class = "register_button">
                        <input type = "button" value = "clear" class = "clear_button"></td></tr>

    </table>

    <div>This is a demo text to show how ovweflow works in a small container with a  </div>
     </body>

    </html>