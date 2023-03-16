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

<body class="bg-zinc-900 m-3 py-2">
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

        <section class="overflow-hidden h-full mb-24 lg:mb-0">
            <x-top-bar />
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-3 h-full items-center">
                <x-photo />
                <div class="flex flex-col gap-5 h-full mt-3s">
                    <x-bio-detail />
                </div>
            </div>
        </section>

        <section class="lg:col-span-2 grid grid-cols-1 lg:grid-cols-[55%_1fr] gap-5">
            <x-card>
                <x-text-row header="Projects" body="See All" :isLink="true" />
                <div
                    class="flex gap-5 overflow-x-auto overflow-y-clip mt-3 scrollbar-thin scrollbar-thumb-zinc-600 scrollbar-zinc-700">
                    <x-project src="https://source.unsplash.com/500x500?web"
                        projectUrl="https://github.com/albetnov/Rent-N-Go-Backend" />
                    <x-project src="https://source.unsplash.com/500x500?web"
                        projectUrl="https://github.com/albetnov/Rent-N-Go-Frontend" />
                    <x-project src="https://source.unsplash.com/500x500?web"
                        projectUrl="https://github.com/albetnov/psw-cv-albet" />
                    <x-project src="https://source.unsplash.com/500x500?web"
                        projectUrl="https://github.com/albetnov/bodyfits-inertia" />
                    <x-project src="https://source.unsplash.com/500x500?web"
                        projectUrl="https://github.com/albetnov/undefined-bot" />
                    <x-project src="https://source.unsplash.com/500x500?web"
                        projectUrl="https://github.com/albetnov/Okelah-RN" />
                    <x-project src="https://source.unsplash.com/500x500?web"
                        projectUrl="https://github.com/albetnov/berita-uy" />
                    <x-project src="https://source.unsplash.com/500x500?web"
                        projectUrl="https://github.com/albetnov/alumnifo" />
                    <x-project src="https://source.unsplash.com/500x500?web"
                        projectUrl="https://github.com/albetnov/personal-notes" />
                </div>
            </x-card>

            <x-card>
                <x-text-row header="About" body="Resume" />
                <div class="h-full flex flex-col justify-center">
                    <p class="text-slate-400 mt-3 text-lg">
                        I am a fullstack web developer with three years of experience in building and maintaining web
                        applications using modern technologies. I have extensive knowledge in Go, PHP, Typescript, React
                        and
                        Laravel frameworks. I can work on both the frontend and the backend of a web project, ensuring
                        high
                        performance, scalability and security. I have successfully delivered projects for various
                        clients
                        across different domains such as e-commerce, education, social media and health care. I am
                        always
                        eager to learn new skills and tools to improve my web development capabilities. I am looking for
                        challenging and rewarding opportunities to showcase my fullstack web development skills and
                        contribute to the success of your organization.
                    </p>
                </div>
            </x-card>
        </section>
    </main>
    @stack('scripts')
</body>

</html>
