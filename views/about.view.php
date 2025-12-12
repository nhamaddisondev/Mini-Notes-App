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
    <!-- Navigation bar -->
    <?php require('partials/nav.php')?>

    <!-- Header -->
    <?php require('partials/header.php')?>

    <!-- Main content -->
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            <p class="text-gray-600">Let's say you now on the about page</p>
        </div>
    </main>
</div>
</body>
</html>
