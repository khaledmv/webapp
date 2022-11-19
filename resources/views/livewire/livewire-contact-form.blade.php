<form  wire:submit.prevent="submit" class="php-email-form">
   
    <div class="row gy-4">

      <div class="col-md-6">
        <input type="text" wire:model.lazy="name"  class="form-control" placeholder="Name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="col-md-6 ">
        <input type="text" wire:model="email" class="form-control" placeholder="Mail">
        @error('email') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="col-md-12">
        <textarea wire:model.lazy="message" class="form-control" cols="30" rows="10" placeholder="What do you need help with?"></textarea>
        @error('message') <span class="error">{{ $message }}</span> @enderror
      </div>

      <div class="col-md-12 text-center">
       
        <div class="btn-box">
            <img wire:loading.class.remove="spiner__hide" class="spiner__hide" width="25px" height="25px"src="{{asset('assets/img/spiner.gif')}}" alt="webaiid btn">
            <button wire:loading.attr="disabled" type="submit">Send Message</button>
        </div>
        
      </div>

    </div>
  </form>

