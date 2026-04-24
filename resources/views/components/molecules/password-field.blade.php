<div x-data="{ show: false }" class="input-group">

    <input :type="show ? 'text' : 'password'" {{ $attributes->merge(['class' => 'form-control']) }}>

    <button type="button" class="btn btn-outline-secondary" @click="show = !show">
        👁
    </button>

</div>