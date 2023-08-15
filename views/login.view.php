<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Back</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center h-screen">
<form class="flex items-center flex-col max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
    <div class="mb-4">
        <input class="form-input mt-1 block w-full rounded-md border-2 border-solid border-gray-300 px-2.5" type="text"
               id="username" name="username" placeholder="Username">
    </div>
    <div class="mb-4">
        <input class="form-input mt-1 block w-full rounded-md border-2 border-solid border-gray-300 px-2.5" type="password"
               id="password" name="password" placeholder="Password">
    </div>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline"
            type="submit">Sign In
    </button>
</form>
</body>

</html>