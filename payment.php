<?php include 'connection.php' ?>
<html>
<head>
  <style>
  table{
    padding: 5px;
    color: black;
    border-color: black;
    border-spacing: 10px;
    font-size: 18px;
	border-radius:5px;
  }
  </style>
</head>
<body>



           <div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Booking List</b>
						

					
					</div>
                    <div class="card-body">
						
						<table class="table table-bordered table-condensed table-hover">
							<colgroup>
								
								<col width="15%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								
							</colgroup>
							<thead>
								<tr>
									<th class="">Movie Name</th>
								    <th class="">Booked By</th>
									<th class="">Emailid</th>
									<th class="">Contact no</th>
									<th class="text-center">No of tickets</th>
									<th class="text-center">Paymentmethod</th>
                                    <th class="text-center">Reciept no</th>
									<!-- <th class="text-center">PlanAmount</th>
									<th class="text-center">Total</th>
									<th class="text-center">Remark</th> -->
									
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$payment =  $conn->query("SELECT * FROM booking");
								while($row=$payment->fetch_assoc()):
								?>
								<tr>
									
									<td class=""><?php echo ($row['movie']) ?></td>
									
									<td class="">
										 <p><b><?php echo ucwords($row['name']) ?></b></p>
										 
									</td>
									<td class="">
										 <p><b><?php echo $row['email'] ?></b></p>
									</td>
									<td class="">
										 <p><b><?php echo $row['contactno'] ?></b></p>
										 
									</td>
									<td class="">
										<p><b><?php echo $row['quantity'] ?></b></p>
									</td>
									
									<td class="">
										 <p><b><?php echo $row['paymentmethod'] ?></b></p>
									</td>
									<td class="">
										 <p><b><?php echo $row['cardno'] ?></b></p>
									</td>
								
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
</body>
</html>