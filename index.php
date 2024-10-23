<?php
include 'db.php';

// Consultar usuarios
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Lista de Usuarios</h1>

        <a href="create.php" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Crear Usuario</a>

        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden mt-6">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/12 py-2">ID</th>
                    <th class="w-1/4 py-2 text-left">Username</th>
                    <th class="w-1/4 py-2 text-left">Nombre</th>
                    <th class="w-1/4 py-2 text-left">Email</th>
                    <th class="w-1/4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td class="py-2"><?= $row['id'] ?></td>
                            <td class="py-2 text-left"><?= $row['username'] ?></td>
                            <td class="py-2 text-left"><?= $row['name'] ?></td>
                            <td class="py-2 text-left"><?= $row['email'] ?></td>
                            <td class="py-2">
                                <a href="edit.php?id=<?= $row['id'] ?>" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded">Editar</a>
                                <a href="delete.php?id=<?= $row['id'] ?>" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="py-4">No hay usuarios</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
