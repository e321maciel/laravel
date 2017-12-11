<html>
  <body>
    <a href="/books/create" > Create Book</a>
    <table>
      <thead>
        <tr><td>ID</td><td>Title</td><td>Deion</td></tr>
      </thead>
      <tbody>
      @foreach($books as $book)
        <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->deion}}</td>
        </tr>
        @endforeach
      </tbody>
          
    </table>
  </body>
</html>