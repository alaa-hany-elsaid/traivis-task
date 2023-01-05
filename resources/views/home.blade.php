@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--                <div class="d-flex justify-content-between align-items-center mb-4">--}}
{{--                    <h4 class="text-dark mb-0">comments </h4>--}}
{{--                </div>--}}
{{--                <div class="card mb-3">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="d-flex flex-start">--}}
{{--                            <img class="rounded-circle shadow-1-strong me-3"--}}
{{--                                 src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="40"--}}
{{--                                 height="40" />--}}
{{--                            <div class="w-100">--}}
{{--                                <div class="d-flex justify-content-between align-items-center mb-3">--}}
{{--                                    <h6 class="fw-bold mb-0">--}}
{{--                                        <span class="text-dark ms-2">Hmm, This poster looks cool</span>--}}
{{--                                    </h6>--}}
{{--                                    <p class="mb-0">2 days ago</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex justify-content-between align-items-center">--}}
{{--                                    <p class="small mb-0" style="color: #aaa;">--}}
{{--                                        <a  data-bs-toggle="collapse" href="#c-1" role="button" aria-expanded="false" class="link-grey">Reply</a> •--}}
{{--                                        <a  data-bs-toggle="collapse" href="#c-2" role="button" aria-expanded="false" class="link-grey">Replies</a>--}}
{{--                                    </p>--}}
{{--                                    <div class="d-flex flex-row">--}}
{{--                                        <i class="fas fa-star text-warning me-2"></i>--}}
{{--                                        <i class="far fa-check-circle" style="color: #aaa;"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div   class="card-footer">--}}
{{--                        <div class="row g-3 mb-4 collapse" id="c-1">--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="text" class="form-control" placeholder="replay" aria-label="City">--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <button type="submit" class="btn btn-primary">Replay</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="collapse" id="c-2">--}}
{{--                            <div class="card mb-3">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex flex-start">--}}
{{--                                        <img class="rounded-circle shadow-1-strong me-3"--}}
{{--                                             src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(21).webp" alt="avatar" width="40"--}}
{{--                                             height="40" />--}}
{{--                                        <div class="w-100">--}}
{{--                                            <div class="d-flex justify-content-between align-items-center mb-3">--}}
{{--                                                <h6 class="text-primary fw-bold mb-0">--}}
{{--                                                    the_sylvester_cat--}}
{{--                                                    <span class="text-dark ms-2">Loving your work and profile! </span>--}}
{{--                                                </h6>--}}
{{--                                                <p class="mb-0">3 days ago</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                                <p class="small mb-0" style="color: #aaa;">--}}
{{--                                                    <a href="#!" class="link-grey">Remove</a> •--}}
{{--                                                    <a href="#!" class="link-grey">Reply</a> •--}}
{{--                                                    <a href="#!" class="link-grey">Translate</a>--}}
{{--                                                </p>--}}
{{--                                                <div class="d-flex flex-row">--}}
{{--                                                    <i class="far fa-check-circle text-primary"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card-footer">--}}
{{--                                    <div class="d-flex justify-content-between align-items-center mb-4">--}}
{{--                                        <h4 class="text-dark mb-0">comments </h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="card mb-3">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="d-flex flex-start">--}}
{{--                                                <img class="rounded-circle shadow-1-strong me-3"--}}
{{--                                                     src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(21).webp" alt="avatar" width="40"--}}
{{--                                                     height="40" />--}}
{{--                                                <div class="w-100">--}}
{{--                                                    <div class="d-flex justify-content-between align-items-center mb-3">--}}
{{--                                                        <h6 class="text-primary fw-bold mb-0">--}}
{{--                                                            the_sylvester_cat--}}
{{--                                                            <span class="text-dark ms-2">Loving your work and profile! </span>--}}
{{--                                                        </h6>--}}
{{--                                                        <p class="mb-0">3 days ago</p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="d-flex justify-content-between align-items-center">--}}
{{--                                                        <p class="small mb-0" style="color: #aaa;">--}}
{{--                                                            <a href="#!" class="link-grey">Remove</a> •--}}
{{--                                                            <a href="#!" class="link-grey">Reply</a> •--}}
{{--                                                            <a href="#!" class="link-grey">Translate</a>--}}
{{--                                                        </p>--}}
{{--                                                        <div class="d-flex flex-row">--}}
{{--                                                            <i class="far fa-check-circle text-primary"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
