<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
    <label for="phone" class="col-md-3 control-label">{{ trans('admin/suppliers/table.phone') }}</label>
    <div class="col-md-7">
    {{Form::text('phone', old('phone', $item->phone), array('class' => 'form-control', 'aria-label'=>'phone', 'maxlength'=>'191')) }}
        {!! $errors->first('phone', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
</div>
