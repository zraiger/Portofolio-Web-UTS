@extends('dashboard.dashindex')

@section('konten')
    <form action="{{ route('settingPage.update') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2">
                <h4>About</h4>
            </label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_pabout">
                    <option value="">-Choose-</option>
                    @foreach ($datapage as $item)
                        <option value="{{ $item->id }}" {{ get_metaval('_pabout') == $item->id ? 'selected' : '' }}>
                            {{ $item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">
                <h4>Interest</h4>
            </label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_pinter">
                    <option value="">-Choose-</option>
                    @foreach ($datapage as $item)
                        <option value="{{ $item->id }}" {{ get_metaval('_pinter') == $item->id ? 'selected' : '' }}>
                            {{ $item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">
                <h4>Award</h4>
            </label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_paward">
                    <option value="">-Choose-</option>
                    @foreach ($datapage as $item)
                        <option value="{{ $item->id }}" {{ get_metaval('_paward') == $item->id ? 'selected' : '' }}>
                            {{ $item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary" name="save" type="submit">SAVE</button>
    </form>
@endsection
