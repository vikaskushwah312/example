@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="sticky-top mb-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Genius Events</h4>
                </div>
                <div class="card-body">
                  <div id="external-events">

                    <div class="external-event bg-success ui-draggable ui-draggable-handle" style="position: relative;"><a href="{{url('admin/upload-symboll')}}">Upload Symbol</a> </div>

                    <div class="external-event bg-warning ui-draggable ui-draggable-handle" style="position: relative;">Go home</div>

                    <div class="external-event bg-info ui-draggable ui-draggable-handle" style="position: relative;">Do homework</div>

                    <div class="external-event bg-primary ui-draggable ui-draggable-handle" style="position: relative;">Work on UI design</div>

                    <div class="external-event bg-danger ui-draggable ui-draggable-handle" style="position: relative;">Sleep tight</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('js')
@endsection