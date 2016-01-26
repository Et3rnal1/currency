<div class="converter-container">
    <form id="converter-form" action="{{ $endpoint }}">
        <div class="row">
            <input type="text" name="amount-two" placeholder="Enter amount" value="0">
            <select name="currency-one" id="currency-one">
                <option value="">Choose currency</option>
                @foreach($values as $code => $value)
                    <option data-code="{{$code}}" value="{{$code}}">{{$code}}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <input type="text" name="amount-two" placeholder="Enter amount" value="0">
            <select name="currency-one" id="currency-two">
                <option value="">Choose currency</option>
                @foreach($values as $code => $value)
                    <option data-value="{{$value}}" value="{{$code}}">{{$code}}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>
