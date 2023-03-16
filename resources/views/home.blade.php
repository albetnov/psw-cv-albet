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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-900 m-3">
    <main class="grid grid-cols-1 md:grid-cols-2 gap-3">
        <section>
            <x-introduction-card />
            <div class="flex mt-4 flex-col md:flex-row gap-5">
                <x-stats-card color="bg-green-500" header="3+" body="Years Experience" />
                <x-stats-card color="bg-yellow-500" header="10" body="Projects Handled" />
                <x-stats-card color="bg-pink-500" header="1" body="Year Proffesional Experiece" />
            </div>
        </section>
        <section>
            <x-top-bar />
            
        </section>
    </main>
</body>

</html>
