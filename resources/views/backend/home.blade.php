@extends('layouts.app')
@section('content')
   <div class="container mt-5">
       <div class="row justify-content-center">
           <div class="col-8">
               <div class="card mt-3">
                   <div class="card-header bg-primary">
                       <div class="row">
                           <div class="col-10">
                               <h4 class="text-light">Contact List</h4>
                           </div>
                           <div class="col-2">
                               <a class="btn btn-success" href="{{ route('contact.index') }}">Add <i class="fas fa-plus"></i></a>
                           </div>
                       </div>
                   </div>
                   <div class="card-body">
                       <table class="table mt-5">
                           <thead>
                           <tr>
                               <th scope="col">#</th>
                               <th scope="col">Name</th>
                               <th scope="col">Email</th>
                               <th scope="col">Phone</th>
                           </tr>
                           </thead>
                           <tbody>
                           @foreach($contacts as $contact)
                               <tr>
                                   <th scope="row">{{$contact->id}}</th>
                                   <td>{{ $contact->name }}</td>
                                   <td>{{ $contact->email }}</td>
                                   <td>{{ $contact->phone }}</td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
@endsection