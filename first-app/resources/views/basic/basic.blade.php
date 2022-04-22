<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="{{ route('basic.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" name="name" placeholder="enter your name" id="">
                    @error('name')
                        <div class="alert alert-danger mt-1 mb-1">
                            {{ $message }}
                        </div>
                    @enderror
                    {{-- <button type="submit" class="btn btn-primary ml-3">Submit</button> --}}
                </div>

                <div class="form-group">
                    <label for="">email</label>
                    <input type="text" name="email" placeholder="enter your email" id="">
                    @error('email')
                        <div class="alert alert-danger mt-1 mb-1">
                            {{ $message }}
                        </div>

                    @enderror
                   
                    
                </div>
                {{-- <input type="date" name="dob" id=""> --}}
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </form>
        </div>
    </div>
    
    
</body>
</html>