   <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h2 class="newsletter_header">Get Ecommerce Tips </h2>
            <p class="newsletter_subtitle">Sign Up Our News Letter To Get Ecommerce Tips Faster</p>
          </div>
          <div class="col-lg-6">
            <form wire:submit.prevent="submit">
              <div>
                <input type="email" wire:model="email" placeholder="Type Email here" name="email"><input wire:loading.attr="disabled" type="submit" value="Subscribe">
              </div>
              <div class="newsletter__error">
                @error('email') <span class="error">{{ $message }}</span> @enderror
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
