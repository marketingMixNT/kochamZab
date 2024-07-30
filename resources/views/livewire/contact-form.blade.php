<form class="contact-from" wire:submit.prevent='submitForm' method="POST" id="contactForm">

    @csrf
    @if ($successMessage)
        <x-success-message successMessage="{{ $successMessage }}" />
    @endif
    <p>
        <input wire:model.live.lazy="name" type="text" name="name" placeholder="Imię i nazwisko">
        @error('name')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    </p>
    <p>
        <input wire:model.live.lazy="email" type="email" name="email" placeholder="Adres e-mail">
        @error('email')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    </p>
    <p>
        <textarea wire:model.live.lazy='content' rows="8" name="content" placeholder="Twoja wiadomość"></textarea>
        @error('content')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    </p>
    <p>
        <input type="submit" name="submit" value="Wyślij wiadomość" wire.loading.attr="disabled">
    </p>
</form>
