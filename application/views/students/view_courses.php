            <div class="row">
                <h1>View Courses</h1>
            </div>
            
            <div class="row">
                <table class="table table-striped table-hover table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th>COURSE ID</th>
                            <th>COURSE NAME</th>
                            <th>COURSE DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($courses as $c){
                        echo '	<tr>	
                                    <td>'.$c['course_id'].'</td>
                                    <td>'.$c['course_name'].'</td>
                                    <td>'.$c['course_desc'].'</td>
                                    <td>
                                        <a href="">View</a> |
                                        <a href="">Edit</a> |
                                        <a href="" class="delete">Delete</a>
                                    </td>
                                </tr>
                                ';
                    }
                    ?>
                    </tbody>
                </table>
                <div class="">
                    <a href="<?php echo base_url("Boots/add_course")?>" class="btn btn-danger btn-lg">New Course</a>
                </div>
            </div>
        </div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Star Na Si Van Damme Stallone.
		</div>
	</div>
</div>





