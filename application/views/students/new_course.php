			<p class="lead">Add New Course</p>
			<form role="form" class="" method="post">
				
				<div class="text-danger">
				<?php
				if( isset($errors) ){
					echo $errors;
				}
				?>
				</div>
				
				<div class="form-group">
					<label for="course_id">Course Id:</label>
					<input type="text" class="form-control" id="course_id" name="course_id" />
				</div>
				<div class="form-group">
					<label for="course_name">Course Name:</label>
					<input type="text" class="form-control" id="course_name" name="course_name" />
				</div>	
				<div class="form-group">
					<label for="course_desc">Course Description:</label>
					<input type="text" class="form-control" id="course_desc" name="course_desc" />
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Save <span class="glyphicon glyphicon-save"></span> 
					</button>
				</div>
			</form>
	
			<hr />
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
	alert("The new course record was successfully saved!");
	location.href = '<?php echo base_url('Boots/view_courses'); ?>';
</script>
<?php
}

?>




