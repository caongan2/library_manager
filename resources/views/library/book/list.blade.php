<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
@include('library.layout.navbar')
<div class="card">
    <div class="btn btn-secondary">
        <h3 class="card-title">Books</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="{{route('book.add')}}" class="post">Add</a>
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Author</th>
                <th>Price</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr  class="product">
                    <td>{{$book->id}}</td>
                    <td><img src="{{asset('storage/'. $book->image)}}" style="width: 200px" alt="error"></td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->price}}</td>
                    {{--                    <td>{{$book->}}</td>--}}
                    <td>
                        <a href="">Show</a>
                        <a href="">|</a>
                        <a href="">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
