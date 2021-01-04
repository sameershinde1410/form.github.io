<?php
include("connection.php");


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>File Accepting</title>
    <script>
    function pop(){
        alert("thankyou");
    }
</script>
    <style>
        body {
            background-color:rgba(2, 51, 63, 0.918);
        }
        table {
            color:black;
            background-color:rgba(247, 245, 245, 0.219);
            border-radius: 25px;
            font-size:20px;
            }
        #btn {
            height: 35px;
            width: 100px;
            
        }
        #btn:hover{
            background-color:green;
            color:white;
        }
    </style>
</head>

<body>
    <form name="form" id="form" action="" method="POST" >
    <br><br>
    <table  align="center" cellspacing="15">
        <tr><td>Full Name:-</td><td><input type="text" id ="fname" placeholder="Enter full name" name="fullname" required>
        <br><span id="fnamee"></span></td></tr>
        <tr>
            <td>
                Contact Number:- <td><input type="int" id ="cnumber" placeholder="Enter contact number" name="contact" required>
                    <br><span id="cnumberr"></span></td>

            </td>
        </tr>
        <tr>
            <td>
                WhatsApp Number:- <td><input type="int" id ="wnumber" placeholder="Enter whatsapp number"  name="whatsapp" required>
                    <br><span id="wnumberr"></span></td></td>

            </td>
        </tr>
        <tr>
            <td>
                E-mail id:- <td><input type="email" id ="email" placeholder="Enter e-mail id" name="email" required>
                    <br><span id="emaill"></span></td></td></td>
                
            </td>
        </tr>
        <tr>
            <td>
                Date of Birth:- <td><input type="date" id ="date" placeholder="Enter date id" name="dob">
                    <br><span id="datee"></span></td></td></td>
                
            </td>
        </tr>
        <tr>
            <td>
                Reference Name:- <td><input type="text" id ="rname" placeholder="Enter reference name" name="reference" required></td>

            </td>
        </tr>
        <tr>
            <td>
                Higher Qualification:- <td><input type="text" id ="quli" placeholder="Enter higher qulification" name="higher" required>
                    <br><span id="qulii"></span></td></td></td>

            </td>
        </tr>
        <tr>
            <td>Area of intrest in Internship:- <td><input type="radio" name="r1" value="HR">HR <input type="radio" name="r1" value="Marketing">Marketing <input type="radio" name="r1" value="Finance">Finance <input type="radio" name="r1" value="Web Development">Web Development</td>
            </td>
        </tr>
        <tr>
            <td>File: <td><input type="file" name="pdf" id="pdf" accept="application/pdf" title="Choose File" /><br />
            </td>
        </tr>
        <tr><td align="center" colspan="2"><input type="submit" id="btn" name="submit" onclick="pop()"></td></tr>
            
    </form>

    </table>

</body>
</html>

<?php

if(isset($_POST['submit']))
{

$fn=$_POST['fullname'];
$con=$_POST['contact'];
$w=$_POST['whatsapp'];
$e=$_POST['email'];
$dob=$_POST['dob'];
$rf=$_POST['reference'];
$hi=$_POST['higher'];
$intrest=$_POST['r1'];

if($fn!="" && $con!="" && $w!="" && $e!="" && $dob!="" && $rf!="" && $hi!="" && $intrest!=""){
    $query="INSERT INTO INFORMATION VALUES ('$fn','$con','$w','$e','$dob','$rf','$hi','$intrest')";
    $data= mysqli_query($conn,$query);
    if($data)
    {
    echo "Data inserted into database";
    }}
    else{"failed to insert";}
}
?>
