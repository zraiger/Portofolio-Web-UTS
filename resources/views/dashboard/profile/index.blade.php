@extends('dashboard.dashindex')

@section('konten')
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">
            <div class="col-5">
                <h3>Profile</h3>
                @if (get_metaval('_foto'))
                    <img style="max-width:100px;max-height:100px" src="{{ asset('foto') . '/' . get_metaval('_foto') }}">
                @endif
                <div class="mb-3">
                    <label for="_foto" class="form-label">Photo</label>
                    <input type="file" class="form-control form-control-sm" name="_foto" id="_foto" />
                </div>
                <div class="mb-3">
                    <label for="_kota" class="form-label">City</label>
                    <input type="text" class="form-control form-control-sm" name="_kota" id="_kota" />
                </div>
                <div class="mb-3">
                    <label for="_prov" class="form-label">Province</label>
                    <input type="text" class="form-control form-control-sm" name="_prov" id="_prov" />
                </div>
                <div class="mb-3">
                    <label for="_nohp" class="form-label">Phone Number</label>
                    <input type="text" class="form-control form-control-sm" name="_nohp" id="_nohp" />
                </div>
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" name="_email" id="_email"
                        value="{{ get_metaval('_email') }}" />
                </div>
            </div>
            <div class="col-5">
                <h3>Social Media Account</h3>
                <div class="mb-3">
                    <label for="_ig" class="form-label">Instagram</label>
                    <input type="text" class="form-control form-control-sm" name="_ig" id="_ig" />
                </div>
                <div class="mb-3">
                    <label for="_twt" class="form-label">X / Twitter</label>
                    <input type="text" class="form-control form-control-sm" name="_twt" id="_twt" />
                </div>
                <div class="mb-3">
                    <label for="_lin" class="form-label">LinkedIn</label>
                    <input type="text" class="form-control form-control-sm" name="_lin" id="_lin" />
                </div>
                <div class="mb-3">
                    <label for="_git" class="form-label">GitHub</label>
                    <input type="text" class="form-control form-control-sm" name="_git" id="_git" />
                </div>
            </div>
        </div>

        <button class="btn btn-primary" name="save" type="submit">SAVE</button>
    </form>
@endsection
