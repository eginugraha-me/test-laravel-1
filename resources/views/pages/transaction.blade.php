@extends('layouts.app')
@section('content')


   <div class="wrapper">
          <div>
              <p>No Invoice : #{{$transaction->id}}</p>

              <br>

              <p> {{$transaction->buyer_name}}</p>
              <p>{{$transaction->buyer_email}}</p>
          </div>

       <h1>@php echo strtoupper($transaction->status) @endphp</h1>
   </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Deskripsi</th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$transaction->no}}</td>
                <td>{{$transaction->description}}</td>
                <td>{{$transaction->price}}</td>
            </tr>
        </tbody>
    </table>


    <div class="invoice-price">
        <p>Total : Rp: {{$transaction->price}}</p>
    </div>


    <div class="pay-info">
        <p>Silahkan bayar di no rekening berikut ini : <br>
            66218721798129
        </p>
    </div>

@endsection

@push('script')

@endpush
