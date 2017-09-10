            <div class="row">
                <h1>Welcome to SMS!</h1>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <h3>Students</h3>
                    <table class="table table-striped table-hover table-condensed table-responsive">
                        <tbody>
                        <?php
                        foreach($students as $s){
                            echo '	<tr>	
                                        <td>'.$s['lastname'].', '.$s['firstname'].' '.$s['middlename'].'</td>
                                    </tr>
                                    ';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h3>Courses</h3>
                    <table class="table table-striped table-hover table-condensed table-responsive">
                        <tbody>
                        <?php
                        foreach($courses as $c){
                            echo '	<tr>	
                                        <td>'.$c['course_name'].'</td>
                                    </tr>
                                    ';
                        }
                        ?>
                        </tbody>
                    </table>
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





