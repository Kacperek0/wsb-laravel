<h3>Books</h3>
<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>year</th>
        <th>price</th>
        <th>pages</th>
        <th>publication place</th>
        <th>created at</th>
    </tr>
@foreach ($data as $book)
<tr>
    <td>{{$book['id']}}</td>
    <td>{{$book['title']}}</td>
    <td>{{$book['year']}}</td>
    <td>{{$book['price']}}</td>
    <td>{{$book['pages']}}</td>
    <td>{{$book['publication_place']}}</td>
    <td>{{$book['created_at']}}</td>
</tr>
@endforeach
</table>
