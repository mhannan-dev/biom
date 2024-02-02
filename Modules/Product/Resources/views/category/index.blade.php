@extends('backend.layouts.master')
@section('title')
    Category - Admin Panel
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
                                    <form method="GET" action="">
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
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @dd($collection); --}}
                                        @forelse ($items as $key => $role)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $role->title }}</td>
                                                <td>Actions</td>
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

                                @if ($items->lastPage() > 1)
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        {{-- Previous Page Link --}}
                                        @if ($items->onFirstPage())
                                            <li class="page-item disabled">
                                                <span class="page-link">«</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $items->previousPageUrl() }}">«</a>
                                            </li>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @for ($i = 1; $i <= $items->lastPage(); $i++)
                                            <li class="page-item {{ $items->currentPage() == $i ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $items->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        {{-- Next Page Link --}}
                                        @if ($items->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $items->nextPageUrl() }}">»</a>
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
