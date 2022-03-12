<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{route('property.create')}} --}}
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Property title:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Property Title">
          @if ($errors->has('name'))
          <div class="alert alert-danger">{{ $errors->first('name') }}</div>
          @endif
        </div>
    </form>
</body>
</html>