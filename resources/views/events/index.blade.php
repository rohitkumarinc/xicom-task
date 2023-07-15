@extends('layout.layouts')
@section('extra_css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-xl">
                    <!-- Page title -->
                    <div class="page-header d-print-none">
                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Page pre-title -->
                                <h2 class="page-title">
                                    Events List
                                </h2>
                            </div>
                            <div class="col-auto ms-auto d-print-none">
                                <div class="btn-list">
                                    <a href="{{ route('events.create') }}" class="btn-sm btn btn-primary">
                                        Add New Events
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            <div class="col-12">
                                <div class="card" style="padding: 18px;">
                                    <table class="table data-table">
                                        <thead>
                                            <tr>
                                                <th>#id</th>
                                                <th>Name</th>
                                                <th>Created On</th>
                                                <th style="width: 156px;">Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_js')
@endsection
