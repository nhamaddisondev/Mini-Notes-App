<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create note</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <?php require 'partials/nav.php'; ?>

        <?php require 'partials/header.php'; ?>

        <main class="bg-gray-50 min-h-screen">
            <div class="mx-auto max-w-3xl py-10 px-4 sm:px-6 lg:px-8">
                <a href="/notes" class="text-sm text-indigo-600 hover:text-indigo-700">&larr; Back to notes</a>

                <form method="POST" class="mt-6 space-y-6 rounded-xl bg-white p-6 shadow-sm">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input id="title" name="title" type="text" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                               focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="My first note" />
                    </div>

                    <div>
                        <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                        <textarea id="body" name="body" rows="6" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                               focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="Write your note here..."></textarea>
                    </div>

                    <div class="flex justify-end gap-3">
                        <a href="/notes" class="text-sm font-medium text-gray-600 hover:text-gray-800">Cancel</a>
                        <button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium
                               text-white shadow-sm hover:bg-indigo-700 focus:outline-none
                               focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Save note
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>