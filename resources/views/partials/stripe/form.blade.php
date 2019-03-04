<form action="{{route("subscriptions.process_subscription")}}" method="POST">
    @csrf
    <input
            class="form-control"
            name="coupon"
            placeholder="{{__("¿Tienes un cupón?")}}"
    />
    <input type="hidden" name="type" value="{{$product['type']}}"/>
    <hr/>
    <strip-form
            stripe_key="{{env('STRIPE_KEY')}}"
            name="{{ $product['name'] }}"
            ammount="{{$product['ammount']}}"
            description="{{$product['description']}}"
    ></strip-form>
</form>
<script>
    import StripForm from "../../../js/components/StripForm";

    export default {
        components: {StripForm}
    }
</script>