@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<div class="row">
<!-- left column -->
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Symboll</h3>
    </div>
    <form role="form" action="{{url('admin/post-upload-symboll')}}" enctype="multipart/form-data" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="type">Type</label>
          <input type="text" class="form-control" id="type" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="file">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="file" name="file"> 
              <label class="custom-file-label" for="filee">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
</div>
@endsection
@section('js')
@endsection