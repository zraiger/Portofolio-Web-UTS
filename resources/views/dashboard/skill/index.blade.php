@extends('dashboard.dashindex')

@section('konten')
    <form action="{{ route('skill.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Programming Language & Tools</label>
            <input type="text" class="form-control font control-sm skill" name="_lang" id="judul"
                aria-describedby="helpId" placeholder="Programming language here" value="{{ get_metaval('_lang') }}" />
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Workflow</label>
            <textarea class="form-control summernote" rows="5" name="_workflow">{{ get_metaval('_workflow') }}</textarea>
        </div>
        <button class="btn btn-primary" name="save" type="submit">SAVE</button>
    </form>
@endsection

@push('child-scripts')
    <script>
        $(document).ready(function() {
            $('.skill').tokenfield({
                autocomplete: {
                    source: [{!! $skill !!}],
                    delay: 100
                },
                showAutocompleteOnFocus: true
            });
        });
    </script>
@endpush
