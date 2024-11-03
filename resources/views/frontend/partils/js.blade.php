<script src="{{ asset('frontend/js') }}/jquery-3.3.1.min.js"></script>
<script src="{{ asset('frontend/js') }}/jquery-migrate-3.0.1.min.js"></script>
<script src="{{ asset('frontend/js') }}/popper.min.js"></script>
<script src="{{ asset('frontend/js') }}/bootstrap.min.js"></script>
<script src="{{ asset('frontend/js') }}/owl.carousel.min.js"></script>
<script src="{{ asset('frontend/js') }}/jquery.stellar.min.js"></script>
<script src="{{ asset('frontend/js') }}/jquery.fancybox.min.js"></script>


<script src="{{ asset('frontend/js') }}/aos.js"></script>

<script src="{{ asset('frontend/js') }}/bootstrap-datepicker.js"></script>
<script src="{{ asset('frontend/js') }}/jquery.timepicker.min.js"></script>



<script src="{{ asset('frontend/js') }}/main.js"></script>
<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            @php
                toastr()->error($error);
            @endphp
        @endforeach
    @endif
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
