@extends('master')
@section('title', 'Crud - SHOW')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Administração</h1>
    </div>
</div>
<div class="row">
    <table class="table table-striped table-responsive">
        <tr>
            <th class="col-md-1">ID</th>
            <th class="col-md-2">Title</th>
            <th class="col-md-6">Description</th>
            <th class="col-md-3">Actions</th>
        </tr>
        <a href="{{route('blog.create')}}" class="btn btn-info pull-right">Nova notícia</a><br><br>
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
                    <input type="submit" class="btn btn-danger" onclick="return confirm('Deseja excluir o item {{$blog->id}}');" name="name" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@stop