<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="p-8">


<form action="POST" class="space-y-6">

    <div>
        <x-input-label for="status" :value="__('Status')" />
        <select name="status" id="status">
            @foreach($status as $row)
                <option value="{{ $row->id }}"> {{ $row->name }} </option>
            @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="platform" :value="__('Plataforma')" />
        <select name="platform" id="platform">
            @foreach($platform as $row)
                <option value="{{ $row->id }}"> {{ $row->name }} </option>
            @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="warranty" :value="__('Garantia')" />
        <select name="warranty" id="warranty">
            @foreach($warranty as $row)
                <option value="{{ $row->id }}"> {{ $row->name }} </option>
            @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="category" :value="__('Categoria')" />
        <select name="category" id="category">
            @foreach($category as $row)
                <option value="{{ $row->id }}"> {{ $row->name }} </option>
            @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="countryState" :value="__('Estado')" />
        <select name="countryState" id="countryState">
            @foreach($countryState as $row)
                <option value="{{ $row->id }}"> {{ $row->name }} </option>
            @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="payment" :value="__('Pagamento')" />
        <select name="payment" id="payment">
            @foreach($payment as $row)
                <option value="{{ $row->id }}"> {{ $row->name }} </option>
            @endforeach
        </select>
    </div>

</form>


</body>
</html>
