@extends('files.layout')
  
@section('content')
    <div class="row mt-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show File</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('files.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $file->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $file->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>File Attached:</strong>
                <a href="
                {{ url('download?path='. $file->file_path) }}">Download</a>
            </div>
        </div>
    </div>
@endsection