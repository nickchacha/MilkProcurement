@extends('layouts.landing-header')
@section('content')
	<div class="container-fluid" style="margin-top:3%;">
		<style>
			.front-welcome-text {
			font-size: 20px;
			font-weight: 300;
			line-height: 22px;
			color: #333;
			text-align: left;
			text-shadow: white 0 1px 2px;
			}
			input[type="radio"], input[type="checkbox"] {
				margin:0;
			}
			label {
				display:inline;
			}
			li {
				float:left;
			}
			h4 {
				color:#CC0000;
			}
			.row-fluid p {
				font-family: Verdana, Geneva, sans-serif;
				color: #424242;
				font-size:13px;
			}
			.row-fluid div {
				font-family: Verdana, Geneva, sans-serif;
			}
		</style>
		<div class="row-fluid">
			<div class="span12">
				<div class="pull-right" style="margin-bottom: 15px;">
				</div>
			</div>
		</div>
		<div class="row-fluid" style="width:96.2%;margin-left:2%;margin-bottom:20px;">
			<div class="span8">
				<div style="font-size:24px;margin-bottom:10px;">About</div>
				<hr>
				<div class="row-fluid" style="margin-bottom:10px;">
					<div class="span12">
						<p>Milk Procurement system is Free opensource Script developed specificall for collection of Milk from various suppliers</p>
						<p>The project was inspired by the need to learn Coding (Developing) applications using Laravel 4.2 and also desire to make solutions that address major challanges that most co-operative faces during the quest to resolve the hunge buden of collecting, weighing of the milk. </p>
						
					</div>
				</div>
								
				
				<div style="font-size:24px;margin-bottom:10px;">What the System Does</div>
				<hr>
				<div class="row-fluid" style="margin-bottom:10px;">
					<div class="span6">
						<div style="font-size:15px;color:#CC0000;margin-bottom:10px;line-height:24px;">1.	Milk Collection</div>
						<p>The System is build in such a way that all are made through the mobile app and using the Weservice the data is onlice synched to the system DB
			</p>
					</div>
					<div class="span6">
						<div style="font-size:15px;color:#CC0000;margin-bottom:10px;line-height:24px;">2.	Graders</div>
						<p>Get to See the accumilated Milk corrected report.</p>
						
					</div>
				</div>
				<div class="row-fluid" style="margin-bottom:10px;">
					<div class="span6">
						<div style="font-size:15px;color:#CC0000;margin-bottom:10px;line-height:24px;">3.	Farmers</div>
						<p> Can view and manage the accumulated milk supplied to the Co-opative society</p>
					</div>
					<div class="span6">
						<div style="font-size:15px;color:#CC0000;margin-bottom:10px;line-height:24px;">4.	Manage Extension Service </div>
						<p>This includes and not limitend to </p>
						<ul> <li>Vetianary Services</li><li>Feeds : Important to know, Registered Farmers can request for Loans online</li><li> Transportation: Important to note. Milk transporters can view the amount owned For the co-operative society</li> <li> </li>  </ul>
					</div>
				</div>
				
				<div class="row-fluid" style="margin-bottom:10px;">
					<div class="span12">
						<div style="background:#FFFF99;border:1px solid #dddddd;padding:24px 19px;-webkit-border-radius:6px;">
							<font>Register now</font><input type="button" value="Register" class="btn btn-primary" style="float:right;margin-top:-5px;" onclick="location.href='{{ SITE_PATH }}/register';">
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="span4">
				<div class="well">
					<h4 class="text-center">
						Sign In
					</h4>
					<hr>
					{{ Form::open(array('url' => 'signin')) }}
						<div>
							<div style="text-align:center;">
								<div style="font-size:14px;font-weight:bold;">
									To see auctions, to bid and more, sign in or create an account.
								</div>
								<div class="form-group" style="color:red;padding:10px;">
									@foreach( $errors->all() as $message )
									  {{ $message }}<br>
									@endforeach
								</div>
								
								<div class="form-group" style="color:green;padding:10px;">
									{{ Session::get('message'); }}
								</div>
								
								<div style="clear:both;">
									<label style="float:left;text-align:left;width:100%;">Email:</label>
									{{ Form::text('email', Input::old('email'), array('placeholder' => 'myemail@email.com', 'class' => 'front-field-width', 'style' => 'float:left;')) }}
								</div>
								<div style="clear:both;">
									<label style="float:left;text-align:left;width:100%;">Password:</label>
									{{ Form::password('password', array('placeholder' => '........', 'class' => 'front-field-width', 'style' => 'float:left;')) }}
								</div>
								<div class="remember-forgot" style="clear:both;">
									<label class="remember">
									{{ Form::checkbox('persist') }}
									<span>
									Remember me
									</span>
									/
									<a href="/forgot-password">
									Forgot password
									</a>
									</label>
								</div>
								<div style="margin-top:15px;margin-bottom:36px;">
									<button type="submit" name="login" class="btn btn-primary" style="vertical-align:4px;">
									Sign In
									</button>&nbsp;&nbsp;&nbsp;&nbsp;
									<button type="button" name="login" class="btn btn-info" style="vertical-align:4px;" onclick="location.href='{{ SITE_PATH }}/register';">
									Register
									</button>
								</div>
							</div>
						</div>
					{{ Form::close() }}
				</div>
				
				<div class="well">
					<div style="font-size:15px;color:#CC0000;margin-bottom:10px;line-height:24px;">Contact Us</div>
					<p>
						<strong>Mail:</strong><br>
						<a href="mailto:sales@safariautotrade.com">sales@safariautotrade.com</a><br>
						<a href="mailto:infor@safariautotrade.com">infor@safariautotrade.com</a>
					</p>
					<p>
						<strong>Tel:</strong><br>
						<a href="tel:+254 714311164">+254 714311164</a>
					</p>
					 
				<div>
			</div>
		</div>
	</div>
@include('layouts.landing-footer')