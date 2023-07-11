@extends('layouts.base.master')

@section('content')
    <div class="be-page-outer">
        <div class="be-header-sub">
            @include('layouts.partials.subheader-v1')
            <div class="be-header-sub-option">
                <button class="btn btn-icon btn-rounded btn-primary"><i class="ri-add-line"></i> Add
                    Employee</button>
            </div>
        </div>

        <div class="be-page">
            <div class="be-page-body">
                <div class="card app-card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Quill Editor</h5>
                        </div>

                        <div class="d-flex g-4">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('after-js')
    <script src="{{ asset('assets/js/admin/beData.js') }}"></script>
    <script>
        // sweet Alert
        $(document).on("click", ".confirm_button", function(e) {
            e.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, keep it",
            }).then((result) => {
                if (result.isConfirmed) {
                    toastr.success('Have fun storming the castle!', 'Miracle Max Says')
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire("Cancelled", "Date is safe", "error");
                }
            });
        });

        // Toast
        $(document).on("click", ".confirm_toast", function(e) {
            e.preventDefault();
            toastr.success('Have fun storming the castle!', 'Miracle Max Says')
        });
    </script>
@endpush
