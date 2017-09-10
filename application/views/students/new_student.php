			<p class="lead">Add New Student</p>
			<form role="form" class="" method="post">
				
				<div class="text-danger">
				<?php
				if( isset($errors) ){
					echo $errors;
				}
				?>
				</div>
				
				<div class="form-group">
					<label for="idno">ID No.:</label>
					<input type="text" class="form-control" id="idno" name="idno" />
				</div>
				<div class="form-group">
					<label for="lname">Last Name:</label>
					<input type="text" class="form-control" id="lname" name="lname" />
				</div>	
				<div class="form-group">
					<label for="fname">First Name:</label>
					<input type="text" class="form-control" id="fname" name="fname" />
				</div>
				<div class="form-group">
					<label for="mname">Middle Name:</label>
					<input type="text" class="form-control" id="mname" name="mname" />
				</div>
				<div class="form-group">
					<label for="course">Course:</label>
					<select class="form-control" id="course" name="course">
                        <?php
                            foreach($courses as $c){
                                echo '<option value="' . $c['course_name'] . '">' . $c['course_name']. '</option>';
                            }
                        ?>
					</select>
				</div>
				<div class="form-group">
					<label for="sex">Sex</label>
					<input type="radio" class="" id="sex" name="sex" value="M" /> Male
					<input type="radio" class="" id="sex" name="sex" value="F" /> Female
				</div>	
				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Save <span class="glyphicon glyphicon-save"></span> 
					</button>
				</div>
			</form>
	
			<hr />
			<!--
			<form role="form" class="form-horizontal">
				<div class="form-group">
					<label for="idno" class="control-label col-md-2">ID No.:</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="idno" name="idno" />
					</div>
				</div>
				<div class="form-group">
					<label for="lname" class="control-label col-md-2">Last Name:</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="lname" name="lname" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2">
						<button type="submit" class="btn btn-primary">
						Save <span class="glyphicon glyphicon-save"></span> 
						</button>				
					</div>				

				</div>
			</form>-->	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Star Na Si Van Damme Stallone.
		</div>
	</div>
</div>

<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
	alert("The new student record was successfully saved!");
	location.href = '<?php echo base_url('boots'); ?>';
</script>
<?php
}

?>




