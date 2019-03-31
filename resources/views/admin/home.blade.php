
<div id="content-page" class="content group">
    <div class="hentry group">
        <h2>Broodjeszaak</h2>
        <div class="short-table white">
            <table style="width:100%" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th class="align-left">ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Type</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td class="align-left">
                            {{$item->id}}
                        </td>
                        <td class="align-left">
                            {{$item->name}}
                        </td>
                        <td class="align-left">
                            {{$item->price}}
                        </td>
                        <td class="align-left">
                            {{$item->type}}
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! Html::link(route('shop'),'Verder naar bestelling',['class'=>'btn btn-the-salmon-dance-3']) !!}
    </div>
</div>

