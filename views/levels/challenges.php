<!DOCTYPE html>
<html lang="nl">

<head>
    <?php require '../views/templates/head.php' ?>
</head>

<body>
    <?php require '../views/templates/menu.php' ?>

    <div class="mt-6 mb-16 w-11/12 p-6 space-y-8 sm:p-8 bg-white mx-auto">

        <h2 class="text-2xl font-bold dark:text-white">Keuzedelen</h2>
        <!-- <p class="my-4 font-bold text-gray-700">Hieronder staat het overzicht van die te maken hebben met het
            ontwikkelen van de keuzedelen binnen het systeem van mbogodigital.nl</p> -->

        <div class="w-full">
            <div class="flex border-b border-gray-300">
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tl-lg focus:outline-none active:bg-gray-200"
                    onclick="openTab(event, 'tab1')">Realiseert Software</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tl-lg focus:outline-none active:bg-gray-200"
                    onclick="openTab(event, 'tab2')">Werken in een ontwikkelteam</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-lg focus:outline-none active:bg-gray-200"
                    onclick="openTab(event, 'tab3')">Generieke onderdelen RE</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-lg focus:outline-none active:bg-gray-200"
                    onclick="openTab(event, 'tab4')">Generieke onderdelen BS</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-lg focus:outline-none active:bg-gray-200"
                    onclick="openTab(event, 'tab5')">Generieke onderdelen NE</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-lg focus:outline-none active:bg-gray-200"
                    onclick="openTab(event, 'tab6')">Generieke onderdelen EN</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-lg focus:outline-none active:bg-gray-200"
                    onclick="openTab(event, 'tab7')">Generieke onderdelen LB</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-lg focus:outline-none active:bg-gray-200"
                    onclick="openTab(event, 'tab8')">G.P.P</button>
                <!-- <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-lg focus:outline-none active:bg-gray-200"
                    onclick="openTab(event, 'tab9')">Professionaliteit</button>
                <button
                    class="w-1/2 py-4 text-center font-medium text-gray-700 bg-gray-100 rounded-tr-lg focus:outline-none active:bg-gray-200"
                    onclick="openTab(event, 'tab10')">Persoonlijke ontwikkeling</button> -->
            </div>
            <div id="tab1" class="tabcontent p-4">
                <?php require 'challenges-tab1.inc.php' ?>
            </div>
            <div id="tab2" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab2.inc.php' ?>
            </div>
            <div id="tab3" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab3.inc.php' ?>
            </div>
            <div id="tab4" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab4.inc.php' ?>
            </div>
            <div id="tab5" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab5.inc.php' ?>
            </div>
            <div id="tab6" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab6.inc.php' ?>
            </div>
            <div id="tab7" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab7.inc.php' ?>
            </div>
            <div id="tab8" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab8.inc.php' ?>
            </div>
            <div id="tab9" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab9.inc.php' ?>
            </div>
            <div id="tab10" class="tabcontent p-4 hidden">
                <?php require 'challenges-tab10.inc.php' ?>
            </div>
        </div>

        <script>
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].classList.add("hidden");
                }
                tablinks = document.getElementsByTagName("button");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].classList.remove("active:bg-gray-200");
                }
                document.getElementById(tabName).classList.remove("hidden");
                evt.currentTarget.classList.add("active:bg-gray-200");
            }
        </script>



        <?php require '../views/templates/footer.php' ?>

    </div>


</body>

</html>