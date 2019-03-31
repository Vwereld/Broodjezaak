@if(isset($dataName) && isset($data))
    <div class="hentry group">
        <h2 style="text-align: center;">Broodjeszaak</h2>
        <div class="short-table white">
            <div class="short-table white">
                <table style="width:90%; margin-left: 50px;" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th>Bestelling</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <p style="text-align: left;">Een <span
                                    class="info-bestelling">{{$dataName[$data['brood']]}}</span> broodje
                                @if($dataName[$data['smos']] != Null) met <span
                                    class="info-bestelling"> {{$dataName[$data['smos']]}}</span> @endif
                                als beleg <span class="info-bestelling"> {{$dataName[$data['beleg']]}} </span> als saus
                                <span class="info-bestelling">{{$dataName[$data['saus']]}}</span>
                            </p>
                            <p style="text-align: left;">Kostprijs: {{$sum}}</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <h2 style="text-align: center;">Bestellingen nog uit te voeren:</h2>
                <table style="width:90%; margin-left: 50px;" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th>Soort brood</th>
                        <th>Beleg</th>
                        <th>Saus</th>
                        <th>Smos</th>
                        <th>Prijs</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            {{$dataName[$data['brood']]}}
                        </td>
                        <td>
                            {{$dataName[$data['beleg']]}}
                        </td>
                        <td>
                            {{$dataName[$data['saus']]}}
                        </td>
                        <td>
                            @if($dataName[$data['smos']] != Null)  yes
                            @else none
                            @endif
                        </td>
                        <td>
                            {{$sum}}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <span style="float: left; margin-left: 50px;">
            {!! Form::open(['url'=>route('admin.destroy',['carts' => $carts->id]),'class'=>'form-horizontal', 'method'=>'POST']) !!}
                    {{method_field('DELETE')}}
                    {!! Form::button('Verder gaan',['class'=>'btn btn-the-salmon-dance-3','type' => 'submit']) !!}
                    {!! Form::close() !!}
            </span>
                <span style="float:right; margin-right: 120px;">
            {!! Form::open(['url'=>route('shop.destroy',['carts' => $carts->id]),'class'=>'form-horizontal', 'method'=>'POST']) !!}
                    {{method_field('DELETE')}}
                    {!! Form::button('cancel order',['class'=>'btn btn-french-5','type' => 'submit']) !!}
                    {!! Form::close() !!}
                </span>
                <h2 style="text-align: center;">Uitgevoerde bestellingen:</h2>
                <table style="width:90%; margin-left: 50px;" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th>Time and date</th>
                        <th>Soort brood (id)</th>
                        <th>Beleg (id)</th>
                        <th>Saus (id)</th>
                        <th>Smos (id)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($completed as $value)
                        @if($value->deleted_at !=NULL)
                            <tr>
                                <td>  {{$value->deleted_at}}</td>
                                <td>
                                    {{$value->brood}}
                                </td>
                                <td>
                                    {{$value->beleg}}
                                </td>
                                <td>
                                    {{$value->saus}}
                                </td>
                                <td>
                                    @if($value->smos == '16')
                                        yes
                                    @else($value->smos == NULL)
                                        none
                                    @endif
                                </td>
                            </tr>
                    </tbody>
                    @endif
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endif
