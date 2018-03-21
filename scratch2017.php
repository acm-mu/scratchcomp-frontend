<html>
<body>
<?php include('header.php'); ?>
<hr>
<p>Welcome to the 2017 Marquette ACM Programming Competition, Scratch Division!

<hr>
<p><a href="CompetitionInstructions.pdf">Competition Instructions and Rules</a>
<p><a href="PracticeProblem.pdf">Pre-competition Practice Problem</a>
<p><a href="CompetitionProblems.pdf">Problem Specifications</a>

<hr>
<h2>Submit a Solution</h2>
<form action="submit.php" method="post" enctype="multipart/form-data">
	<script type="text/javascript">
	function hideCreative() {
		document.getElementById('creativeSubmit').style.display = 'none';
		document.getElementById('designFile').value = '';
		document.getElementById('designFile').required = false;
	}
	function showCreative() {
		document.getElementById('creativeSubmit').style.display = 'inline';
		document.getElementById('designFile').required = true;
	}
	</script>

	<p>Problem Solved:
	<table border=1>
		<td><label for="probPractice">Practice</label>
		<input type="radio" name="probRadio" id="probPractice" value="0" onClick="hideCreative()" required checked></td>
		<td><label for="probPractice">1</label>
		<input type="radio" name="probRadio" id="prob1" value="1" onClick="hideCreative()" ></td>
		<td><label for="probPractice">2</label>
		<input type="radio" name="probRadio" id="prob2" value="2" onClick="hideCreative()" ></td>
		<td><label for="probPractice">3</label>
		<input type="radio" name="probRadio" id="prob3" value="3" onClick="hideCreative()" ></td>
		<td><label for="probPractice">4</label>
		<input type="radio" name="probRadio" id="prob4" value="4" onClick="showCreative()" ></td>
		<td><label for="probPractice">5</label>
		<input type="radio" name="probRadio" id="prob5" value="5" onClick="showCreative()" ></td>
	</table>

	<br>Scratch .sb2 file:
	<input type="file" name="projectFile" id="projectFile" required>

	<div id="creativeSubmit" hidden>
		(Creative Section) Design document:
		<input type="file" name="designFile" id="designFile">
	</div>
	
	<br>Team Password:
	<input type="password" name="teamPassword", id="teamPassword" required>

	<p><input type="submit" value="Submit" name="submit">	
</form>


<hr>
<h2>Get Feedback</h2>
<p>Check this page regularly after submitting a solution.
<form action="feedback.php" method="post" enctype="multipart/form-data">
	<p>Team Password:
	<input type="password" name="teamPassword" required>

	<p><input type="submit" value="Retrieve Feedback" name="getfeedback">
</form>


<hr>
<h2>Request Clarification</h2>
<p>Use this form to ask for clarification on the competition rules, question prompts, or grading process. Feel free to talk to your room proctor first if it's about submitting your work or something else housekeeping-related. Most questions will be posted for everyone to see, so check this page regularly.
<form action="clarify.php" method="post" enctype="multipart/form-data">
	<p>Team Password:
	<input type="password" name="teamPassword" required>

	<p>Your question or concern:
	<input type="text" name="question" required>

	<p><input type="submit" value="Ask Question" name="askquestion">
</form>
<h3>View Clarifications</h3>
<form action="viewclarify.php" method="post" enctype="multipart/form-data">
	<p>Team Password:
	<input type="password" name="teamPassword" required>
	<br>
	<input type="submit" value="View All Clarifications" name="viewclarify">
</form>

