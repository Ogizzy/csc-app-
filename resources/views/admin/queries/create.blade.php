@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

<div class="container-fluid px-4">
    <h4 class="mt-4">Add New Query/Misconduct</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('queries.index') }}">Queries & Misconduct</a></li>
        <li class="breadcrumb-item active">Add New</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fadeIn animated bx bx-error"></i>
            New Query/Misconduct Information
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('queries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="employee_id" class="form-label">Employee <span class="text-danger">*</span></label>
                        <select class="form-select select2" id="employee_id" name="employee_id" required>
                            <option value="">Select Employee</option>
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }}" {{ old('employee_id') == $employee->id ? 'selected' : '' }}>
                                    {{ $employee->employee_number }} - {{ $employee->surname }}, {{ $employee->first_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="date_issued" class="form-label">Date Issued <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="date_issued" name="date_issued" value="{{ old('date_issued') }}" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="query_title" class="form-label">Query/Misconduct Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="query_title" name="query_title" value="{{ old('query_title') }}" placeholder="e.g., Late Arrival, Unauthorized Absence, Policy Violation" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="query" class="form-label">Query/Misconduct Details <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="query" name="query" rows="5" placeholder="Provide detailed description of the query or misconduct..." required>{{ old('query') }}</textarea>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="supporting_document" class="form-label">Supporting Document</label>
                        <input type="file" class="form-control" id="supporting_document" name="supporting_document">
                        <div class="form-text" style="color: red">Upload PDF, DOC, DOCX, JPG, JPEG, or PNG files (max 10MB)</div>
                    </div>
                </div>
               
                <div class="row mt-4">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            <i class="lni lni-save"></i> Submit Query Record
                        </button>
                        <a href="{{ route('queries.index') }}" class="btn btn-secondary ms-2">
                            <i class="lni lni-cross-circle"></i> Query History
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>



<script>
    $(document).ready(function() {
        $('.select2').select2({
            theme: 'bootstrap4',
            placeholder: "Select an option",
            allowClear: true
        });
    });
</script>
@endsection