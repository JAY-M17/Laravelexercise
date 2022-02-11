@extends('layouts.body')
@section('content')
    <section class="py-5 container">
        <h3>Authors Book Table</h3>
        <a href="home" class="btn btn-sm btn-secondary">back</a>
        <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#assignBook">Assign new book</a>
        <table class="table table-hover mt-2">
            <tr class="table-dark">
                <td>ID</td>
                <td>Authors</td>
                <td>Books</td>
                <td>Configure</td>
            </tr>
            @if (count($assign)>0)
                <?php $count = 0;?>
                @foreach ($assign as $assign)
                   <tr>
                    <td>{{$count+=1}}</td>
                    <td>{{$assign->first_name . ' ' . $assign->last_name}}</td>
                    <td>{{$assign->title}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$assign->id}}">Edit</a>
                        @include('modals.editAuthorBook')
                        <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#del{{$assign->id}}">Delete</a>
                        @include('modals.deleteAuthorBook')
                    </td>
                </tr> 
                @endforeach
            @endif
        </table>
    </section>
    @include('modals.addAuthorBook')
@endsection