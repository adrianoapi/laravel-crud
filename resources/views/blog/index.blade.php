@extends('master')
@section('title', 'Crud - SHOW')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Administração</h1>
    </div>
</div>
<div class="row">
    <table class="table table-striped">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <a href="{{route('blog.create')}}" class="btn btn-info pull-right">Create New Data</a><br><br>
        @foreach($blogs as $blog)
        <tr>
            <td>{{$blog->id}}</td>
            <td>{{$blog->title}}</td>
            <td>{{$blog->description}}</td>
            <td>
                <form class="" action="{{route('blog.destroy',$blog->id)}}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary">Edit</a>
                    <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data');" name="name" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@stop