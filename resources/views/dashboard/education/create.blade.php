@extends('dashboard.dashindex')

@section('konten')
    <div class="pb-3"><a href="{{ route("education.index") }}" class="btn btn-secondary">
            Back</a>
    </div>
    <form action="{{ route('education.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">School Name</label>
            <input
                type="text"
                class="form-control font control-sm"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="School name here"
                value="{{ Session::get('judul') }}"
            />
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Faculty</label>
            <input
                type="text"
                class="form-control font control-sm"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="Faculty name here"
                value="{{ Session::get('info1') }}"
            />
        </div>
        <div class="mb-3">
            <label for="info2" class="form-label">Major</label>
            <input
                type="text"
                class="form-control font control-sm"
                name="info2"
                id="info2"
                aria-describedby="helpId"
                placeholder="Major name here"
                value="{{ Session::get('info2') }}"
            />
        </div>
        <div class="mb-3">
            <label for="info3" class="form-label">GPA</label>
            <input
                type="text"
                class="form-control font control-sm"
                name="info3"
                id="info3"
                aria-describedby="helpId"
                placeholder="GPA here"
                value="{{ Session::get('info3') }}"
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
        <button class="btn btn-primary" name="save" type="submit">SAVE</button>
    </form>
@endsection