<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $act->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            <textarea name="description" class="form-control" rows="4">{{$act->description}}</textarea>
        </div>

    </div>
    <div class="box-footer mt-2">
        <a href="{{route('acts.index')}}" class="btn btn-secondary float-left">Cancel</a>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </div>
</div>
