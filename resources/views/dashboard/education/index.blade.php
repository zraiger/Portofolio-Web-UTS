@extends('dashboard.dashindex')

@section('konten')
    <p class="card-title">Education History</p>
    <div class="pb-3"><a href="{{ route('education.create') }}" class="btn btn-primary">+ Add your education history</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No.</th>
                    <th>School Name</th>
                    <th>Faculty</th> 
                    <th>Major</th> 
                    <th>GPA</th> 
                    <th>Starting Date</th>
                    <th>Ending Date</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->info1 }}</td>
                        <td>{{ $item->info2 }}</td>
                        <td>{{ $item->info3 }}</td>
                        <td>{{ $item->tgl_str_id }}</td>
                        <td>{{ $item->tgl_end_id }}</td>
                        <td>
                            <a href='{{ route('education.edit', $item->id) }}' class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('This will delete the data')" action="{{ route('education.destroy', $item->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
