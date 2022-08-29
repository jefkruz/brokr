<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    {{ Form::label('name') }}
                    {{ Form::text('name', $property->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-6">

                <div class="form-group">

                    {{ Form::label('banner') }}
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" required name="banner" id="customFile">

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    {{ Form::label('location') }}
                    {{ Form::text('location', $property->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''),'required', 'placeholder' => 'Location']) }}
                    {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {{ Form::label('title') }}
                    {{ Form::text('title', $property->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'required', 'placeholder' => 'Title']) }}
                    {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {{ Form::label('size') }}
                    {{ Form::text('size', $property->size, ['class' => 'form-control' . ($errors->has('size') ? ' is-invalid' : ''), 'placeholder' => 'Size']) }}
                    {!! $errors->first('size', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {{ Form::label('actual_price') }}
                    {{ Form::text('actual_price', $property->actual_price, ['class' => 'form-control' . ($errors->has('actual_price') ? ' is-invalid' : ''), 'placeholder' => 'Actual Price']) }}
                    {!! $errors->first('actual_price', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {{ Form::label('promo_price') }}
                    {{ Form::text('promo_price', $property->promo_price, ['class' => 'form-control' . ($errors->has('promo_price') ? ' is-invalid' : ''), 'placeholder' => 'Promo Price']) }}
                    {!! $errors->first('promo_price', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {{ Form::label('video1') }}
                    {{ Form::text('video1', $property->video1, ['class' => 'form-control' . ($errors->has('video1') ? ' is-invalid' : ''), 'placeholder' => 'Video1']) }}
                    {!! $errors->first('video1', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {{ Form::label('video2') }}
                    {{ Form::text('video2', $property->video2, ['class' => 'form-control' . ($errors->has('video2') ? ' is-invalid' : ''), 'placeholder' => 'Video2']) }}
                    {!! $errors->first('video2', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {{ Form::label('video3') }}
                    {{ Form::text('video3', $property->video3, ['class' => 'form-control' . ($errors->has('video3') ? ' is-invalid' : ''), 'placeholder' => 'Video3']) }}
                    {!! $errors->first('video3', '<div class="invalid-feedback">:message</div>') !!}
                </div></div>

            <div class="col-lg-12">
                <div class="form-group">
                    {{ Form::label('description') }}
                    <textarea id="ckeditor" required name="description">
               {{$property->description}}
              </textarea>

                </div></div>
            <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
            <div class="col-lg-12">
                <div class="form-group">
                    {{ Form::label('features') }}
                    <textarea id="editor"  name="features">
               {{$property->features}}
              </textarea>
                </div>
            </div>
            <div class="col-lg-12">

                <div class="form-group">

                    {{ Form::label('images') }}
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" required name="images[]" multiple id="customFile">

                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

@include('includes.portal.data')

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
