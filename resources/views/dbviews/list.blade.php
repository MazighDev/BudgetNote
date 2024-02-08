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
                              
                                @foreach($Revenus as $revenu)
                                <tr>
                                  <td>{{ $revenu->type_revenu }}</td>
                                  <td>{{ $revenu->montant_revenu }}</td>
                                  <td>{{ $revenu->date_revenu }}</td>
                                  <td>{{ $revenu->description_revenu }}</td>
                                  <td>
                                    <button class="modifierRevenu">Modifier</button>
                                    <button class="supprimerRevenu">Supprimer</button>
                                  </td>
                                </tr>
                                @endforeach
                            
                            </table>
                          </form>
                      --}}