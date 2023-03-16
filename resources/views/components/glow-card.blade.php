<div id="{{ $id }}"
    class="relative overflow-hidden p-3 bg-zinc-800 after:content-[''] after:absolute after:w-[50px] after:top-2 after:h-[50px] after:opacity-0 after:transition-opacity after:duration-300 after:gradient-bg shiny rounded-lg">
    {{ $slot }}
</div>


@push('scripts')
    <script>
        const button{{ $id }} = document.querySelector("#{{ $id }}");

        button{{ $id }}.addEventListener("mousemove", (e) => {
            const {
                x,
                y
            } = button{{ $id }}.getBoundingClientRect();

            button{{ $id }}.style.setProperty("--x", e.clientX - x);
            button{{ $id }}.style.setProperty("--y", e.clientY - y);
        });
    </script>
@endpush
