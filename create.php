<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, name, email) VALUES ('$username', '$password', '$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Crear Usuario</h1>

        <form action="create.php" method="POST" class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                <input type="text" name="username" id="username" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                <input type="password" name="password" id="password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Crear</button>
        </form>
    </div>
</body>
</html>
