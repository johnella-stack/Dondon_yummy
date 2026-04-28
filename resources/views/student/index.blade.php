@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Student List</h2>
    <table id="student-table" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Age</th>
                <th>Created At</th>
                <th>Created</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@section('scripts')
<link rel="stylesheet" href="//cdn.datatables.net/2.3.7/css/dataTables.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/2.3.7/js/dataTables.min.js"></script>

<script>
$(function() {
    $('#student-table').DataTable({
        processing: true,
        serverSide: true,
      ajax: "{{ route('student.data') }}",
     columns: [
    { data: 'id' },
    { data: 'name' },
    { data: 'course' },
    { data: 'year_level' },
    { data: 'age' },
    { data: 'created_at' }
]
    });
});
</script>
@endsection
