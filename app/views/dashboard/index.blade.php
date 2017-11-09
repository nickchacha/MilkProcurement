@extends('inc.header')

<div class="container">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    @if(Auth::check())
                        <a class="navbar-brand" href="{{ URL::to('product') }}">Products</a>
                    @endif
                </div>
                <ul class="nav navbar-nav">
                    @if(!Auth::check())
                    <li>{{ HTML::link('user/register', 'Register') }}</li>   
                    <li>{{ HTML::link('user/login', 'Login') }}</li>   
                    @else
                    <li><a href="{{ URL::to('product') }}">View All Products</a></li>
                    <li><a href="{{ URL::to('product/create') }}">Create a Product</a>
                    <li><a href="{{ URL::to('admin/index') }}"> Admin DashBoard</a>
                    <!--<li>{{ HTML::link('user/logout', 'Logout['.Auth::user()->email.']') }}</li>-->
                    <li><a href="{{ URL::to('user/logout') }}">Logout [<?php echo Auth::user()->email; ?>]</a>
                    @endif
                </ul>
            </nav>
<!-- Small boxes (Stat box) -->
<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>
					asdasda
				</h3>
				<p>
					New Orders
				</p>
			</div>
			<div class="icon">
				
			</div>
			<a href="#" class="small-box-footer">
				More info <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<h3>
					53<sup style="font-size: 20px">%</sup>
				</h3>
				<p>
					Bounce Rate34
				</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="#" class="small-box-footer">
				More info <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3>
					44
				</h3>
				<p>
					User Registrations
				</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">
				More info <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3>
					65
				</h3>
				<p>
					Unique Visitors
				</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
			<a href="#" class="small-box-footer">
				More info <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div><!-- ./col -->
</div><!-- /.row -->
@extends('inc.footer')

<!-- top row -->