@if (isset($data))
    <option value="">Select Category</option>
    @foreach ($data as $d)
        <option value="{{ $d->id }}">{{ $d->code . ' - ' .$d->name }}</option>
    @endforeach
@endif