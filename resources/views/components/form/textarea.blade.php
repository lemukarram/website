<div class="item form-group">
    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">{!! !empty($title) ? $title : '' !!}</label>
    <div class="col-md-6 col-sm-6 ">
    <textarea id="{!! !empty($id) ? $id : '' !!}" {!! !empty($required) ? 'required' : '' !!} class="form-control" name="{!! !empty($name) ? $name : '' !!}" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10">{!! !empty($value) ? $value : '' !!}</textarea>
    <span class="error">
        @error($name)
            {{$message}}
        @enderror
        </span>
    </div>
</div>