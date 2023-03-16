<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-900 m-3">
    <main class="grid grid-cols-1 lg:grid-cols-2 gap-3">
        <section class="flex flex-col justify-between">
            <x-introduction-card />
            <div class="h-1/2 flex mt-4 flex-col md:flex-row gap-5">
                <x-stats-card color="bg-green-500" hover="hover:shadow-green-300" header="3+"
                    body="Years Experience" />
                <x-stats-card color="bg-yellow-500" hover="hover:shadow-yellow-300" header="10"
                    body="Projects Handled" />
                <x-stats-card color="bg-pink-500" hover="hover:shadow-pink-300" header="10" body="Clients Happy" />
            </div>
        </section>
        <section class="overflow-hidden h-full">
            <x-top-bar />
            <div class="grid grid-cols-2 gap-3 mt-3 h-full items-center">
                <x-photo />
                <div class="flex flex-col gap-5 h-full mt-5">
                    <x-bio-detail />
                </div>
            </div>
        </section>
    </main>
    @stack('scripts')
</body>

</html>
