<form wire:submit.prevent="submit">
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <i class="fa fa-user-o"></i>
                <input type="text" wire:model.defer="name" class="form-control" placeholder="Name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <i class="fa fa-envelope-o"></i>
                <input type="email" wire:model.defer="email" class="form-control" placeholder="Email*">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <i class="fa fa-question-circle-o"></i>
                <input type="text" wire:model.defer="subject" class="form-control" placeholder="Subject*">
                @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <i class="fa fa-comment-o"></i>
                <textarea wire:model.defer="message" class="form-control" placeholder="Message*" rows="7"></textarea>
                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="mybtn mybtn-bg"><span>Send Message</span></button>
        </div>
    </div>
</form>
