@extends('layouts.base.master')

@section('content')
    <div class="be-page-profile">
        <div class="be-page-profile-bg">
            <img src="{{ asset('assets/media/bg/colorful-ge1f320b93_1280.png') }}" alt="" />
        </div>
        <div class="be-page-profile-img">
            <img src="{{ asset('assets/media/avatars/blank.png') }}" alt="" class="img-thumbnail" />
        </div>
        <div class="be-page-profile-nav"></div>
    </div>
    <div class="be-page-outer">
        {{-- <div class="be-header-sub">
            @include('layouts.partials.subheader-v1')
            <div class="be-header-sub-option">
            </div>
        </div> --}}

        <div class="be-page">
            <div class="be-page-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card app-card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5>Navigation</h5>
                                </div>
                                <div class="nav flex-column nav-pills gap-2" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true"><i class="ri-user-line"></i>
                                        Profile Information</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false"><i class="ri-lock-line"></i>
                                        Security</button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false"><i class="ri-mail-line"></i>
                                        Messages</button>
                                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-settings" type="button" role="tab"
                                        aria-controls="v-pills-settings" aria-selected="false"><i
                                            class="ri-settings-4-line"></i> Settings</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card app-card">
                            <div class="card-body">
                                <div class="tab-content" id="v-pills-tabContent">

                                    {{-- Profile Information --}}
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab" tabindex="0">
                                        <div class="card-title">
                                            <h5>Profile Information</h5>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="firstName" class="form-label">First
                                                            Name</label>
                                                        <input type="email" class="form-control" id="firstName"
                                                            placeholder="First Name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="lastName" class="form-label">Last
                                                            Name</label>
                                                        <input type="email" class="form-control" id="lastName"
                                                            placeholder="Last Name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email
                                                            Address</label>
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="Email Address">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1"
                                                            class="form-label">Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword1">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Profile Information --}}

                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab" tabindex="0">
                                        <div class="card-title">
                                            <h5>Security</h5>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab" tabindex="0">
                                        <div class="card-title">
                                            <h5>Message</h5>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                        aria-labelledby="v-pills-settings-tab" tabindex="0">
                                        <div class="card-title">
                                            <h5>Settings</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
