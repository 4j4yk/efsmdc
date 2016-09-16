@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
				</div>

                <div align="center" class="panel-body">
				
				<h1> Welcome to Eagle Financial Services </h1>
				<p>
				Customer's data can be seen here - <b><a href="{{ action('CustomerController@index') }}">Customers</a></b><br/><br/>
				Customer's Stock data can be seen here - <b><a href="{{ action('StockController@index') }}">Stocks</a></b><br/><br/>		
				Customer's Investments data can be seen here - <b><a href="{{ action('InvestmentController@index') }}">Investments</a></b>
				</p>		
				
				</div>
				<div class="container">
    
</div>
            </div>
        </div>
    </div>
</div>
@endsection