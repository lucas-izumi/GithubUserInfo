<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #56666e;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 72px;
				margin-bottom: 40px;
			}

			.button {
			  display: inline-block;
			  padding: 15px 25px;
			  font-size: 24px;
			  cursor: pointer;
			  text-align: center;
			  text-decoration: none;
			  outline: none;
			  color: #fff;
			  background-color: #56666e;
			  border: none;
			  border-radius: 15px;
			  box-shadow: 0 9px #999;
			}

			.txtbox {
				height:50px;
				font-size:14pt;
			}

			.button:hover {background-color: #7f939d}

			.button:active {
			  background-color: #56666e;
			  box-shadow: 0 5px #666;
			  transform: translateY(4px);
			}
		</style>

	<script>
	function inputFocus(i){
    	if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
	}
	
	function inputBlur(i){
    	if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
	}
	</script>

	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Github Account Information Retriever</div>

				{!! Form::open(array('action' => 'GithubController@info')) !!}

				@if (count($errors) > 0)
				<div class="alert alert-danger">
				    There were some problems retrieving the information.<br />
				    <ul>
				        @foreach ($errors->all() as $error)
				            <li></li>
				        @endforeach
				    </ul>
				</div>
				@endif

				<div class="form-group">
				    {!! Form::text('name', null, 
				      array(
				        'class'=>'txtbox', 
				        'placeholder'=>'Enter a GitHub username'
				      )) !!}
				</div>
				<br>
				<div class="form-group">
				    {!! Form::submit('Retrieve Info', 
				      array('class'=>'button'
				    )) !!}
				</div>
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</body>
</html>