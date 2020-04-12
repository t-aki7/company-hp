@extends('layouts.app')

@section('content')

    <h1 class="text-center">INDEX</h1>
    
    @if (count($contacts) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>content</th>
                    <th>time</th>
                </tr>    
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td class="word-wrapping2">{{ $contact->name }}</td>
                    <td class="word-wrapping2">{{ $contact->email }}</td>
                    <td class="word-wrapping2">{{ $contact->content }}</td>
                    <td>{{ $contact->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    
    
@endsection