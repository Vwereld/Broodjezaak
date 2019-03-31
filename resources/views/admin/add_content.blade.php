
<div class="hentry group">
    <h2 style="text-align: center;">Broodjeszaak</h2>
    {!! Form::open(['url' =>route('shop.store'), 'class'=> 'contact-form', 'method' =>'POST','enctype' =>'multipart/form-data']) !!}
    {{csrf_field()}}
    <div class="short-table white">
        <div class="short-table white">
            <table style="width:80%; margin-left: 170px;" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th>Soort brood</th>
                </tr>
                </thead>
                <tbody>
                <td>
                    @foreach($items as $item)
                        <tr>
                            @if($item->type == 'brood')
                                <td>
                                    {{$item->name}}
                                    <input name="brood" type="checkbox" value="{{$item->id}}">
                                </td>
                            @endif
                            @endforeach
                        </tr>
                        <tr>
                            <th>Soort brood</th>
                        <tr>
                            <td>

                                <select class="dropdownHeader beleg" style="width: 100%;" id="beleg"
                                        name="beleg" multiple>
                                    @if(isset($belegItems))
                                        @foreach($belegItems as $beleg)
                                            <option value="{{$beleg->id}}">{{$beleg->name}}
                                            </option>

                                        @endforeach
                                    @endif
                                </select>
                            </td>
                        </tr>
                <th>Saus</th>
                <tr>
                    <td>
                        <select class="dropdownHeader beleg" style="width: 100%;" id="saus"
                                name="saus">
                            @if(isset($sauses))
                                @foreach($sauses as $saus)
                                    <option value="{{$saus->id}}">{{$saus->name}}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                        @if(isset($smos))
                            @foreach($smos as $smositem)
                                <input name="{{$smositem->name}}" type="checkbox" value="{{$smositem->id}}">
                                {{$smositem->name}} ?
                            @endforeach
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>
            <span style="margin-left: 170px;">
            {!! Form::button('Plaats bestelling',['class'=>'btn-the-salmon-dance-3', 'type'=>'submit']) !!}
            </span>
        </div>
        {{Form::close()}}
    </div>

</div>

