@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="col-md-8">
			<h1 class="text-center">домашняя</h1>
		</div>
				<div class="col-md-4">
			<h4 class="text-center">30 дек 2018</h4>
		</div>
				<div class="col-md-8">
			<h2 class="text-center">рабочая</h2>
		</div>
				<div class="col-md-4">
			<h4 class="text-center">31 дек 2018</h4>
		</div>
						<div class="col-md-8">
			<h2 class="text-center">удаленная</h2>
		</div>
				<div class="col-md-4">
			<h4 class="text-center">1 янв 2019</h4>
		</div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                         
                        </div>
                    @endif

                    You are logged in!
                </div>
                <?php 
                //session_start();
                //print_r($_SESSION);
                          // echo "Hello";
                           ?>
            </div>
        </div>
    </div>
</div>
@endsection
