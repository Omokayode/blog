
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="index.css">
<title>Student assessment form</title>



</head>
<body>

<div class="header">
<h1 class="head">DIRECTORATE OF QUALITY ASSURANCE.</h1>
<p class="italic"><i>Quality Assurance...doing the right things right every time.</i></p>

</div>
<div class="container">
<nav>
	<ul>
	<li><a href="page.html">Home</a> </li><span> | </span>
		<li><a href="about.html">About</a> </li><span> | </span>
		<li><a href="#"> Mission</a></li><span> | </span>
		<div class="dropdown"> 
		<li class="btn"><a href="#"> Units</a></li><span> | </span>
					<ul class="dropcontent">
						<li><a href="#">Library Quality Assurance Comittee</a></li>
						<li><a href="#">Departmental Quality Assurance Comittee</a></li>
						<li><a href="#">Registry Quality Assurance Comittee</a></li>
						<li><a href="#">Bursary and Audit Quality Assurance Comittee</a></li>
						<li><a href="#">Faculty/institute/Centre/Unit Quality Assurance Comittee </a></li>
						<li><a href="#">College Quality Assurance Comittee</a></li>
						<li><a href="#">Postgraduate School Quality Assurance Comittee</a></li>
						<li><a href="#">Student Affairs Quality Assurance Comittee</a></li>
					</ul>
				</div>
		<li><a href="contact.html">Contact</a></li><span><b> | </b></span>
		<li><a href="#">Admin</a></li>
	</ul>
</nav>
<div class="form">
<h2 >STUDENT ASSESSMENT FORM</h2>

<form class="myForm" method="POST" action="index.php">

<p>
<label>Faculty
<input type="text" name="faculty" placeholder="Faculty" required list="faculties">
</label>

<datalist id="faculties">
<option value="Technology"></option>
<option value="Social Science"></option>
<option value="Science"></option>
<option value="Law"></option>
<option value="Pharmacy"></option>
<option value="Education"></option>
<option value="Veterinary Medicine"></option>
<option value="Arts"></option>
<option value="Agriculture and Forestry"></option>
</datalist> 
</p>

<p>
<label>Department 
<input type="text" name="department" required list="depts">
</label>
<datalist id="depts">
<option value="Agriculture and environmental Engineering"></option>
<option value="Mechanical Engineering"></option>
<option value="Civil Engineering"></option>
<option value="Industrial and Production Engineering"></option>
<option value="Electrical And Electronics Engineering"></option>
<option value="Food Technology"></option>
<option value="Petroleum Engineering"></option>

</datalist> 
</p>

<p>
<label >Sex 
<p><label class="choice"> <input type="radio" name="sex" required value="Male"> Male </label></p>
<p><label class="choice"> <input type="radio" name="sex" required value="Female"> Female </label></p>
</label>
</p>

<fieldset>
<legend>Level</legend>
<p><label class="choice"> <input type="radio" name="level" required value="100"> 100 </label></p>
<p><label class="choice"> <input type="radio" name="level" required value="200"> 200 </label></p>
<p><label class="choice"> <input type="radio" name="level" required value="300"> 300 </label></p>
<p><label class="choice"> <input type="radio" name="level" required value="400"> 400 </label></p>
<p><label class="choice"> <input type="radio" name="level" required value="500"> 500 </label></p>
</fieldset>

<p>
<label>Course Code 
<input type="text" name="course_code">
</label>
</p>

<p>
<label>Course Title 
<input type="text" name="course_title">
</label>
</p>

<p>
<label>Name of Lecturer
<input type="text" name="lec_name">
</label>
</p>

<fieldset>
<legend>Lecturer's gender</legend>
<p><label class="choice"> <input type="radio" name="gender" required value="Male"> Male </label></p>
<p><label class="choice"> <input type="radio" name="gender" required value="Female"> Female </label></p>
</fieldset>

<p>
<label>Date/Time
<input type="datetime-local" name="pickup_time" >
</label>
</p>
	
