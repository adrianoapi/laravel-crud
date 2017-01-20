@extends('master')
@section('title', 'Crud Laravel Home')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Simples CRUD</h1>
    </div>
</div>
<div class="row">
    <table class="table table-striped">
        <tr>
            <th class="col-md-1">ID</th>
            <th class="col-md-5">Title</th>
            <th class="col-md-6">Description</th>
        </tr>
        @foreach($blogs as $blog)
        <tr>
            <td>{{$blog->id}}</td>
            <td>{{$blog->title}}</td>
            <td>{{$blog->description}}</td>
        </tr>
        @endforeach
    </table>
</div>
@stop