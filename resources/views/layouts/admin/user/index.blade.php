@extends('components.user.app')

@section('content')
<div class="jumbotron text-center">
    <div class="row justify-content-center">
        <div class="col">
            <a href="{{route('input-user')}}">
                <button type="button" class="btn btn-primary">Input User    </button>
            </a>
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="tabel-nilai">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th>User A</th>
                                <th>user_a</th>
                                <th>Admin</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <th>User B</th>
                                <th>user_b</th>
                                <th>User</th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection