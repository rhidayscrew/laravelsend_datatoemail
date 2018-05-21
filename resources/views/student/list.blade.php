@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{url('sendExam')}}" method="post">
  @csrf
   <div class="panel panel-default">
       <div class ="panel-heading">Student List</div>

       <div class="panel-body">
         <table class="table table-border table-condensed table-hover">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Sex</th>
                     <th>Phone</th>
                     <th>Email</th>
                 </tr>
             </thead>

             <tbody>
               @foreach ($student as $key =>$st)
               <tr>
                   <td>
                       <input type="checkbox" name="id[]" value="{{ $st->id }}">
                   </td>
                   <td>{{ $st->id }}</td>
                   <td>{{ $st->name}}</td>
                   <td>{{ $st->sex }}</td>
                   <td>{{ $st->phone }}</td>
                   <td>{{ $st->email }}</td>
               </tr>
               @endforeach
             </tbody>

         </table>
           
       </div>

       <div class="panel-footer">
           <input type="submit" class = "btn btn-primary" value="Send Example">
       </div>
    </div>
    </form> 
</div>
@endsection
