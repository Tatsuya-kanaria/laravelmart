@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="container w-50">
            @if (!empty($card))
                <h3>登録済みのクレジットカード</h3>

                <hr>
                <h4>{{ $card["brand"] }}</h4>
                <p>有効期限: {{ $card["exp_year"] }}/{{ $card["exp_month"] }}</p>
                <p>カード番号: ************{{ $card["last4"] }}</p>
            @endif

            @push('scripts')
            <form action="{{ route('mypage.token') }}" method="post" class="text-center">
                @csrf
                @if (empty($card))

                <script type="text/javascript" src="https://checkout.pay.jp/" class="payjp-button" data-key="{{ ENV('PAYJP_PUBLIC_KEY') }}" data-on-created="onCreated" data-text="カードを登録する" data-submit-text="カードを登録する"></script>
                @else
                <script type="text/javascript" src="https://checkout.pay.jp/" class="payjp-button" data-key="{{ ENV('PAYJP_PUBLIC_KEY') }}" data-on-created="onCreated" data-text="カードを更新する" data-submit-text="カードを更新する"></script>
                @endif
            </form>
            @endpush
        </div>
    </div>
@endsection
