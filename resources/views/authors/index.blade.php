@extends('layouts.body')
@section('content')
    <section class="py-5 container">
        <h3>Authors Table</h3>
        <a href="home" class="btn btn-sm btn-secondary">back</a>
        <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add new author</a>
        <table class="table table-hover mt-2">
            <tr class="table-dark">
                <td>ID</td>
                <td>Firstname</td>
                <td>Lastname</td>
                <td>Configure</td>
            </tr>
            @if (count($authors)>0)
                <?php $count=0; ?>
                @foreach ($authors as $author)
                    <tr>
                        <td>{{$count+=1}}</td>
                        <td>{{$author->first_name}}</td>
                        <td>{{$author->last_name}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$author->id}}">Edit</a>
                            @include('modals.editAuthor')
                            <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#del{{$author->id}}">Delete</a>
                            @include('modals.deleteAuthor')
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
    </section>
    @include('modals.addAuthor')
@endsection