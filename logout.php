<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="includes/style_prac2.css" rel="stylesheet" type="text/css" />
<title>Scheduling System</title>
<style type="text/css">
<!--
.style4 {	font-size: 11px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
#Layer1 {
	position:absolute;
	left:595px;
	top:205px;
	width:132px;
	height:4px;
	z-index:1;
}
-->
</style>
</head>
<?php
  
		@session_unregister('is');
		@session_unset();
?>
<body>
<div id="container">
	<div id="header"><img src="../../Scheduling System/images/logo copy.jpg" alt="s" width="717" height="160" />
	  <div id="logo_w2"></div>
		<ul class="cssMenu cssMenum">
	<li class=" cssMenui"><a class="  cssMenui" href="cit_main.php"><img src="../../Scheduling System/images/homepage.gif" width="14" height="15" />Home</a></li>
	<li class=" cssMenui"><a class="  cssMenui" href="#"><span>Search</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul class=" cssMenum">
		<li class=" cssMenui"><a class="  cssMenui" href="search_teacher.php"><img src="../images/User (1).ico" />Teacher Schedule</a></li>
		<li class=" cssMenui"><a class="  cssMenui" href="search_course.php"><img src="../images/user-group.ico" /> Student Schedule</a></li>
		<li class=" cssMenui"><a class="  cssMenui" href="search_room.php"><img src="../images/school-icon.png" />Room Schedule</a></li>
	</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	<li class=" cssMenui"><a class="  cssMenui" href="#"><span>Add entry</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul class=" cssMenum">
		<li class=" cssMenui"><a class="  cssMenui" href="faculty-cit.php"><span><img src="../images/User (1).ico" />Teacher</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
		<ul class=" cssMenum">
			<li class=" cssMenui"><a class="  cssMenui" href="faculty-cit.php"><img src="../images/folder-new.ico" />Add</a></li>
			<li class=" cssMenui"><a class="  cssMenui" href="facultylist-cit.php"><img src="../images/folder.ico" />View</a></li>
		</ul>
		<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
		<li class=" cssMenui"><a class="  cssMenui" href="student-cit.php"><span><img src="../images/courses.JPG" />Course</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
		<ul class=" cssMenum">
			<li class=" cssMenui"><a class="  cssMenui" href="student-cit.php"><img src="../images/folder-new.ico" />Add</a></li>
			<li class=" cssMenui"><a class="  cssMenui" href="student-list-cit.php"><img src="../images/folder.ico" />View</a></li>
		</ul>

		<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
		</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	<li class=" cssMenui"><a class="  cssMenui" href="sched_cit.php">Schedule</a></li>

	<li class=" cssMenui"><a class="  cssMenui" href="#"><span>About us</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul class=" cssMenum">
		<li class=" cssMenui"><a class="  cssMenui" href="about_sched.php"><img src="../images/scheduling.png" />Scheduling System</a></li>
		<li class=" cssMenui"><a class="  cssMenui" href="about_dev.php"><img src="../images/dev.png" />Developer</a></li>
	</ul>
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
	<li class=" cssMenui"><a class="  cssMenui" href="help.php">Help</a></li>


</ul>
  </div>
	<div id="content">
	
	  <div id="left">
		<form action="<?php echo $_SERVER[PHP_SELF] ?>" name="form1" method="post" ><br />
	   
		  <div align="center">
		    <p><strong>College Scheduling System</strong></p>
		    <p>&nbsp;</p>
		    <p><strong>You have Logged out of the system... <a href="../index.php">click here</a> to sign in again... </strong> </p>
		  </div>
	    </form>
	    <h1>&nbsp;</h1>
	</div>
		<div id="program"></div>
	  <div id="right">
			<h2>&nbsp;</h2>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
	  </div>

		

		  <div id="footerline">
		    <p align="center"><span class="style4"><a href="help.html">Help</a>| <a href="scheduling_system.html">Scheduling System</a></span></p>
	      </div>
