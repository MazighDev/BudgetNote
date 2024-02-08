{{-- 

                    <form method="GET" action="/list">
                            @csrf
                          
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
                              
                               
                                <tr>
                                  <td>{{ $Revenuselect->type_revenu }}</td>
                                  <td>{{ $Revenuselect->montant_revenu }}</td>
                                  <td>{{ $Revenuselect->date_revenu }}</td>
                                  <td>{{ $Revenuselect->description_revenu }}</td>
                                  <td>
                                    <button class="modifierRevenu">Modifier</button>
                                    <button class="supprimerRevenu">Supprimer</button>
                                  </td>
                                </tr>
                             
                            
                            </table>
                          </form> --}}
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
                        <form method="POST" action="/updaterevenu/{{ $Revenuselect->id }}">
                            @csrf
                            @method('put')
                            <fieldset style="padding: 20px 200px;">
                                <legend>Ajouter un Revenu</legend>
                                <label for="type_revenu">Type de Revenu :</label>
                                <select id="type_revenu" name="type_revenu" class="type_revenu">
                                    <option value="salaire"
                                        {{ $Revenuselect->type_revenu == 'salaire' ? 'selected' : '' }}>
                                        salaire</option>
                                    <option value="prime"
                                        {{ $Revenuselect->type_revenu == 'prime' ? 'selected' : '' }}>prime
                                    </option>
                                    <option value="autres"
                                        {{ $Revenuselect->type_revenu == 'autres' ? 'selected' : '' }}>
                                        autres</option>
                                </select>

                                <label for="montant_revenu">Montant :</label>
                                <input type="number" id="montant_revenu" name="montant_revenu"
                                    value="{{ $Revenuselect->montant_revenu }}">

                                <label for="date_revenu">Date :</label>
                                <input type="date" id="date_revenu" name="date_revenu"
                                    value="{{ $Revenuselect->date_revenu }}">

                                <label for="description_revenu">Description :</label>
                                <input type="text" id="description_revenu" name="description_revenu"
                                    value="{{ $Revenuselect->description_revenu }}">


                                <input type="submit" value="Modifier">

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
                                    @foreach ($Revenus as $revenu)
                                        <tr>
                                            <td>{{ $revenu->type_revenu }}</td>
                                            <td>{{ $revenu->montant_revenu }}</td>
                                            <td>{{ $revenu->date_revenu }}</td>
                                            <td>{{ $revenu->description_revenu }}</td>
                                            <td>

                                                <button type="button" class="modifierRevenu"
                                                    onclick=location.href="/editrevenu/{{ $revenu->id }}">Modifier</button>
                                                @method('DELETE')
                                                @csrf
                                                <button class="supprimerRevenu"
                                                    formaction="{{ route('revenu.delete', $revenu->id) }}">Supprimer</button>


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
