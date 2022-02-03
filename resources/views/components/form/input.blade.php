<div class="item form-group">

    <label class="col-form-label col-md-3 col-sm-3 label-align" for="{!! !empty($id) ? $id : '' !!}">{{$title ?? ''}}
        <span class="required">{!! !empty($required) ? '*' : '' !!}</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="{{$type ?? 'text'}}" id="{!! !empty($id) ? $id : '' !!}" {!! !empty($required) ? 'required' : '' !!} 
        class="form-control" value="{{$value ?? ''}}" placeholder="{{$title ?? ''}}"
        name="{!! !empty($name) ? $name : '' !!}">
        <span class="error">
        @error($name)
            {{$message}}
        @enderror
        </span>
        @if(isset($image) && !empty($image))
            <img src="{{asset('storage/'.$image)}}" class="preview_image"/>
        @endif
    </div>
</div>