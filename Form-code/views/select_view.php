<html>
 <body>
	<div class="row grow w-99.8">	
       <div id="form" class="main col-12 h-100 py-2">
						

				<table class="table"><tr>
							<th>S_no</th>
							<th>F_NAME</th>
							<th>L_NAME</th>
							<th>E_MAIL</th>
							<th>MOBILE_NO</th>
							<th>DOB</th>
							<th>GENDER</th>
							<th>CHECK</th>
							<th>MESSAGE</th>
							<th>COURSE</th>
							<th>DELETE</th>
							<th>EDIT</th>
						</tr>
							   <?php
							   
                              foreach($product as $row)
							  {?>
							  	 <tr>
							     <td><?php echo  $row->S_no; ?></td>
							     <td><?php echo  $row->Fname; ?></td>
							     <td><?php echo  $row->Lname; ?></td>
							     <td><?php echo  $row->E_Mail; ?></td>
							     <td><?php echo  $row->Phone_No; ?></td>
							     <td><?php echo  $row->Dob; ?></td>
							     <td><?php echo  $row->Gender; ?></td>
							     <td><?php echo  $row->Checkk; ?></td>
							     <td><?php echo  $row->Message; ?></td>
							     <td><?php echo  $row->Course; ?></td>
							     <!-- <td><button class="delete_data"
							      href="<?php //echo base_url('Form/delete_records?S_no=$row->S_no');?>">DELETE</button></td> -->
							      <td><?php echo anchor('Form/delete_data', 'DELETE', 'S_no="$row->S_no"'); ?></td>
                                  <td><a href="#" data-id="delete[]" role="button" class="Delete"
                                   data-toggle="modal" onClick="confirm_delete()"><i class="icon-trash"></i></a></td>
                                  
							     <td><button >EDIT</button></td>
							    </tr>			
                              <?php  } ?>
							

				</table>		
	    </div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script>


</html>


