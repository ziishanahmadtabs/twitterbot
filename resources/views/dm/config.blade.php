@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Direct Message On Follow</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/dm_config') }}">
                            {{ csrf_field() }}

                            <h5 align="left">Send Direct Message when someone follows you</h5>
                            <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                <label for="text" class="col-md-4 control-label">DM Text</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="text" rows="7" required>{{ $dm->text }}</textarea>

                                    @if ($errors->has('text'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="disable" class="col-md-4 control-label">Disable</label>
                                <div class="col-md-6">
                                    <input type="checkbox" class="form-control" name="disable" @if ($dm->disable) checked @endif>
                                </div>
                            </div>

                            <div class="form-group">
                                <div align="center">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection