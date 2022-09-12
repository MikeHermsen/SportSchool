@extends('layouts.app')

@section('content')



    <table>
        <th>
            ID
        </th>
        <th>
            INFO
        </th>

        @foreach ($users as $user)
            <td>
                {{ $user->id }}
            </td>
            <td>
                {{ $user->name }}
                {{ $user->email }}
                {{ $user->abbenement_type }}
                {{ $user->role }}
                {{ $user->created_at }}
            </td>
        @endforeach
    </table>



@endsection
