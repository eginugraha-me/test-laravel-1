@extends('layouts.app')
@section('content')

    <div class="form-price">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul style="color: red;">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf
        <div>
            <label>{{$domain}}</label>
            <select class="select-price">
                <option value="100000" selected>1 Tahun</option>
                <option value="200000">2 Tahun</option>
            </select>
        </div>

        <p class="total-price">Total Price Rp <span class="price">100000</span></p>
    </div>


    @if(auth()->check())
        <form action="{{route('checkout')}}" method="post" class="form-config text-left">
            @csrf
            <div>
                <label for="name">Name : {{ auth()->user()->name }} </label>
                <input type="hidden" name="name" id="name" value="{{ auth()->user()->name }}">
            </div>

            <div>
                <label for="email">Email : {{ auth()->user()->email }}</label>
                <input type="hidden" name="email" id="email" value="{{ auth()->user()->email }}">
            </div>

            <input type="hidden" name="domain" value="{{$domain}}">
            <input type="hidden" name="price" class="input-price" value="100000">
            <input type="submit" value="Checkout">
        </form>
    @else
        <form action="{{route('checkout')}}" method="post" class="form-config">
            @csrf

            <div>
                <label for="name">Name : </label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email">
            </div>
            <p>atau login <a href="{{route("login")}}">disini</a></p>

            <br>
            <input type="hidden" name="domain" value="{{$domain}}">
            <input type="hidden" name="price" class="input-price" value="100000">
            <input type="submit" value="Checkout">
        </form>

    @endif

@endsection

@push('script')
    <script>
        let durationElem = document.querySelector('.select-price');

        durationElem.addEventListener('change', (e) => {
            document.querySelector('.price').textContent = e.target.value;
            document.querySelectorAll('.input-price').forEach(elem => {
                elem.value = e.target.value
            });
        })
    </script>
@endpush
