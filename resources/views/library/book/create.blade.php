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
<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Customer</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <form action="{{route('book.create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputClientCompany">Name</label>
                <input type="text" value="{{old('email')}}" id="inputClientCompany" name="name"
                       class=" form-control">
{{--                @error('email')--}}
{{--                <p class="text-danger">{{$message}}</p>--}}
{{--                @enderror--}}
            </div>
            <div class="form-group">
                <label for="inputDescription">Author</label>
                <input type="text" value="{{old('phone')}}" name="author" id="inputDescription"
                       class="form-control">
{{--                @error('phone')--}}
{{--                <p class="text-danger">{{$message}}</p>--}}
{{--                @enderror--}}
            </div>
            <div class="form-group">
                <label for="inputName">Price</label>
                <input type="number" value="{{old('username')}}" name="price" id="inputName"
                       class="form-control">
{{--                @error('username')--}}
{{--                <p class="text-danger">{{$message}}</p>--}}
{{--                @enderror--}}
            </div>
            <div class="form-group">
                <label for="inputDescription">Category</label>
                <div class="input-group mb-3">
                    <select name="category" id="">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
{{--                @error('password')--}}
{{--                <p class="text-danger">{{$message}}</p>--}}
{{--                @enderror--}}
            </div>
            <div class="form-group">
                <label for="inputDescription">Image</label>
                <input type="file" value="" name="image" id="image"
                       class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Accept</button>
            <a href="" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
    <!-- /.card-body -->
</div>
<!-- /.card -->
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
