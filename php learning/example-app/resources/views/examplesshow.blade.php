<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Examples</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>


</head>

<body class="antialiased">
<a href="examplecreate">Add Record</a>
<br/>
<br/>
    <tabel>
       
        <tr>
            <td>ACTION</td>
            <td>ID</td>
            <td>NAME</td>

        </tr>
        <br/>
        @foreach($todoArr as $x)
        <tr>
        <td><a href="example_delete/{{$x->id}}">Delete</a></td>
             <td><a href="example_edit/{{$x->id}}">edit</a></td>
            <td>{{$x->id}}</td>
            <td>{{$x->name}}</td>
           
            <br/>

        </tr>
        @endforeach 
        

        </table>
</body>

</html>