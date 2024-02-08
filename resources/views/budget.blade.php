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
    <link rel="stylesheet" href="{{ asset('css/revenu.css') }}">
    <script src="{{ asset('js/index.js') }}" defer></script>
</head>

<body>
    @include('includes.dashhead')

    <div class="mainbody">

        @include('includes.dashnav')

        <div class="contenu2" id="aa1">
            <h2>Budget</h2>
            <div class="ctn1">
                <div id="invoice">


                    <!--                 Container For Showing EXPENSE ANF Income                          -->
                    <div class="row">


                        <h1>Gestion des Chapitre</h1>
                        <form method="POST" action="/addbudget">
                            @csrf
                            <fieldset style="padding: 20px 200px;">
                                <legend>Ajouter un budget</legend>
                                <label for="nom_budget">Nom :</label>
                                <input type="text" id="nom_budget" name="nom_budget" value="{{ old('nom_budget') }}">
                                @error('nom_budget')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="dated_budget">Date début :</label>
                                <input type="date" id="dated_budget" name="dated_budget" value="{{ old('dated_budget') }}">
                                @error('dated_budget')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="datef_budget">Date fin :</label>
                                <input type="date" id="datef_budget" name="datef_budget" value="{{ old('datef_budget') }}">
                                @error('datef_budget')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="revenu_budget">Revenus :</label>
                                <input type="number" id="revenu_budget" name="revenu_budget" value="{{ old('revenu_budget') }}">
                                @error('revenu_budget')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="depense_budget">Dépenses :</label>
                                <input type="number" id="depense_budget" name="depense_budget" value="{{ old('depense_budget') }}">
                                @error('depense_budget')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        
                                <input type="submit" value="Ajouter">
                            </fieldset>
                        </form>
                        

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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Default</td>
                                    <td>{{$totalrevenu-$totaldepense}}</td>
                                    <td>01/04/2023</td>
                                    <td>30/04/2023</td>
                                    <td>{{$totalrevenu}}</td>
                                    <td>{{$totaldepense}}</td>
                                </tr>
                                <form method="POST" action="">
                                    @csrf
                                    @foreach($Budgets as $Budget)
                                        <tr>
                                            <td>{{ $Budget->id }}</td>
                                            <td>{{ $Budget->nom_budget }}</td>
                                            <td>{{ $Budget->montant_budget }}€</td>
                                            <td>{{ $Budget->dated_budget }}</td>
                                            <td>{{ $Budget->datef_budget }}</td>
                                            <td>{{ $Budget->revenu_budget }}€</td>
                                            <td>{{ $Budget->depense_budget }}€</td>
                                            <td>
                                                
                                           
                                                
                                                @method('DELETE')
                                                @csrf
                                                <button class="supprimerDepense" formaction="{{ route('budget.delete', $Budget->id) }}">Supprimer</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </form>
                            </tbody>
                        </table>



                    </div>
                    <!--        Closing div for        PDF                           -->
                </div>
            </div>

        </div>
    </div>
</body>

</html>
