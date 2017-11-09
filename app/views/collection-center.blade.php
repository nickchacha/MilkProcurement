<?php $route=Route::list('route', 'id');
$user=Route::list('user', 'id'); ?>
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
			Add a Route
			
		</h2>
	</div>
	{{ Form::open(array('url' => 'collection-center')) }}
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
									{{ Form::hidden('route_id', $route->id) }}
									{{ Form::text('PhoneNumber', array('placeholder' => '0723221444)) }}
								</div>
								<div class="error"></div>
							</div>
						</div>
						
						<div style="clear:both;">
							<label for="CollectionCenter" class="required">Collection Center</label>
							<div>
								{{ Form::text('collectioncenter', Input::old('collectioncenter'), array('placeholder' => '')) }}
								<div class="error"></div>
							</div>
						</div>
						<div style="clear:both;">
							<label for="routename" class="required">RouteName</label>
							<div> 
							   	<div style="float: left;width: 230px;">
							   	{{Form::select('route',$route, Input::old('route'),array('id'=>'route','style'=>''))}}
							   		
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