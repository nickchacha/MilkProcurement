<?php	//$intendedArray	= array(1 => 'Individual', 2 => 'Business');
		$countries		= Routes::lists('name', 'id'); 
		$routes = Routes::lists('route', 'id');
		$CollectionCenter = Routes::lists('collectioncenter', 'id'); ?>
@include('layouts.front-header')
<div class="container-fluid" style="margin-top:10%;">
	<style>
		.required:before {
		color: #ff0000;
		content: "* ";
		}
		#customer_bornOn_month,
		#customer_bornOn_day,
		#customer_bornOn_year
		{
		width: auto !important;
		margin-right: 5px;
		}
		.error ul{
		margin-left: 220px;
		}
		.error ul li{
		padding-top:3px;
		list-style: none;
		color:#ff0000;
		font-weight:bold;
		}
	</style>
	
	<div class="clearfix"></div>
	<div class="page-header" style="text-align:center;">
		<h2>
			Start Farmer Registration Process 
			
		</h2>
	</div>
	{{ Form::open(array('url' => 'register-farmer')) }}
		<div class="well">
			<div class="row">
				<div class="span2">
					&nbsp;
				</div>
				<div class="span8">
					<div class="form-group" style="color:red;padding:10px;">
						@foreach( $errors->all() as $message )
						  {{ $message }}<br>
						@endforeach
					</div>
					@if(Session::has('message'))
					<div class="form-group" style="color:green;padding:10px;">
						{{ Session::get('message'); }}
					</div>
					@endif
				</div>
			</div>
			<div class="row">
				<div class="span2">
					&nbsp;
				</div>
				<div>
					<div class="span3">
						<div style="clear:both;">
							<label for="customer_customerType" class="required">Email</label>
							<div>
								<div style="float:left;width:230px;">
									{{ Form::hidden('user_id', $user->id) }}
									{{ Form::text('PhoneNumber', array('placeholder' => '0723221444)) }}
								</div>
								<div class="error"></div>
							</div>
						</div>
						<div style="clear:both;">
							<label for="customer_customerType" class="required">Select Route</label>
							<div>
								<div style="float:left;width:230px;">
									{{ Form::select('routes', $routeArray, Input::old('routes'), array('id' => 'routes', 'style' => '')) }}
								</div>
								<div class="error"></div>
							</div>

						</div>
						<div style="clear:both;">
							<label for="customer_customerType" class="required">Select Collection Center</label>
							<div>
								<div style="float:left;width:230px;">
									{{ Form::select('CollectionCenter', $CollectionCenter, Input::old('CollectionCenter'), array('id' => 'collectioncenter', 'style' => '')) }}
								</div>
								<div class="error"></div>
							</div>

						</div>
						<div style="clear:both;">
							<label for="customer_firstName" class="required">First name</label>
							<div>
								{{ Form::text('firstname', Input::old('firstname'), array('placeholder' => '')) }}
								<div class="error"></div>
							</div>
						</div>
						<div style="clear:both;">
							<label for="customer_lastName" class="required">Last name</label>
							<div>
								{{ Form::text('lastname', Input::old('lastname'), array('placeholder' => '')) }}
							</div>
						</div>
						<div style="clear:both;">
							<label for="customer_lastName" class="required">ID Number</label>
							<div>
								{{ Form::text('Idnumber', Input::old('Idnumber'), array('placeholder' => '')) }}
							</div>
						</div>
					
					</div>
					<div class="span3">
						
						<div style="clear:both;">
							<label for="customer_address" class="required">Address</label>
							<div>
								{{ Form::text('address', Input::old('address'), array('placeholder' => '')) }}
								<div class="error"></div>
							</div>
						</div>
																	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span2">
					&nbsp;
				</div>
				<div class="span6">
					<div class="clearfix"></div>
					<div>
						<h5>By clicking &quot;Submit&quot; I agree that</h5>
						<ul>
							<li>
							I have read and accepted the <a href="{{ SITE_PATH }}/terms" target="_blank">Terms of trade</a>.
							</li>
						</ul>
						<button class="btn btn-primary">
						Submit
						</button>
					</div>
				</div>
			</div>
		</div>
	{{ Form::close() }}
	<footer style="margin-top:100px;">
		<p>
		</p>
	</footer>
</div>
@include('layouts.front-footer')
<script>
	$('.datepicker').datepicker({ format: 'dd/mm/yyyy' });
</script>