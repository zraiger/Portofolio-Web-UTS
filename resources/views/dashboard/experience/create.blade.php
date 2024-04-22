@extends('dashboard.dashindex')

@section('konten')
    <div class="pb-3"><a href="{{ route("experience.index") }}" class="btn btn-secondary">
            Back</a>
    </div>
    <form action="{{ route('experience.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Position</label>
            <input
                type="text"
                class="form-control font control-sm"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="Position here"
                value="{{ Session::get('judul') }}"
            />
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Company name</label>
            <input
                type="text"
                class="form-control font control-sm"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="Company name here"
                value="{{ Session::get('info1') }}"
            />
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Starting Date</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_str" placeholder="dd/mm/yyyy" value="{{ Session::get('tgl_str') }}"></div>
                <div class="col-auto">End Date</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_end" placeholder="dd/mm/yyyy"value="{{ Session::get('tgl_end') }}"></div>
            </div>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Description</label>
            <textarea class="form-control summernote" rows="5" name="isi">{{ Session::get('isi') }}</textarea>
        </div>
        <button class="btn btn-primary" name="save" type="submit">SAVE</button>
    </form>
@endsection