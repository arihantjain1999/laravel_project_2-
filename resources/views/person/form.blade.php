<div class="row mx-5 px-5">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Full Name:</strong>
                            <input type="text" name="name" class="form-control" value="{{$person->name??''}}" placeholder="Full Name">
                            @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>DOB:</strong>
                            <input type="date" name="dob" class="form-control" value="{{$person->dob??''}}" placeholder="Date Of Birth">
                            @error('dob')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Age:</strong>
                            <input type="number" name="age" class="form-control" placeholder="Age" value="{{$person->age??''}}">
                            @error('age')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Phone No.:</strong>
                            <input type="tel" name="phoneNo" class="form-control" value="{{$person->phoneNo??''}}" placeholder="Enter number">
                            @error('phoneNo')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="email" name="email" class="form-control" value="{{$person->email??''}}" placeholder="Email">
                            @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Gender:</strong>
                            
                            <input class="form-check-input" type="radio" name="gender" id="Male" value="male" @if($person->gender=='male' ? 'male' : ' ') checked @endif>
                            <label class="form-check-label" for="Male">
                                Male
                            </label>
                            <input class="form-check-input" type="radio" name="gender" id="Female" value="female"@if($person->gender=='female' ? 'female' : ' ') checked @endif>
                            <label class="form-check-label" for="Female">
                                Female
                            </label>
                            
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Hobby:</strong>
                            
                                <input class="form-check-input" name="hobby" type="checkbox" value="games" id="games" value="Games" @if($person->hobby??''=='games') checked @endif>
                                <label class="form-check-label" for="games">
                                    Games
                                </label>
                            
                            
                                <input class="form-check-input" name="hobby" type="checkbox" value="art" id="art" value="Art" @if($person->hobby??''=='art') checked @endif>
                                <label class="form-check-label" for="art">
                                    Art
                                </label>
                         
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <input type="text" name="description" class="form-control" placeholder="Enter In Details" value="{{$person->description??''}}">
                            @error('description')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 my-2">
                        <button type="submit" class="btn btn-primary ml-3">Submit</button>
                    </div>
                </div>