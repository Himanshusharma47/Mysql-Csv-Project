<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Export Data to CSV</h1>
        <button>
            <a href="{{ route('export.cities') }}" >Export Cities to CSV</a>
        </button>
        
        <h2>Cities Data</h2>
        <table class="table" border="2" width="30%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>City Name</th>
                    <th>State ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                <tr>
                    <td>{{ $city->id }}</td>
                        <td>{{ $city->city_name }}</td>
                        <td>{{ $city->state_id }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
</html>
   
     