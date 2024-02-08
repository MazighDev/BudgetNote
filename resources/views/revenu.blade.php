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
            <h2>Revenue</h2>
            <div class="ctn1">
                <div id="invoice">


                    <!--                 Container For Showing EXPENSE ANF Income                          -->
                    <div class="row">


                        <h1>Gestion des revenus</h1>
                        <form method="POST" action="/addrevenu">
                            @csrf
                            <fieldset style="padding: 20px 200px;">
                                <legend>Ajouter un Revenu</legend>
                                <label for="type_revenu">Type de Revenu :</label>
                                <select id="type_revenu" name="type_revenu" class="type_revenu">
                                    <option value="salaire" {{ old('type_revenu') == 'salaire' ? 'selected' : '' }}>salaire</option>
                                    <option value="prime" {{ old('type_revenu') == 'prime' ? 'selected' : '' }}>prime</option>
                                    <option value="autres" {{ old('type_revenu') == 'autres' ? 'selected' : '' }}>autres</option>
                                </select>
                                @error('type_revenu')
                                    <div class="alertmessage">{{ $message }}</div>
                                @enderror
                                
                                <label for="montant_revenu">Montant :</label>
                                <input type="number" id="montant_revenu" name="montant_revenu" value="{{ old('montant_revenu') }}">
                                @error('montant_revenu')
                                    <div class="alertmessage">{{ $message }}</div>
                                @enderror
                                
                                <label for="date_revenu">Date :</label>
                                <input type="date" id="date_revenu" name="date_revenu" value="{{ old('date_revenu') }}">
                                @error('date_revenu')
                                    <div class="alertmessage">{{ $message }}</div>
                                @enderror
                                
                                <label for="description_revenu">Description :</label>
                                <input type="text" id="description_revenu" name="description_revenu" value="{{ old('description_revenu') }}">
                                @error('description_revenu')
                                    <div class="alertmessage">{{ $message }}</div>
                                @enderror
                                
                                <input type="submit" value="Ajouter">
                            
                            </fieldset>
                        </form>
                        
                        <table>
                            <caption>Liste des revenus</caption>
                            <thead>
                              <tr>
                                <th>Type de revenu</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                <form method="POST" action="">
                                    @csrf
                                    @foreach($Revenus as $revenu)
                                        <tr>
                                            <td>{{ $revenu->type_revenu }}</td>
                                            <td>{{ $revenu->montant_revenu }}</td>
                                            <td>{{ $revenu->date_revenu }}</td>
                                            <td>{{ $revenu->description_revenu }}</td>
                                            <td>
                                                
                                                <button type="button" class="modifierRevenu"  onclick=location.href="editrevenu/{{$revenu->id }}">Modifier</button>
                                                
                                                @method('DELETE')
                                                @csrf
                                                <button class="supprimerRevenu" formaction="{{ route('revenu.delete', $revenu->id) }}">Supprimer</button>
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
