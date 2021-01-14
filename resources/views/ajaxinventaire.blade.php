
                           @foreach ($listeInvpieces as $listepiec)
                           <tr>
                              <th scope="row">{{ $listepiec->created_at->format('Y-m-d') }}</th>
                              <th scope="row">  {{$listepiec->name_piece}}</th>
                              <td>{{$listepiec->inventaire}}</td>
                              <td>{{$listepiec->ref}}</td>
                              <td>
                                 {{$listepiec->unite}}
                              </td>
                              <td>
                                 @foreach ($famille as $item)			
                                 @if ($item->id==$listepiec->id_famille )
                                 {{$item->famille}}
                                 @endif	 
                                 @endforeach	
                              </td>
                              <td>@foreach ($sous_famille as $item)			
                                 @if ($item->id==$listepiec->id_sfamille )
                                 {{$item->sousfamille}}
                                 @endif	 
                                 @endforeach	
                              </td>
                              <td>
                                 		
                              </td>
                           </tr>
                           @endforeach
                    
                   