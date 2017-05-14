<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Rose 'n' Roses || Sys</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('assets/img/apple-icon.png')}}" />
	<link rel="icon" type="image/png" href="{{ asset ('assets/img/imondcorp.png')}}" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="{{ asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{ asset ('assets/css/bootstrap.css')}}" rel="stylesheet" />
	<link href="{{ asset ('assets/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset ('assets/css/demo.css')}}" rel="stylesheet" />
	<link href="{{ asset ('assets/css/multiple-select.css')}}" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('{{ asset ('assets/img/wizard-book.JPG')}}')">
	    <!--   Creative Tim Branding   -->
	    <a href="#">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="{{ asset ('assets/img/imondcorp.png')}}">
	            </div>
	            <div class="brand">
	                Rose n Roses
	            </div>
	        </div>
	    </a>

		<!--  Made With Material Kit  -->
		<a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">RR</div>
			<div class="made-with">Rose &amp;Roses <strong>Best Event Managers</strong></div>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
              <div class="wizard-container">
                <div class="card wizard-card" data-color="red" id="wizard">
		              <form action="/book/event" method="POST">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                	<div class="wizard-header">
                    	<h3 class="wizard-title">
                    		Book Event
                    	</h3>
  									  <h5>This information will let us know more about your Event.</h5>
  		            </div>
  								<div class="wizard-navigation">
  									<ul>
                        <li><a href="#personal_details" data-toggle="tab">Customer Details</a></li>
                        <li><a href="#tents" data-toggle="tab">Tents, Chairs &amp; Tables</a></li>
                        <li><a href="#decor" data-toggle="tab">Floral Decor</a></li>
                        <li><a href="#drapery" data-toggle="tab">Drapery &amp; Fittingd</a></li>
                    </ul>
  								</div>

                  <div class="tab-content">
                    <div class="tab-pane" id="personal_details">
                    	<div class="row">

                      	<div class="col-sm-12">
                          	<h4 class="info-text"> Let's start with the your personal details.</h4>
                      	</div>

                        <div class="col-sm-6">

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">face</i>
                          </span>
                          <div class="form-group label-floating">
                              <label class="control-label">Your Full Name</label>
                              <input name="customer_name" type="text" class="form-control" >
                          </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">phone</i>
                          </span>
                          <div class="form-group label-floating">
                              <label class="control-label">Your Mobile Number</label>
                              <input name="mobile" type="text" class="form-control" >
                          </div>
                        </div>

                        <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">place</i>
													</span>
													<div class="form-group label-floating">
                            	<label class="control-label">Venue</label>
                            	<input name="venue" type="text" class="form-control" >
                          </div>
												</div>

                        </div>

                        <div class="col-sm-6">

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
                            	<label class="control-label">Your Email</label>
                            	<input name="email" type="email" class="form-control">
                          </div>
												</div>

                        <div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-tent"></i>
													</span>
													<div class="form-group label-floating">
                            	<label class="control-label">Type of Your Event</label>
                            	<input name="event_type" type="text" class="form-control">
                          </div>
												</div>

                        <div class="form-group label-floating">
                            <label class="control-label">County</label>
                            <select name="county" class="form-control">
                                  <option disabled="" selected=""></option>
                                  <option> Nandi </option>
                                  <option> Uasin Gishu </option>
                                  <option> Elgeyo Marakwet </option>
                                  <option> Transnzoia </option>
                                  <option> Kakamega </option>
                                  <option> Baringo </option>
                                  <option> Kericho </option>
                                  <option> Bomet </option>
                                  <option> Nakuru </option>
                            </select>
                        </div>

                      	</div>

		                  </div>

                      </div>

                      <div class="tab-pane" id="tents">
                          <h4 class="info-text">Select Tents, Chairs &amp; Tables you desire</h4>
                          <div class="row">

                            <div class="col-sm-12">

                              <div class="form-group label-floating">
																<div class="form-group">

																	<table class="table table-striped table-bordered table-responsive">
																		<thead>
																			<tr>
																				<th>Description</th>
																				<th>Quantity</th>
																			</tr>
																		</thead>
																		<tbody>

																			<tr>
																				<td>100 seater Tent</td>
																				<td>
																					<input type="number" name="tent100_quantity" value="">
																				</td>
																			</tr>

																			<tr>
																				<td>50 seater Tent</td>
																				<td>
																					<input type="number" name="tent50_quantity" value="">
																				</td>
																			</tr>

																			<tr>
																				<td>Gazebo</td>
																				<td>
																					<input type="number" name="gazebo_quantity" value="">
																				</td>
																			</tr>

																			<tr>
																				<td>Decorated Chairs</td>
																				<td>
																					<input type="number" name="decorated_chairs" value="">
																				</td>
																			</tr>

																		</tbody>
																	</table>

															</div>

                              </div>

                          </div>
                        </div>
                      </div>

                      <div class="tab-pane" id="decor">
                          <div class="row">
                              <h4 class="info-text">Drop us a small description.</h4>
                              <div class="col-sm-6 col-sm-offset-1">
                            		<div class="form-group">
                                      <label>Room description</label>
                                      <textarea class="form-control" placeholder="" rows="6"></textarea>
                                  </div>
                              </div>
                              <div class="col-sm-4">
                              	<div class="form-group">
                                      <label class="control-label">Example</label>
                                      <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
                                  </div>
                              </div>
                          </div>
                      </div>

											<div class="tab-pane" id="drapery">
                          <div class="row">
                              <h4 class="info-text">Drop us a small description.</h4>
                              <div class="col-sm-6 col-sm-offset-1">
                            		<div class="form-group">
                                      <label>Room description</label>
                                      <textarea class="form-control" placeholder="" rows="6"></textarea>
                                  </div>
                              </div>
                              <div class="col-sm-4">
                              	<div class="form-group">
                                      <label class="control-label">Example</label>
                                      <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
                                  </div>
                              </div>
                          </div>
                      </div>

                      </div>

                      <div class="wizard-footer">
                    	  <div class="pull-right">
                            <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                            <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
                        </div>
                        <div class="pull-left">
                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                        </div>
	                      <div class="clearfix"></div>
	                    </div>

                      </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="#">Brian Rotich</a>.
	        </div>
	    </div>
	</div>

</body>

	<script>
		$(function() {
				$('#ms').change(function() {
						console.log($(this).val());
				}).multipleSelect({
						width: '100%'
				});
		});
	</script>
	<!--   Core JS Files   -->
	<script src="{{ asset ('assets/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset ('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<script src="{{ asset ('assets/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{ asset ('assets/js/material-bootstrap-wizard.js')}}"></script>
	<script src="{{ asset ('assets/js/multiple-select.js')}}"></script>


	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{ asset ('assets/js/jquery.validate.min.js')}}"></script>
</html>
