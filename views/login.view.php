<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Back</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-around text-center	items-center">
        <div class="w-1/2">
            <h1 class="text-4xl">Login</h1>
        </div>

        <form class="w-1/2">

            <div class="mb-2">
                <label>
                    Username
                    <input class="border-2 rounded-full	" type="text" name="username" />
                </label>
            </div>

            <div class="mb-2">
                <label>
                    Password
                    <input class="border-2 ml-1 rounded-full	" type="password" name="password" />
                </label>
            </div>

            <input type="submit" value="Logar" />
        </form>
    </div>
</body>

</html>