<p>
<label>	In comparison to all other Lecturers that have taught you in THIS University, how would you rate this lecturer?
<select id="rating" name="rating" required >
<option value="" selected="selected">Select One</option>
		<option value="Outstanding">Outstanding</option>
		<option value="Above average">Above average</option>
		<option value="Average">Average</option>
		<option value="Below Average">Below Average</option>
		<option value="Poor">Poor</option>
</select>
</label> 
</p>

<p>
<label>Comments
<textarea name="comments" maxlength="500"></textarea>
</label>
</p>
<div class="section_b">
<h3 class="section">Section B</h3>
				<h2>The Teacher...</h2>

			<legend>ENTHUSIASM</legend>
		<p>Appears confident and friendly:</p>
		<label><input type="radio" name="enth" required value="100">Excellent</label>
		<label><input type="radio" name="enth" value="75">Very Good</label>
		<label><input type="radio" name="enth" value="50">Good</label>
		<label><input type="radio" name="enth" value="25">Fair</label>
		<label><input type="radio" name="enth" value="0">Poor</label>	
	
<br>

<p>Is active and demonstrative when teaching:</p>
		<label><input type="radio" name="first"  required value="100">Excellent</label>
		<label><input type="radio" name="first" value="75">Very Good</label>
		<label><input type="radio" name="first" value="50">Good</label>
		<label><input type="radio" name="first" value="25">Fair</label>
		<label><input type="radio" name="first" value="0">Poor</label>
<br>


<br>	
				<legend>WARMTH</legend>
				<p>smile frequently:</p>
					<label><input type="radio" name="smile" value="100" required >Excellent</label>
		<label><input type="radio" name="smile" value="75">Very Good</label>
		<label><input type="radio" name="smile" value="50">Good</label>
		<label><input type="radio" name="smile" value="25">Fair</label>
		<label><input type="radio" name="smile" value="0">Poor</label>
<br>
				<p>Is approachable in and out of the lecture room:</p>
						<label><input type="radio" name="second" value="100" required >Excellent</label>
		<label><input type="radio" name="second" value="75">Very Good</label>
		<label><input type="radio" name="second" value="50">Good</label>
		<label><input type="radio" name="second" value="25">Fair</label>
		<label><input type="radio" name="second" value="0">Poor</label>
<br>
				<p>Takes time to explain difficult concepts in class:</p>
					<label><input type="radio" name="third" value="100" required >Excellent</label>
		<label><input type="radio" name="third" value="75">Very Good</label>
		<label><input type="radio" name="third" value="50">Good</label>
		<label><input type="radio" name="third" value="25">Fair</label>
		<label><input type="radio" name="third" value="0">Poor</label>
<br><br>
					
				<legend>CREDIBILITY</legend>
				<p>Is open in his/her dealings with students</p>
				<label><input type="radio" name="open" value="100">Excellent</label>
		<label><input type="radio" name="open" value="75">Very Good</label>
		<label><input type="radio" name="open" value="50">Good</label>
		<label><input type="radio" name="open" value="25">Fair</label>
		<label><input type="radio" name="open" value="0">Poor</label>
<br>
							
				<p>Openly solicits and accepts students comments criticisms</p>
						<label><input type="radio" name="solicit" value="100">Excellent</label>
		<label><input type="radio" name="solicit" value="75">Very Good</label>
		<label><input type="radio" name="solicit" value="50">Good</label>
		<label><input type="radio" name="solicit" value="25">Fair</label>
		<label><input type="radio" name="solicit" value="0">Poor</label>
<br>
					
				<p>Shows no favoritism in his/her dealings with students</p>
						<label><input type="radio" name="show" value="100">Excellent</label>
		<label><input type="radio" name="show" value="75">Very Good</label>
		<label><input type="radio" name="show" value="50">Good</label>
		<label><input type="radio" name="show" value="25">Fair</label>
		<label><input type="radio" name="show" value="0">Poor</label>
