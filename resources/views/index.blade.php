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
            <h2>Accueil</h2>
            <div class="ctn1">
                <table>
                    <caption>Liste des Dépenses</caption>
                    <thead>
                        <tr>
                            <th>Type de Dépense</th>
                            <th>Montant</th>
                            <th>Date</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="POST" action="">
                            @csrf
                            @foreach($Depenses as $Depense)
                                <tr>
                                    <td>{{ $Depense->type_depense }}</td>
                                    <td>{{ $Depense->montant_depense }}</td>
                                    <td>{{ $Depense->date_depense }}</td>
                                    <td>{{ $Depense->description_depense }}</td>
            
                                </tr>
                            @endforeach
                        </form>
                        
                    </tbody>
                </table>
                &nbsp;
                <table>
                    <caption>Liste des revenus</caption>
                    <thead>
                      <tr>
                        <th>Type de revenu</th>
                        <th>Montant</th>
                        <th>Date</th>
                        <th>Description</th>
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
                              
                                </tr>
                            @endforeach
                        </form>
                        
                    </tbody>
                </table>
            </div>
            <p><span style="color: blue">Total Budget</span>{{$totalrevenu-$totaldepense}}</p>
            <p><span style="color: red;"> Depense:</span>{{$totaldepense}}</p>
            <p><span style="color: green">Total Revenu:</span>{{$totalrevenu}}</p>

        </div>
    </div>
</body>

</html>
