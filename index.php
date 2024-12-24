<?php

include './config/db.php';


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet Legal - Espace Client</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">

</head>

<body class="bg-gray-50">
    <div class="min-h-screen mb-32">
        <header class="bg-white shadow-sm">
            <nav class="bg-white shadow-lg mb-16  w-full z-50">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <a href="index.html" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                                <span class="ml-2 text-xl font-semibold">LexConsult Patient </span>
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="http://localhost/Plateforme-de-Reservation-de-Consultations-Juridiques/src/reservation.php" class="text-gray-700 hover:text-blue-700 px-3 py-2"> <button class="text-gray-700 hover:text-blue-700 px-3 py-2">Réservations</button> </a>

                            <a href="./logout.php">
                                <button class="text-gray-700 hover:text-blue-700 px-3 py-2">
                                    Déconnexion
                                </button>
                            </a>


                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="max-w-7xl mx-auto py-6  sm:px-6 lg:px-8">
            <div id="dashboard" class="tab-content">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Aperçu Rapide</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <p class="text-sm text-blue-600 font-medium">Prochains RDV</p>
                                    <p class="text-2xl font-semibold text-blue-800"> 129 </p>

                                </div>

                                <div class="bg-green-50 p-4 rounded-lg">
                                    <p class="text-sm text-green-600 font-medium">RDV Confirmés</p>
                                    <p class="text-2xl font-semibold text-green-800"> 109 </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Prochain Rendez-vous</h3>

                            <div class="bg-blue-50 p-4 rounded-lg">
                                <p class="font-medium text-blue-900"> <span class="font-bold"> Consultation </span>: </p>;
                                <p class="text-sm text-blue-600 mt-1"> <span class="font-bold"> Mr/Mme </span> </p>;
                                <p class="text-sm text-blue-600 mt-1"> <span class="font-bold"> La date de reservation </span> /:</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="appointments" class="tab-content mt-16">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                        <h2 class="text-lg font-medium text-gray-900">Mes Rendez-vous</h2>
                        <div class="flex space-x-3">
                            <select id="statusFilter" class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="all">Tous les statuts</option>
                                <option value="confirmed">Confirmés</option>
                                <option value="pending">En attente</option>
                                <option value="cancelled">Annulés</option>
                            </select>
                        </div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Médecin</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de reservation</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Montant </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de facturation </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Sophie Martin</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-03-20</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14:00</td>
                                <td class="px-6 py-4 text-sm text-gray-500">Droit immobilier</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        Confirmé
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3">Modifier</button>
                                    <button class="text-red-600 hover:text-red-900">Annuler</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div id="profile" class="tab-content mt-16 ">
                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <h2 class="text-lg font-medium text-gray-900">Informations Personnelles</h2>
                                <p class="mt-1 text-sm text-gray-500">Gérez vos informations personnelles et vos préférences.</p>
                            </div>
                            <div class="border-t border-gray-200">
                                <form id="profileForm" class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="firstName" class="block text-sm font-medium text-gray-700">Prénom</label>
                                            <input type="text" name="firstName" id="firstName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="lastName" class="block text-sm font-medium text-gray-700">Nom</label>
                                            <input type="text" name="lastName" id="lastName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                                            <input type="tel" name="phone" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                            Enregistrer les modifications
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

        </main>
    </div>

    <div id="modifyModal" class="hidden modifyModal fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 max-w-md w-full">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Modifier le Rendez-vous</h3>
            <form id="modifyForm">
                <input type="hidden" id="appointmentId">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Date</label>
                    <input type="date" id="modifyDate" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" class=" annuler-btn px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-md">
                        Annuler
                    </button>
                    <a href="">
                        <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-md">
                            Confirmer
                        </button>
                    </a>

                </div>
            </form>
        </div>
    </div>

    <div id="toast" class="hidden fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
        <p id="toastMessage"></p>
    </div>

    <script>
        const modifier_reserv = document.querySelectorAll('.modifier_reserv');
        const modals = document.querySelectorAll('.modifyModal');
        modifier_reserv.forEach((button, index) => {
            button.addEventListener('click', function(e) {
                modals[index].classList.remove('hidden');
            });
        })

        // for (let i = 0; i < modifier_reserv; i++) {
        //     x(modifier_reserv[i], i);
        // }

        // let x = function (button, index) {
        //     button.addEventListener('click', function(e) {
        //         modals[index].classList.remove('hidden');
        //     });
        // }

        // [Button1, Button2, Button3]
        // [Modal1, Modal2, Modal3]



        const annuler_btn = document.querySelectorAll('.annuler-btn')

        annuler_btn.forEach((popup, index) => {
            popup.onclick = function(e) {
                modals[index].classList.add('hidden');
            };
        })
    </script>
</body>

</html>