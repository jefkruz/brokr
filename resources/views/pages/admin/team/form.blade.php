<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $team->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rank') }}
            {{ Form::text('rank', $team->rank, ['class' => 'form-control' . ($errors->has('rank') ? ' is-invalid' : ''), 'placeholder' => 'Rank']) }}
            {!! $errors->first('rank', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('image') }}
            <div class="custom-file">
                <input type="file" class="custom-file-input multiple" required name="image" id="customFile">

            </div>
        </div>
        <div class="form-group">
            {{ Form::label('profile') }}
        <textarea id="ckeditor"  rows="3" name="description" required>
               {{$team->description}}
              </textarea>
        </div>
    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>


@include('includes.portal.data')