<br><br>
					
				<legend>EXPECTATION FOR SUCCESS</legend>
				<p>Clearly informs students of the course objectives</p>
					<label><input type="radio" name="expect" value="100">Excellent</label>
		<label><input type="radio" name="expect" value="75">Very Good</label>
		<label><input type="radio" name="expect" value="50">Good</label>
		<label><input type="radio" name="expect" value="25">Fair</label>
		<label><input type="radio" name="expect" value="0">Poor</label>
	<br>				
				<p>stimulates students interest in the course</p>
						<label><input type="radio" name="stimulate" value="100">Excellent</label>
		<label><input type="radio" name="stimulate" value="75">Very Good</label>
		<label><input type="radio" name="stimulate" value="50">Good</label>
		<label><input type="radio" name="stimulate" value="25">Fair</label>
		<label><input type="radio" name="stimulate" value="0">Poor</label>
		<br>			
				<p>Calls all students often and equitably in the class</p>
						<label><input type="radio" name="call" value="100">Excellent</label>
		<label><input type="radio" name="call" value="75">Very Good</label>
		<label><input type="radio" name="call" value="50">Good</label>
		<label><input type="radio" name="call" value="25">Fair</label>
		<label><input type="radio" name="call" value="0">Poor</label>
			<br>		
				<p>Helps students modify incorrect or inadequate responses</p>
						<label><input type="radio" name="help" value="100">Excellent</label>
		<label><input type="radio" name="help" value="75">Very Good</label>
		<label><input type="radio" name="help" value="50">Good</label>
		<label><input type="radio" name="help" value="25">Fair</label>
		<label><input type="radio" name="help" value="0">Poor</label>
				<br><br>	
				<legend>ENCOURAGING AND PATIENT</legend>
				<p>Is optimistic Promising and cheerful</p>
						<label><input type="radio" name="promising" value="100">Excellent</label>
		<label><input type="radio" name="promising" value="75">Very Good</label>
		<label><input type="radio" name="promising" value="50">Good</label>
		<label><input type="radio" name="promising" value="25">Fair</label>
		<label><input type="radio" name="promising" value="0">Poor</label>
					<br>
				<p>Is a good and active listener when students are speaking</p>
					<label><input type="radio" name="active" value="100">Excellent</label>
		<label><input type="radio" name="active" value="75">Very Good</label>
		<label><input type="radio" name="active" value="50">Good</label>
		<label><input type="radio" name="active" value="25">Fair</label>
		<label><input type="radio" name="active" value="0">Poor</label>
					<br><br>
				<legend>PROFESSIONAL</legend>
				<p>Treats the subject seriously and with passion</p>
					<label><input type="radio" name="treat" value="100">Excellent</label>
		<label><input type="radio" name="treat" value="75">Very Good</label>
		<label><input type="radio" name="treat" value="50">Good</label>
		<label><input type="radio" name="treat" value="25">Fair</label>
		<label><input type="radio" name="treat" value="0">Poor</label>
					<br>
				<p>Comes to class regularly and promptly</p>
					<label><input type="radio" name="class" value="100">Excellent</label>
		<label><input type="radio" name="class" value="75">Very Good</label>
		<label><input type="radio" name="class" value="50">Good</label>
		<label><input type="radio" name="class" value="25">Fair</label>
		<label><input type="radio" name="class" value="0">Poor</label>
					<br>
				<p>Maintains a professional image(appearance, comportment and mannnerisms)</p>
					<label><input type="radio" name="image" value="100">Excellent</label>
		<label><input type="radio" name="image" value="75">Very Good</label>
		<label><input type="radio" name="image" value="50">Good</label>
		<label><input type="radio" name="image" value="25">Fair</label>
		<label><input type="radio" name="image" value="0">Poor</label>
