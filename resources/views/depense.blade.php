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
            <h2>Dépense</h2>
            <div class="ctn1">
                <div id="invoice">


                    <!--                 Container For Showing EXPENSE ANF Income                          -->
                    <div class="row">


                        <h1>Gestion des Dépense</h1>
                        <form method="POST" action="/adddepense">
                            @csrf
                            <fieldset style="padding: 20px 200px;">
                                <legend>Ajouter une Dépense</legend>
                                <label for="type_depense">Type de Dépense :</label>
                                <select id="type_depense" name="type_depense" class="type">
                                    <option value="courante" {{ old('type_depense') == 'courante' ? 'selected' : '' }}>
                                        courante</option>
                                    <option value="fixe" {{ old('type_depense') == 'fixe' ? 'selected' : '' }}>fixe
                                    </option>
                                    <option value="occasionnelle"
                                        {{ old('type_depense') == 'occasionnelle' ? 'selected' : '' }}>occasionnelle
                                    </option>
                                </select>
                                @error('type_depense')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="montant_depense">Montant :</label>
                                <input type="number" id="montant_depense" name="montant_depense"
                                    value="{{ old('montant_depense') }}">
                                @error('montant_depense')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="date_depense">Date :</label>
                                <input type="date" id="date_depense" name="date_depense"
                                    value="{{ old('date_depense') }}">
                                @error('date_depense')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="description_depense">Description :</label>
                                <input type="text" id="description_depense" name="description_depense"
                                    value="{{ old('description_depense') }}">
                                @error('description_depense')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="submit" value="Ajouter">
                            </fieldset>
                        </form>

                        <table>
                            <caption>Liste des Dépenses</caption>
                            <thead>
                                <tr>
                                    <th>Type de Dépense</th>
                                    <th>Montant</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form method="POST" action="">
                                    @csrf
                                    @foreach($Depenses as $Depense)
                                        <tr>
                                            <td>{{ $Depense->type_depense }}</td>
                                            <td>{{ $Depense->montant_depense }}</td>
                                            <td>{{ $Depense->date_depense }}</td>`
                                            <td>{{ $Depense->description_depense }}</td>
                                            <td>
                                                
                                                <button type="button" class="modifierDepense"  onclick=location.href="editdepense/{{$Depense->id }}">Modifier</button>
                                                
                                                @method('DELETE')
                                                @csrf
                                                <button class="supprimerDepense" formaction="{{ route('depense.delete', $Depense->id) }}">Supprimer</button>
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
