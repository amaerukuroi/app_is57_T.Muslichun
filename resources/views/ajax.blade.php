@foreach ($ajax as $lay)
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <div class="mb-3-prepend">
        <span class="mb-3-text" id="basic-addon1">Rp</span>
    </div>
    <input type="text" class="form-control" id="harga" value="{{ $lay->harga }}" readonly required>
</div>

@endforeach