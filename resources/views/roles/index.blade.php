@extends('layouts.master')
@section('title')
    Role List
@endsection
@section('content')
    {{-- breadcrumbs  --}}
@section('breadcrumb')
    @component('components.breadcrumb')
        @slot('li_1')
            Role
        @endslot
        @slot('title')
            Role List
        @endslot
    @endcomponent
@endsection

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p class="mb-0">{{ $message }}</p>
    </div>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="mb-5">
                    <a class="btn btn-warning" href="{{ URL::previous() }}"><i class='bx bx-left-arrow-alt'></i> Back</a>
                    @can('role-create')
                        <a class="btn btn-success" href="{{ route('create-roles') }}"> Create New Role</a>
                    @endcan
                    <a class="btn btn-info" href="{{ url('users') }}"><i class='bx bxs-user-circle'></i> Users List</a>
                </div>

                <table class="table border table-striped mb-5">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Permissions</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                @foreach ($role->permissions->pluck('name') as $permission)
                                    <span class="badge bg-success">{{ $permission }}</span>
                                @endforeach()
                            </td>
                            <td>
                                @if ($role->name !== 'admin')
                                    @can('role-edit')
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                    @endcan
                                    @can('role-delete')
                                        {!! Form::open(['method' => 'GET', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                @else
                                    Not Editable
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{-- Previous Page Link --}}
                        @if ($roles->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link" aria-hidden="true">&laquo;</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $roles->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($roles->getUrlRange(1, $roles->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $roles->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($roles->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $roles->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link" aria-hidden="true">&raquo;</span>
                            </li>
                        @endif
                    </ul>
                </nav>

                {!! $roles->render() !!}
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
