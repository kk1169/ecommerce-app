@extends('layouts.base.master')

@section('content')
    <div class="be-page-outer">
        <div class="be-header-sub">
            @include('layouts.partials.subheader-v1')
            <div class="be-header-sub-option">
                {{-- <button type="button" class="btn btn-icon btn-rounded btn-secondary"><i
                        class="ri-arrow-left-line"></i>Back</button> --}}
                {{-- <button type="button" class="btn btn-icon btn-rounded btn-primary"><i class="ri-save-line"></i> Save</button> --}}
                <button class="btn btn-icon btn-rounded btn-primary"><i class="ri-add-line"></i> Add
                    Employee</button>
            </div>
        </div>

        <div class="be-page">
            <div class="be-page-body">
                <div class="card app-card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Employees List</h5>
                            {{-- <div class="card-options">
                                <button class="btn btn-icon btn-rounded btn-primary"><i class="ri-add-line"></i> Add
                                    Employee</button>
                            </div> --}}
                        </div>

                        <table class="table app-table" id="user_datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>extn</th>
                                    <th>start_date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('after-js')
    <script src="{{ asset('assets/js/admin/beData.js') }}"></script>
    <script>
        var context = {};
        new beData();
    </script>
@endpush
