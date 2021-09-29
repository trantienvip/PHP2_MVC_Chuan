@extends('client-layout.main')
@section('content')
<style>
    table, td, th {
        border-collapse: collapse;
        border: 1px solid #333;
        padding: 15px;
    }
    table{
        margin: 20px 0;
        width: 100%;
    }
</style>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>Giới tính</th>
        <th>birth_date</th>
        <th>address</th>
    </thead>
    <tbody>
        @foreach ($users as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->avatar }}</td>
                <td>
                    @if ($u->gender == 1)
                    Nam
                    @else
                    Nữ
                    @endif
                </td>
                <td>{{ $u->birth_date }}</td>
                <td>{{ $u->address }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection