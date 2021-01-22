@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="text-light">Contact Us</h4>
                        </div>
                        <div class="col-2">
                            <a href="{{ route('index') }}" class="btn btn-info text-light"><i class="fas fa-undo"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="form-group col-8">
                                <label class="form-check-label"> Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter Name">
                                @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                            </div>
                            <div class="form-group col-8">
                                <label class="form-check-label mt-2"> Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter Name Email">
                                @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                            </div>
                            <div class="form-group col-8 mt-2">
                                <label class="form-check-label"> Phone Number</label>
                                <input class="form-control @error('phone') is-invalid @enderror" type="phone" name="phone" placeholder="Enter Number">
                                @error('phone') <span class="invalid-feedback"> <strong>{{ $message }}</strong></span> @enderror
                            </div>
                            <div class="form-group col-2 mt-2">
                                <button class="form-control btn btn-success btn-md" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
