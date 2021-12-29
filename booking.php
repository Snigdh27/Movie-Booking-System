<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="booking.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-hover table-bordered text-center">
																<tbody><tr>
										<td class="col-md-6">
											Theatre
										</td>
										<td>
											Smitha, adoor										</td>
										</tr>
										<tr>
											<td>
												Screen
											</td>
										<td>
											Screen 1										</td>
									</tr>
									<tr>
										<td>
											Date
										</td>
										<td>
																		<div class="col-md-12 text-center" style="padding-bottom:20px">
								<a href="booking.php?date=2021-12-07"><button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i></button></a> <span style="cursor:default" class="btn btn-default">08-Dec-2021</span>
																<a href="booking.php?date=2021-12-09"><button class="btn btn-default"><i class="glyphicon glyphicon-chevron-right"></i></button></a>
															</div>
										</td>
									</tr>
									<tr>
										<td>
											Show Time
										</td>
										<td>
											06:00 PM First Show
										</td>
									</tr>
									<tr>
										<td>
											Number of Seats
										</td>
										<td>
											<form action="process_booking.php" method="post">
												<input type="hidden" name="screen" value="3">
											<input type="number" required="" tile="Number of Seats" max="200" min="0" name="seats" class="form-control" value="1" style="text-align:center" id="seats">
											<input type="hidden" name="amount" id="hm" value="150">
											<input type="hidden" name="date" value="2021-12-08">
										</form></td>
									</tr>
									<tr>
										<td>
											Amount
										</td>
										<td id="amount" style="font-weight:bold;font-size:18px">Rs 150</td>
									</tr>
									<tr>
										<td colspan="2">										<button class="btn btn-info" style="width:100%">Book Now</button>
																				</td>
									</tr>
						</tbody></table>
</body>
</html>