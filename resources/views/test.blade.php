<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @foreach ($datas as $data)
        <ul> 
            <li>{{ $data->name }}</li>
            {{-- <li>{{ $data['user'] }}</li> --}}
            <ol>
                {{ $data['product'] }}
            @foreach ($data['product'] as $p)
                <li>{{ $p['name']}}</li>
            @endforeach
            </ol>
        </ul>
    @endforeach
</body>
</html>