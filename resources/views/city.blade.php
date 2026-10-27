<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIDADES DO MUNDO</title>
</head>
<body>
    <table border ="1">
        <h1>CIDADES DO MUNDO</h1>
         <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>CODIGO DO PAIS</td>
            <td>DISTRITO</td>
            <td>POPULACAO</td>
</tr>
@foreach($cities as $item)
<tr>
    <th>{{$item->ID}}</th>
    <th>{{$item->Name}}</th>
    <th>{{$item->CountryCode}}</th>
    <th>{{$item->District}}</th>
    <th>{{$item->Population}}</th>
</tr>
@endforeach
</table>
    
    
    

</body>
</html>