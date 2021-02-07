<!DOCTYPE HTML>
<html>

<head>
<title> Registration Page </title>
</head>

<body>
<h1> Registration Page </h1>

<form>

<table>
<tr><td> First Name </td>
<td>:<input type='text' name="firstname"></td></tr>

<tr><td> Email </td>
<td>:<input type='text' name="email"></td></tr>

<tr><td> Username </td>
<td>:<input type='text' name="username"></td></tr>

<tr><td> Password </td>
<td>:<input type='password' name="password"></td></tr>

<tr><td> Confirm Password </td>
<td>:<input type='password' name="confirmpassword"></td></tr>

</table>

<br>
Gender:
<br>

<input type="radio" name="gender" id="male" value="male"/>
Male
<input type="radio" name="gender" id="female" value="female"/>
Female
<input type="radio" name="gender" id="other" value="other"/>
Other

<br>
<br>

Date Of Birth:
<input type="date" name="birthday" id="birthday"/>

<br>
<br>

<input type="submit" value="submit"> 
<input type="reset" value="reset">

</form>
</body>
</html>