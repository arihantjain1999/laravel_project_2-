<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>CRUD Operation Using Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .container{
            position: absolute;
            top: 50% ;
            left : 50%; 
            transform : translate(-50%,-50%);
        }
        </style>
     </head>
    <body>
        <div class="container mt-2">
    <center>
        <h1>All Data</h1>
    </center>
        
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                <table class="table table-bordered shadow text-center table-striped">
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <!-- <th>DOB</th> -->
                        <!-- <th>Age</th> -->
                        <!-- <th>Gender</th> -->
                        <th>Phone No.</th>
                        <th>Email</th>
                        <!-- <th>Hobby</th> -->
                        <!-- <th>Description</th> -->
                        <th>Delete</th>
                        <th>Edit</th>
                        <th>Show</th>
                    </tr>
            
            @foreach ($person as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->name }}</td>
                    <!-- <td>{{ $person->dob }}</td> -->
                    <!-- <td>{{ $person->age }}</td> -->
                    <!-- <td>{{ $person->gender }}</td> -->
                    <td>{{ $person->phoneNo }}</td>
                    <td>{{ $person->email }}</td>
                    <!-- <td>{{ $person->hobby }}</td> -->
                    <!-- <td>{{ $person->description }}</td> -->
                        <form action="{{ route('person.destroy',$person->id) }}" method="Post">
                        @csrf
                            @method('DELETE')
                            <td>
                                <button type="submit" class="btn btn-danger">Delete</button>    
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('person.edit',$person->id) }}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('person.show',$person->id) }}">Show</a>    
                            </td>
                            </form>
                </tr>
            @endforeach
                
        </table>
        
        <div class="mb-2">
                        <a class="btn btn-primary" href="{{ route('person.create') }}"> Create Person Details</a>
        </div>
    </body>
</html>