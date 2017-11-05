@extends('layouts.master')

@section('content')
	<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #56666e;
				display: table;
				font-weight: 36;
				font-family: Arial, Helvetica, sans-serif;
			}

			.content {
			    padding: 20px;
			    overflow: hidden;
			}

			.content img {
			    margin-right: 15px;
			    float: left;
			}

	</style>
	<body>
    <div class="list-group">
    	<div class="content">
    	<img src={{ $userinfo['avatar_url'] }} width="229" height="230" style="float:left">
    	<h4 class="list-group-item-heading"><b>User:</b> {{ $username }}</h4>
    	<h4 class="list-group-item-heading"><b>Name:</b> {{ $userinfo['name'] }}</h4>
    	<h4 class="list-group-item-heading"><b>Website:</b> {{ $userinfo['blog'] }}</h4>
    	<h4 class="list-group-item-heading"><b>Location:</b> {{ $userinfo['location'] }}</h4>
    	</div>
    	<br>
    	<div><h4 class="list-group-item-heading"><b>Repositories:</b></h4>
        @foreach($repos as $repo)
            <a class="list-group-item">
                <h4 class="list-group-item-heading">{{ $repo['name'] }}</h4>
                <p class="list-group-item-text">{{ $repo['description'] }}</p>
            </a>
        @endforeach
    	</div>
    </div>
	</body>

@endsection