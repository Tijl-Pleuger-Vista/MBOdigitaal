<!DOCTYPE html>
<html lang="nl">

<head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/templates/head.php' ?>
</head>

<body class="bg-stone-950">
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/admin/templates/topbar.php' ?>

    <div class="mt-6 mx-auto px-4 bg-stone-950">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/admin/templates/menu.php' ?>
        <div class="p-6 text-medium text-stone-50 rounded w-full min-h-screen">
        <h3 class="text-lg font-bold text-stone-100 text-white mb-2">Levels beheren</h3>
            <p class="mb-2 text-red-400">
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
            </p>
                <button
                    class=" mt-6 shadow bg-stone-700 hover:bg-stone-300 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                    type="submit">
                    <a href="/admin/levels/new?id=meow">Level toevoegen</a>
                    
                </button>
            <br>
            <br>

            <table class="table-auto w-full bg-gray-800 text-white">
                <thead>
                    <tr class="bg-stone-800">
                        <th class="px-4 py-2 text-left">Delete</th>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">EducationID</th>
                        <th class="px-4 py-2 text-left">Level</th>
                        <th class="px-4 py-2 text-left">Description</th>
                        <th class="px-4 py-2 text-left">Deliverables</th>
                        <th class="px-4 py-2 text-left">Edit</th>
                    </tr>
                </thead>
                <tbody>

                        <tr class="even:bg-stone-900 odd:bg-stone-950">
                            <td class="px-4 py-2">
                                <a href="/admin/levels/delete?id=meow"
                                    onclick="return confirm('Weet je zeker dat je dit Level wil verwijderen?');">
                                    <img src=" /images/trash.svg" alt="Trash" />
                                </a>
                            </td>
                        
                            <td class="px-4 py-2"> ID</td>
                            <td class="px-4 py-2"> EducationID</td>
                            <td class="px-4 py-2"> Level</td>
                            <td class="px-4 py-2"> Description</td>
                            <td class="px-4 py-2"> Deliverables</td>
                            <td class="px-4 py-2">
                                <a href="/admin/levels/edit?id=meow"
                                    onclick="location.href = '/admin/levels';">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>