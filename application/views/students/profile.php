
<div>
	<?php
	// $idno = "12-037-001";
	// $name = "MAGALPOK, GORGONIA RESTITUTO";
	// $course = "BSIT";
	// $sex = "F";
	// print_r($student);
    $header_data['title'] = "View Profile";
    $this->load->view('include/header',$header_data);
    $this->load->view('include/heading-menu');
	?>

	<div class="col-md-3 student-profile header">
		<p><b>ID No: </b><?php echo $student[0]['idno']; ?></p>
		<p><b>Name: </b><?php echo $student[0]['lname'].', '.$student[0]['fname'].' '.$student[0]['mname']; ?></p>
		<p><b>Course: </b><?php echo $student[0]['course']; ?></p>
		<p><b>Sex: </b><?php echo $student[0]['sex']; ?></p>
	</div>
	

</div>
<?php $this->load->view('include/footer'); ?>