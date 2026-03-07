<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Include Tailwind Plus Elements (for <el-dropdown>, <el-menu>, <el-disclosure>) -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

    <!-- Optional: Tailwind config for custom colors (if needed) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        indigo: {
                            500: '#6366F1',
                        },
                    },
                },
            },
        }
    </script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <?php require __DIR__ . '/../partials/nav.php'; ?>
        <?php require __DIR__ . '/../partials/header.php'; ?>

        <!-- Main content -->
        <main>
            <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                        alt="Your Company" class="mx-auto h-10 w-auto" />
                    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register for a new
                        account</h2>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form action="/register" method="POST" class="space-y-6">
                        <div>
                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                            <div class="mt-2">
                                <input id="email" type="email" name="email" required autocomplete="email"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                            </div>
                            <div class="mt-2">
                                <input id="password" type="password" name="password" required
                                    autocomplete="current-password"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                        </div>
                    </form>
                </div>
            </div>

        </main>
    </div>
</body>

</html>