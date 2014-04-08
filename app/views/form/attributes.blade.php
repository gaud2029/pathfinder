<div id="character" class="form-block">

    <h2>Attributes</h2>

    <div class="table-responsive">
        <table class="table" id="attributes">
            <thead>
            <tr>
                <th class="attribute-field"></th>
                <th class="attribute-field">Attribute Score</th>
                <th class="attribute-field">Item Bonus</th>
                <th class="attribute-field">Attribute Modifier</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($attributeForms as $form)
            <tr class="attribute">
                <th class="attribute-key">{{ $form->key->render() }}</th>
                <td>{{ $form->score->render() }}</td>
                <td>{{ $form->bonus->render() }}</td>
                <td>{{ $form->modifier->render() }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
