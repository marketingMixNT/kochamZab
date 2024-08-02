@props(['light' => false, 'small' => false])

<h2
    class="{{ $small ? 'text-3xl sm:text-4xl ' : 'text-3xl sm:text-4xl lg:text-5xl' }} {{ $light ? 'text-fontLight' : ' text-fontBlue dark:text-fontLight' }} font-semibold  uppercase mb-6">
    {{ $slot }}</h2>
