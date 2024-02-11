@extends('backend.layouts.master')
@section('title')
    Role Page - Admin Panel
@endsection

@section('styles')
@endsection

@section('content')
    <div class="content-wrapper" style="min-height: 1302.12px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ @$title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">{{ @$title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ @$title }}</h3>
                                <div class="card-tools">
                                    <form method="GET" action="{{ route('admin.roles.index') }}">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="search" class="form-control float-right"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Permissions</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @dd($collection); --}}
                                        @forelse ($roles as $key => $role)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ lowercase($role->name) }}</td>
                                                <td>
                                                    @php $count = 0; @endphp

                                                    @foreach ($role->permissions as $perm)
                                                        <button class="btn btn-outline-primary m-1">
                                                            {{ $perm->name }}
                                                        </button>
                                                        @if ($count == 4)
                                                            <br>
                                                            @php $count = 0; @endphp
                                                        @else
                                                            @php $count++; @endphp
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @if (Auth::guard('admin')->user()->can('admin.edit'))
                                                        <a class="btn btn-danger btn-sm"
                                                            href="{{ route('admin.roles.destroy', $role->id) }}"
                                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">
                                                            <i class="fas fa-trash-alt text-white"></i>
                                                        </a>
                                                        <form id="delete-form-{{ $role->id }}"
                                                            action="{{ route('admin.roles.destroy', $role->id) }}"
                                                            method="POST" style="display: none;">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                    @endif
                                                    @if (Auth::guard('admin')->user()->can('admin.edit'))
                                                        <a class="btn btn-warning btn-sm"
                                                            href="{{ route('admin.roles.edit', $role->id) }}">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr width="100%" class="text-center">
                                                <td colspan="4" class="text-danger text-bold">
                                                    No data found
                                                </td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">

                                @if ($roles->lastPage() > 1)
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        {{-- Previous Page Link --}}
                                        @if ($roles->onFirstPage())
                                            <li class="page-item disabled">
                                                <span class="page-link">«</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $roles->previousPageUrl() }}">«</a>
                                            </li>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @for ($i = 1; $i <= $roles->lastPage(); $i++)
                                            <li class="page-item {{ $roles->currentPage() == $i ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $roles->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        {{-- Next Page Link --}}
                                        @if ($roles->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $roles->nextPageUrl() }}">»</a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <span class="page-link">»</span>
                                            </li>
                                        @endif
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
@endsection
