@extends('admin.master')

@section('title')
    Edit Student Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        @if(Session::has('message'))
                            <h4 class="text-center text-capitalize text-success">{{Session::get('message')}}</h4>
                        @endif
                        <form action="{{route('student.update', ['id' => $student->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mt-3">
                                <label for="name" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" id="name" class="form-control" value="{{$student->name}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="email" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" id="email" class="form-control" value="{{$student->email}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="phone" class="col-md-4">Mobile</label>
                                <div class="col-md-8">
                                    <input type="number" name="phone" id="phone" class="form-control" value="{{$student->phone}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="address" class="col-md-4">Address</label>
                                <div class="col-md-8">
                                    <textarea name="address" id="address" cols="42" rows="5" class="form-control">{{$student->address}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="district" class="col-md-4">District</label>
                                <div class="col-md-8">
                                    <select name="district" id="district" class="form-control">
                                        <option value="" disabled><--select a district--></option>
                                        <option value="dhaka" {{$student->district == 'dhaka' ? 'selected' : ''}}>Dhaka</option>
                                        <option value="chittagong" {{$student->district == 'chittagong' ? 'selected' : ''}}>Chittagong</option>
                                        <option value="rajshahi" {{$student->district == 'rajshahi' ? 'selected' : ''}}>Rajshahi</option>
                                        <option value="sylhet" {{$student->district == 'sylhet' ? 'selected' : ''}}>Sylhet</option>
                                        <option value="khulna" {{$student->district == 'khulna' ? 'selected' : ''}}>Khulna</option>
                                        <option value="mymensingh" {{$student->district == 'mymensingh' ? 'selected' : ''}}>Mymensingh</option>
                                        <option value="noakhali" {{$student->district == 'noakhali' ? 'selected' : ''}}>Noakhali</option>
                                        <option value="barisal" {{$student->district == 'barisal' ? 'selected' : ''}}>Barisal</option>
                                        <option value="chandpur" {{$student->district == 'chandpur' ? 'selected' : ''}}>Chandpur</option>
                                        <option value="rangpur" {{$student->district == 'rangpur' ? 'selected' : ''}}>Rangpur</option>
                                        <option value="dinajpur" {{$student->district == 'dinajpur' ? 'selected' : ''}}>Dinajpur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Gender</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="gender" value="male" {{$student->gender == 'male' ? 'checked' : ''}}>Male</label>
                                    <label for=""><input type="radio" name="gender" value="female" {{$student->gender == 'female' ? 'checked' : ''}}>Female</label>
                                    <label for=""><input type="radio" name="gender" value="other" {{$student->gender == 'other' ? 'checked' : ''}}>Other</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="dateOfBirth" class="col-md-4">Date of birth</label>
                                <div class="col-md-8">
                                    <input type="date" name="date_of_birth" id="dateOfBirth" class="form-control" value="{{$student->date_of_birth}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" >
                                    <img src="{{asset($student->image)}}" alt="" style="height: 100px; width: 100px;">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Subjects</label>
                                <div class="col-md-8">
                                    <label for=""><input type="checkbox" name="subjects[]" value="bangla" {{in_array('bangla', $subjects) ? 'checked' : ''}}>Bangla</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="english" {{in_array('english', $subjects) ? 'checked' : ''}}>English</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="math" {{in_array('math', $subjects) ? 'checked' : ''}}>Math</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="physics" {{in_array('physics', $subjects) ? 'checked' : ''}}>Physics</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="chemistry" {{in_array('chemistry', $subjects) ? 'checked' : ''}}>Chemistry</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="biology" {{in_array('biology', $subjects) ? 'checked' : ''}}>Biology</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="history" {{in_array('history', $subjects) ? 'checked' : ''}}>History</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success w-100">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
