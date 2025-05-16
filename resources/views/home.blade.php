@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card shadow-sm">
                <div class="card-header fw-bold">
                    {{ __('Dashboard') }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ url('/create-ticket') }}" class="btn btn-success rounded">
                            + Create Ticket
                        </a>
                    </div>

                    <table class="table table-hover table-bordered">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Phone</th>
                                <th>Level</th>
                                <th>Message</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $ticket->name }}</td>
                                    <td>{{ $ticket->email }}</td>
                                    <td>{{ $ticket->status }}</td>
                                    <td>{{ $ticket->phone }}</td>
                                    <td>{{ $ticket->level }}</td>
                                    <td>{{ $ticket->msg }}</td>
                                    <td>{{ $ticket->created_at->format('Y-m-d H:i') }}</td>
                                    <td>{{ $ticket->updated_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <a href="{{ url('/edit-ticket/' . $ticket->id) }}" class="btn btn-info btn-sm w-100 mb-1 text-white rounded">
                                            Edit
                                        </a>
                                        <a href="{{ url('/delete-ticket/' . $ticket->id) }}" class="btn btn-danger btn-sm w-100 text-white rounded">
                                            Delete
                                        </a>
                                    </td>
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
