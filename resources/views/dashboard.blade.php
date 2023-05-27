<x-app-layout>
    <x-slot name="header" class="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto rounded-2xl grid grid-cols-3 gap-8">

            <a href="/register-product" class="dashboard">
                <img class="dashboard-icons" src="{{asset('img/product.png')}}" alt="">
                <p>cadastrar produto</p>
            </a>

            <a href="/register-client" class="dashboard">
                <img class="dashboard-icons" src="{{asset('img/client.png')}}" alt="">
                <p>cadastrar cliente</p>
            </a>

            <a href="/client-sale" class="dashboard">
                <img class="dashboard-icons" src="{{asset('img/sell.png')}}" alt="">
                <p>efetuar <br> venda</p>
            </a>

            <a href="/search-price" class="dashboard">
                <img class="dashboard-icons" src="{{asset('img/search.png')}}" alt="">
                <p>consultar preço</p>
            </a>

            <a href="/cancel-sale" class="dashboard">
                <img class="dashboard-icons" src="{{asset('img/cancel.png')}}" alt="">
                <p>cancelar <br> venda</p>
            </a>

            <a href="/manage-stock" class="dashboard">
                <img class="dashboard-icons" src="{{asset('img/stock.png')}}" alt="">
                <p>estoque</p>
            </a>
        </div>
    </div>
</x-app-layout>
