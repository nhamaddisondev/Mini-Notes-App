<?php
// Purpose: View template that renders the login form.
?>

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
                    <img class="mx-auto h-10 w-auto"
                        src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                        alt="Your Company" />
                    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your
                        account
                    </h2>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <div class="rounded-xl bg-white p-8 shadow-sm ring-1 ring-gray-200">
                        <form class="space-y-6" action="/session" method="POST">
                            <div>
                                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email
                                    address</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                        placeholder="you@example.com"
                                        value="<?= htmlspecialchars(old('email'), ENT_QUOTES, 'UTF-8') ?>" />
                                </div>
                            </div>

                            <div>
                                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                                <div class="mt-2">
                                    <input id="password" name="password" type="password" autocomplete="current-password"
                                        required
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                        placeholder="Enter your password" />
                                </div>
                            </div>

                            <?php if (!empty($errors)): ?>
                                <div class="rounded-md bg-red-50 p-3 ring-1 ring-red-200">
                                    <ul class="space-y-1">
                                        <?php if (isset($errors['email'])): ?>
                                            <li class="text-sm text-red-700">
                                                <?= htmlspecialchars($errors['email'], ENT_QUOTES, 'UTF-8') ?></li>
                                        <?php endif; ?>

                                        <?php if (isset($errors['password'])): ?>
                                            <li class="text-sm text-red-700">
                                                <?= htmlspecialchars($errors['password'], ENT_QUOTES, 'UTF-8') ?></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Log in
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
<?php
// Purpose: View template that renders the login form.
?>

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
        <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8">
                <div>
                    <img class="mx-auto h-12 w-auto"
                        src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                    <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Log In!</h2>
                </div>

                <form class="mt-8 space-y-6" action="/session" method="POST">
                    <div class="-space-y-px rounded-md shadow-sm">
                        <div>
                            <label for="email" class="sr-only">Email address</label>
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                placeholder="Email address" value="<?= old('email') ?>">
                        </div>

                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                placeholder="Password">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Log In
                        </button>
                    </div>

                    <ul>
                        <?php if (isset($errors['email'])): ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></li>
                        <?php endif; ?>

                        <?php if (isset($errors['password'])): ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
                        <?php endif; ?>
                    </ul>
                </form>
            </div>
        </div>
        </main>
    </div>
</body>

</html>