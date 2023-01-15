<div class="{{$viewClass['form-group']}}">

    <label class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')
        <div class="input-group">
            <input {!! $attributes !!} />
            <span class="input-group-append">{!! $append !!}</span>
        </div>


        @include('admin::form.help-block')

    </div>
</div>

<script require="@liumenggit.generate-key" init="{!! $selector !!}">
    $('#' + id).generateKey({!! admin_javascript_json($options) !!});
</script>
