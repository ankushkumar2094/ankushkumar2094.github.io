<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
        <title>User Records</title>

        <!-- Fonts -->
       
        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" rel="stylesheet">

        <!-- Styles -->
        <style>
			.page-break {
			    page-break-after: always;
			}

		table {
			  border-collapse: collapse;
			  border: 1px solid black;
			}

			th, td {
			border: 1px solid black;
			 text-align: center;
			}
			
			th {
			  background-color: #953dd7;
			  color: white;
			}

			tr:nth-child(even){
				background-color: #f2f2f2;
			}
			</style>

    </head>
    <body>
     
    	<div class="page-break">
        <table class=" table table-hover" style="width: 100%">
            <thead>
            <tr>
                <th>User-Id</th>
                <th>Name</th>
                <th>Email-Id</th>
                <th>Registration Time</th>
                
            </tr>
                </thead>
            <tbody>
            @foreach($users as $user)    
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
              
            </tr>
                @endforeach
            </tbody>

    </body>
</html>


