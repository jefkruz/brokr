<div class="">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('title') }}
                {{ Form::text('title', $post->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
                {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('category') }}
                <div class="form-group">

                    <select name="status" class="form-control form-select" data-bs-placeholder="Select Status">
                        <option value="{{$post->category}}">{{$post->category}}</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="PUBLIC">PUBLIC</option>


                    </select>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('status') }}
                <div class="form-group">

                    <select name="status" class="form-control form-select" data-bs-placeholder="Select Status">
                        <option value="{{$post->status}}">{{$post->status}}</option>
                        <option value="PENDING">PENDING</option>
                        <option value="PUBLISHED">PUBLISHED</option>
                        <option value="DRAFT">DRAFT</option>

                    </select>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('image') }}
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="customFile">

                </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('body') }}


                <div class="card-body custom-ekeditor">
                    <textarea id="ckeditor" name="body" required> {{$post->body}}</textarea>
                </div>
            </div>

        </div>





    </div>
    <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>


@include('includes.portal.data')
