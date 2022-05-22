@extends('layouts.app')
@section('content')
 <!--begin::Content-->
       <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <h5 class="text-dark font-weight-bold my-1 mr-5">
                            {{ Str::title($page->title) }} </h5>
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}" class="text-muted">
                                    Home </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:" class="text-muted">
                                    {{ Str::title($page->title) }} </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{ url($page->link.'/create') }}" class="btn btn-primary font-weight-bolder btn-sm ml-2">
                        <i class="fa fa-plus"></i> Add {{ Str::singular(Str::title($page->title)) }}
                    </a>
                  
                </div>
            </div>
        </div>
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom gutter-b">
                    <div class="card-body data-table-container">
                        {!! Form::open(['id'=>'page-form']) !!}
                        <div class="form-group row">
                            {!! Form::label('search_name', 'Search', ['class' => 'col-form-label col-sm-1']) !!}
                            {!! Form::text('search_name', '' , ['class' => 'form-control col-sm-3 mr-2','placeholder'=>'Search by name'] ) !!}
                            <button type="button" class="btn btn-dark font-weight-bolder" id="page-button">Filter
                            </button>

                        </div>
                        {!! Form::close() !!}
                        <table class="table table-hover table-striped table-bordered data-tables"
                               data-url="{{ $page->link.'/list' }}" data-form="page" data-length="20">
                            <thead>
                            <tr>
                                <th data-orderable="false">Name</th>
                                <th data-orderable="false">Maths</th>
                                <th data-orderable="false">Science</th>
                                <th data-orderable="false">History</th>
                                <th data-orderable="false">Term</th>
                                <th data-orderable="false">Total Marks</th>
                                <th data-orderable="false">Created On</th>
                                <th data-orderable="false">Options</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content-->
@endsection
@push('page-scripts')
    <script>
        var link = '{{ $page->link }}';
    </script>
@endpush
@push('page-styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endpush
@push('page-js')
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
@endpush
