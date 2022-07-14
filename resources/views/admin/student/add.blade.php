@extends('admin.master')

@section('title')
    Add Student Page
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
                        <form action="{{route('student.add')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mt-3">
                                <label for="name" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="email" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="phone" class="col-md-4">Mobile</label>
                                <div class="col-md-8">
                                    <input type="number" name="phone" id="phone" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="address" class="col-md-4">Address</label>
                                <div class="col-md-8">
                                    <textarea name="address" id="address" cols="42" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="district" class="col-md-4">District</label>
                                <div class="col-md-8">
                                    <select name="district" id="district" class="form-control">
                                        <option value="" disabled><--select a district--></option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="chittagong">Chittagong</option>
                                        <option value="rajshahi">Rajshahi</option>
                                        <option value="sylhet">Sylhet</option>
                                        <option value="khulna">Khulna</option>
                                        <option value="mymensingh">Mymensingh</option>
                                        <option value="noakhali">Noakhali</option>
                                        <option value="barisal">Barisal</option>
                                        <option value="chandpur">Chandpur</option>
                                        <option value="rangpur">Rangpur</option>
                                        <option value="dinajpur">Dinajpur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Gender</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="gender" value="male">Male</label>
                                    <label for=""><input type="radio" name="gender" value="female">Female</label>
                                    <label for=""><input type="radio" name="gender" value="other">Other</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="dateOfBirth" class="col-md-4">Date of birth</label>
                                <div class="col-md-8">
                                    <input type="date" name="date_of_birth" id="dateOfBirth" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" >
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Subjects</label>
                                <div class="col-md-8">
                                    <label for=""><input type="checkbox" name="subjects[]" value="bangla">Bangla</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="english">English</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="math">Math</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="physics">Physics</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="chemistry">Chemistry</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="biology">Biology</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="history">History</label>
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
