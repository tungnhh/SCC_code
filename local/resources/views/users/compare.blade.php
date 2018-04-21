@extends  ('users.layout.user')
@section ('main')

<div class="row"  style="margin-left:20%;"> 
	
	
	<div class="col-md-3 col-sm-2 col-xs-12">
		<select name="" id="subject" class="form-control">
		<option value="-1">Select Subject</option>
		<option value="0">PRO192</option>
		</select>
	</div>

	<div class="col-md-3 col-sm-2 col-xs-12">
	<select name="" id="class" class="form-control">
		<option value="">Select Class</option>
	</select>
	</div>

	<div class="col-md-3 col-sm-2 col-xs-12">
	<select name="" id="exercise" class="form-control">
		<option value="">Select Exercise</option>
	</select>
	</div>

	


</div>

<div class="row">
	<input type="submit" class="btn btn-success" value="Get List Students" style="margin-left: 45%;margin-top:  30px;">
</div>



	<div class="row">
		<div class="selectAll">
			 <div id="block-1">Select All Students</div>
			 <div id="block-2">
			<label class="tasks-list-item">
			<input type="checkbox" name="task_1" value="1" class="tasks-list-cb selectAll">
        	<span class="tasks-list-mark"></span>
			</label>

			 </div>
		</div>
	</div>

	<div class="row">
		<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver2 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Student Name</th>
									<th class="cell100 column2">Roll Number</th>
									<th class="cell100 column4">Select</th>

								</tr>
							</thead>
						</table>
					</div>	
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
							
						
								<tr class="row100 body">
									<td class="cell100 column1">Thanhnn</td>
									<td class="cell100 column2">SE03750</td>
									<td class="cell100 column4">
										<label class="tasks-list-item">
        								<input type="checkbox" name="studentID[]" value="" class="tasks-list-cb">
        								<span class="tasks-list-mark"></span>

      									</label>
									</td>

								</tr>


				
								
							</tbody>
						</table>
					</div>


				</div>	

			</div>	
				<input class="btn btn-success" type="submit" value="Compare">
		</div>

	</div>


</div>



<script>
			$('.tasks-list-cb.selectAll').click(function(event) {   
    		if(this.checked) {
        // Iterate each checkbox
        	$('.tasks-list-cb').each(function() {
            this.checked = true;                        
       						 });
    		}else{
    		$('.tasks-list-cb').each(function() {
            this.checked = false;                        
       						 });	
    		}
			});

			$(document).ready(function(){
				$('#subject').change(function(){
					var idSubject = $(this).val();
					$.get("ajax/class/"+idSubject, function(data){
						$("#class").html(data);
					});
					$("#exercise").html("<option value=\"-1\">Select Exercise</option>");
				});

				$('#class').change(function(){
					var idClass = $(this).val();
					$.get("ajax/exercise/"+idClass, function(data){
						$("#exercise").html(data);
					});
				});


			});


</script>


@stop