<br>
				<p>Is always fair but firm</p>
					<label><input type="radio" name="fair" value="100">Excellent</label>
		<label><input type="radio" name="fair" value="75">Very Good</label>
		<label><input type="radio" name="fair" value="50">Good</label>
		<label><input type="radio" name="fair" value="25">Fair</label>
		<label><input type="radio" name="fair" value="0">Poor</label>
	<br><br>				
				<legend>ADAPTABILITY</legend>
				<p>Is flexible in course activities when the need arises</p>
					<label><input type="radio" name="flexible" value="100">Excellent</label>
		<label><input type="radio" name="flexible" value="75">Very Good</label>
		<label><input type="radio" name="flexible" value="50">Good</label>
		<label><input type="radio" name="flexible" value="25">Fair</label>
		<label><input type="radio" name="flexible" value="0">Poor</label>
			<br><br>		
				<legend>KNOWLEDGEABLE</legend>
				<p>Has a good mastery of what he/she is teaching</p>
				<label><input type="radio" name="mastery" value="100">Excellent</label>
		<label><input type="radio" name="mastery" value="75">Very Good</label>
		<label><input type="radio" name="mastery" value="50">Good</label>
		<label><input type="radio" name="mastery" value="25">Fair</label>
		<label><input type="radio" name="mastery" value="0">Poor</label>
					<br>
				<p>Recommends relevant reading materials for the course and advises students on how to access them</p>
				<label><input type="radio" name="relevant" value="100">Excellent</label>
		<label><input type="radio" name="relevant" value="75">Very Good</label>
		<label><input type="radio" name="relevant" value="50">Good</label>
		<label><input type="radio" name="relevant" value="25">Fair</label>
		<label><input type="radio" name="relevant" value="0">Poor</label>
					<br><br>
				<legend>PEDADOGY</legend>
				<p>Uses various instruction approaches(Enhanced lecture, Group, Question and answer, discussion e.t.c)</p>
					<label><input type="radio" name="various" value="100">Excellent</label>
		<label><input type="radio" name="various" value="75">Very Good</label>
		<label><input type="radio" name="various" value="50">Good</label>
		<label><input type="radio" name="various" value="25">Fair</label>
		<label><input type="radio" name="various" value="0">Poor</label>
					<br>
				<p> Employs jokes and other creative means in lesson delivery.</p>
				<label><input type="radio" name="joke" value="100">Excellent</label>
		<label><input type="radio" name="joke" value="75">Very Good</label>
		<label><input type="radio" name="joke" value="50">Good</label>
		<label><input type="radio" name="joke" value="25">Fair</label>
		<label><input type="radio" name="joke" value="0">Poor</label>
					<br>
				<p> Employs instructional resources in lesson delivery (multimedia, real objectives, technologies, etc.)</p>
					<label><input type="radio" name="lesson" value="100">Excellent</label>
		<label><input type="radio" name="lesson" value="75">Very Good</label>
		<label><input type="radio" name="lesson" value="50">Good</label>
		<label><input type="radio" name="lesson" value="25">Fair</label>
		<label><input type="radio" name="lesson" value="0">Poor</label>
					<br><br>
				<legend>ASSESSMENT</legend>
				<p> Gives regular assignment or test</p>
					<label><input type="radio" name="test" value="100">Excellent</label>
		<label><input type="radio" name="test" value="75">Very Good</label>
		<label><input type="radio" name="test" value="50">Good</label>
		<label><input type="radio" name="test" value="25">Fair</label>
		<label><input type="radio" name="test" value="0">Poor</label>
					<br>
				<p> Provides feedbacks on assignments or tests</p>
					<label><input type="radio" name="feedback" value="100">Excellent</label>
		<label><input type="radio" name="feedback" value="75">Very Good</label>
		<label><input type="radio" name="feedback" value="50">Good</label>
		<label><input type="radio" name="feedback" value="25">Fair</label>
		<label><input type="radio" name="feedback" value="0">Poor</label>
					<br>
				<p>Encourages students to successfully complete tasks</p>
				<label><input type="radio" name="complete" value="100" >Excellent</label>
		<label><input type="radio" name="complete" value="75">Very Good</label>
		<label><input type="radio" name="complete" value="50">Good</label>
		<label><input type="radio" name="complete" value="25">Fair</label>
		<label><input type="radio" name="complete" value="0">Poor</label>
					</div>
<br><br>

<p><button type="Submit">Submit</button></p>
</form>
<?php 
//$result = $enth + $first + $smile + $second + $third + $open + $solicit + $show + $expect + $stimulate + $call + $help + 
//$promising + $active + $treat + $class + $image +   $fair + $flexible + $mastery + $relevant + $various + $joke + $lesson
// + $test + $feedback + $complete;
//echo $result / 27 ;
?>

</div>

</div>
</body>
</html>