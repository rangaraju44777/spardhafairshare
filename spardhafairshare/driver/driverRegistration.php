<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>driverRegistration</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<script>
function validateForm()
{
	 var x = document.forms["driver"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
        }
		 var a = document.forms["driver"]["age"].value;
    if (a == "") {
        alert("age must be filled out");
        return false;
        }
		 var b = document.forms["driver"]["email"].value;
    if (b == "") {
        alert("email must be filled out");
        return false;
        }
		 var c = document.forms["driver"]["LisenceId"].value;
    if (c == "") {
        alert("lisence id must be filled out");
        return false;
        }
		 var d = document.forms["driver"]["pwd"].value;
    if (d == "") {
        alert("Name must be filled out");
        return false;
        }
		 var y= document.forms["driver"]["mob"].value;
           if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false;
           }

        return false;
}
</script>
<style type="text/css">
span{
	color:red;
}
h3
{
font-family:Trebuchet MS;
font-size:35px;
color:red;
}
h2
{
font-family:Trebuchet MS;
font-size:20px;
color:red;
}
</script>
<style>
.navigation ul li{
	margin:0px;
	padding:0px 250px;
	display:inline;
	font-size:15px;
	list-style-type:none;
	border-right:#868B8F dotted 2px;
}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 14px;
    box-sizing: border-box;
    margin-top: 16px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<div id="wrapper">

  <div id="header">
    <h3>WELCOME TO FAIRSHARE</h3>
    <p><h2>An online logistic marketplace.<h2></p>
  </div>

  <div id="page_content">

  <div class="navigation">
  <ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="../login1.php">Login</a></li>

  </ul>
  </div>

    <div class="left_section">
    <div class="common_content">
        <div class="container">
  <form action="../actions/driverRegSubmit.php" name="driver" method="post"  onsubmit="return validateForm()" >
   <h4 align="center"><strong>DEAR DRIVER!!
     GET REGISTER HERE!!</strong></h4>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="age">age:</label>
    <input type="text" id="age" name="age" placeholder="yourr age..">

	<label for="email">Email:</label>
    <input type="text" id="email" name="email" placeholder="yourr mail id..">

  <label for="mobile">Mobile:<span>*</span></label>
    <input type="text" id="mobile" name="mobile" placeholder="your mobile number.">

  <label for="LisenceId">Liscence Id:<span>*</span></label>
    <input type="text" id="LisenceId" name="LisenceId" placeholder="yourr liscence Id.">

  <label for="pwd">Password:</label>
    <input type="text" id="pwd" name="pwd" placeholder="set a password plz..">



    <input type="submit" value="Submit">
  </form>
</div>
      </div>

      <div class="top_content border_none">
        <div class="column_one">

        <div class="column_two border_left">


        </div>
      </div>
    </div>

    <div class="right_side_bar">

      <div class="col_1">

        <div class="box">

        </div>
      </div>

      <div class="col_1">

        <div class="box">

         <br>

        </div>
      </div>

    </div>

    <div class="clear"></div>

  <!--start footer from here-->
  <div id="footer">Copyright &copy; 2014. Design by <a href="http://www.htmltemplates.net" target="_blank">fairshare</a><br>

  <!--DO NOT remove footer link-->
  <!--Template designed by--><a href="http://www.htmltemplates.net"><img src="images/footer.gif" class="copyright" alt="http://www.htmltemplates.net"></a></div>

  <!--/. end footer from here-->
  </div>

</div>

</body>
</html>
