<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/budg.css') }}">
    <script src="{{ asset('js/index.js') }}" defer></script>
</head>

<body>
@include('includes.dashhead')

    <div class="mainbody">

        @include('includes.dashnav')
        <div class="contenu2" id="aa1">
            <h2>Budget</h2>
            <div class="ctn1">




                <header class="tete">
                    <h1>Gestion de budget</h1>
                </header>

                <main>
                    <table>
                        <thead>
                            <tr>
                                <th>Chapitre</th>
                                <th>Nom</th>
                                <th>Montant</th>
                                <th>Date de début</th>
                                <th>Date de fin</th>
                                <th>Revenus</th>
                                <th>Dépenses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Loyer</td>
                                <td>500€</td>
                                <td>01/04/2023</td>
                                <td>30/04/2023</td>
                                <td>0€</td>
                                <td>500€</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Alimentation</td>
                                <td>200€</td>
                                <td>01/04/2023</td>
                                <td>30/04/2023</td>
                                <td>500€</td>
                                <td>0€</td>
                            </tr>
                        </tbody>
                    </table>

                    <button class="add-btn buttonform">Ajouter un chapitre</button>

                    <div class="form-popup" id="myForm">
                        <div class="form-container">
                            <span class="close">&times;</span>
                            <h2>Ajouter un chapitre</h2>
                            <form>
                                <div class="form-group">
                                    <label for="chapitre">Chapitre</label>
                                    <input type="number" id="chapitre" name="chapitre" required>
                                </div>
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" id="nom" name="nom" required>
                                </div>
                                <div class="form-group">
                                    <label for="montant">Montant</label>
                                    <input type="number" id="montant" name="montant" required>
                                </div>
                                <div class="form-group">
                                    <label for="date-debut">Date de début</label>
                                    <input type="date" id="date-debut" name="date-debut" required>
                                </div>
                                <div class="form-group">
                                    <label for="date-fin">Date de fin</label>
                                    <input type="date" id="date-fin" name="date-fin" required>
                                </div>
                                <div class="form-group">
                                    <label for="revenus">Revenus</label>
                                    <input type="number" id="revenus" name="revenus" required>
                                </div>
                                <div class="form-group">
                                    <label for="depenses">Dépenses</label>
                                    <input type="number" id="depenses" name="depenses" required>

                               
                                </div>
                            </form>
                        
    

                        </div>
                    </div>
</body>

</html>