</div>
	
	<div id="footer">
	  <div align="center">
	    <p>Four Dark Riders	  </p>
	  </div>
	</div>	
</div>
</body>
</html>

<script language="javascript" >
/*		function SubmitForm(form)
		{			
			var form = document.forms[0];		
			if ((form.pLName.value.length <1) ||
				(form.pFName.value.length <1) ||
				(form.pMIName.value.length <1)) 
				{						
				 return false; 		
				}				 									
			else
				{	
				  return true;
				}
		}
*/		
		function optionList_SelectedIndex()
		{
			//----------------------------------------------------------------------------------------------------------
			/*HTML/JavaScript - Working with selectedIndex (select, options, selectedIndex, text, value)
			The selectedIndex number can be used to reference the selected option in the select list. 
			Note: It is case sensitive. 		
			Make sure to capitalize the "I" in selectedIndex
			* selectedIndex - The number (base 0) of the item that is selected in the select list
			* value - For an option, what's in the value attribute.
			  If the value attribute is not set, text should be returned [* refer below]
				  o val1 is the value in the following HTML example
				  o <option value="val1">sea one</option>
			* text - For an option, what's in between the option tags
				  o sea two is the text in the following HTML example
				  o <option value="val2">sea two</option>*/

			var selObj = document.getElementById('pcourse');
			//var txtIndexObj = document.getElementById('txtIndex');
			var hidden_pcourseid_ValueObj = document.getElementById('hidden_pcourseid');
			var hidden_pcourse_TextObj = document.getElementById('hidden_pcourse');
			
			var selIndex = selObj.selectedIndex;
			//txtIndexObj.value = selIndex;
			hidden_pcourseid_ValueObj.value = selObj.options[selIndex].value;
			hidden_pcourse_TextObj.value = selObj.options[selIndex].text;
		
			//var form = document.forms[0]; --> Option B
			<!-- //Passing the data from the databse residence [ID] to hidden field
			//Source: http://www.trans4mind.com/personal_development/JavaScript2/select.htm /-- -->			
			//----------------------------------------------------------------------------------------------------------

		
		
		
		//hidden_psyid
		
								function optionList7_SelectedIndex()
		{
			//----------------------------------------------------------------------------------------------------------
			/*HTML/JavaScript - Working with selectedIndex (select, options, selectedIndex, text, value)
			The selectedIndex number can be used to reference the selected option in the select list. 
			Note: It is case sensitive. 		
			Make sure to capitalize the "I" in selectedIndex
			* selectedIndex - The number (base 0) of the item that is selected in the select list
			* value - For an option, what's in the value attribute.
			  If the value attribute is not set, text should be returned [* refer below]
				  o val1 is the value in the following HTML example
				  o <option value="val1">sea one</option>
			* text - For an option, what's in between the option tags
				  o sea two is the text in the following HTML example
				  o <option value="val2">sea two</option>*/

			var selObj = document.getElementById('psy');
			//var txtIndexObj = document.getElementById('txtIndex');
			var hidden_psyid_ValueObj = document.getElementById('hidden_psyid');
			var hidden_psy_TextObj = document.getElementById('hidden_psy');
			
			var selIndex = selObj.selectedIndex;
			//txtIndexObj.value = selIndex;
			hidden_psyid_ValueObj.value = selObj.options[selIndex].value;
			hidden_psy_TextObj.value = selObj.options[selIndex].text;
		
			//var form = document.forms[0]; --> Option B
			<!-- //Passing the data from the databse residence [ID] to hidden field
			//Source: http://www.trans4mind.com/personal_development/JavaScript2/select.htm /-- -->			
			//----------------------------------------------------------------------------------------------------------
		}
		
		
		
</script>	

<script language="javascript" >
	var form = document.forms[0];
	//purpose?: to retrieve what users last input on the field..
	form.pcourse.value = ("<?PHP echo $_POST['hidden_psubcat']; ?>");
	form.psy.value = ("<?PHP echo $_POST['hidden_psem']; ?>");
	
	//alert (form.pCityM.value);				
</script>