<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>CRUD Operation Using Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .container{
            background-color: #D3D3D3;
            border-radius:10px;
            padding:2%;
            width : 30%;
            border:2px solid grey;
            position: absolute;
            top: 50% ;
            left : 50%; 
            transform : translate(-50%,-50%);
        }
        </style>

    </head>
    <body>
        <div class="container mt-2">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('person.update',$person->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                <center>
                    <div class="form-group">
                        <h1>{{$person->name}}  details</h1>
                    </div>
                </center>        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>DOB: {{$person->dob}}</strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Age: {{$person->age}}</strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Gender:
                                @if($person->gender=='Male') Male @endif
                                @if($person->gender=='Female') Female @endif
                            </strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Phone No.: {{$person->phoneNo}}</strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email: {{$person->email}}</strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Hobby:
                                @if($person->hobby=='games') Games @endif
                                @if($person->hobby=='art') Art @endif
                            </strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description: {{$person->description}}</strong>
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{ route('person.destroy',$person->id) }}" method="Post" class="mt-2">
                        @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>    
                            <a class="btn btn-success" href="{{ route('person.edit',$person->id) }}">Edit</a>
                            <a class="btn btn-primary" href="{{ route('person.index') }}" enctype="multipart/form-data"> Back</a>
                        </form>
        </div>
    </body>
</html>