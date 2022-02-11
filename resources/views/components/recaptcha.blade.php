<script src='https://www.google.com/recaptcha/api.js'></script>
<div>
    @if (config('services.recaptcha.key'))
        <div class="g-recaptcha offset-4 mb-2" data-sitekey="{{ $siteKey }}">
        </div>
    @endif
    @error('g-recaptcha-response')
        <div class="error text-danger offset-sm-4">{{ $message }}</div>
    @enderror
</div>
