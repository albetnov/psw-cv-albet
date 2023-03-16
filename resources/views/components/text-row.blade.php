<div class="flex justify-between font-serif w-full">
    <h2 class="font-bold text-lg text-white">{{ $header }}</h2>
    @if ($isLink)
        <a href="#" class="text-lg text-slate-400 hover:underline">{{ $body }}</a>
    @else
        <h2 href="#" class="text-lg text-slate-400">{{ $body }}</h2>
    @endif
</div>
