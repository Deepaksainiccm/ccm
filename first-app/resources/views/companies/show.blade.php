<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-12 mx-3">

            <div class="pull-left">
                <h2>Company profile</h2>
            </div>

            <table class="table " >

                <tr>
                    <th>S.no</th>
                    <td>{{$company->id}}</td>
                </tr>

                <tr>
                    <th>Company name</th>
                    <td>{{$company->name}}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{$company->email}}</td>
                </tr>

                <tr>
                    <th>Address</th>
                    <td>{{$company->address}}</td>
                </tr>

            </table>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('companies.index') }}" enctype="multipart/form-data">
                    Back</a>
            </div>
            
        </div>
    </div>
</body>
</html>