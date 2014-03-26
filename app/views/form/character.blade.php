<div id="character">

    <h2>Character</h2>

    <table class="table">

    </table>

    <table class="table" id="character_classes">
        <thead>
            <tr>
                <th>Favored</th>
                <th>Classes</th>
                <th>Skill ranks</th>
                <th>Hit die</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classSubForms as $form)
            <tr class="character_class">
                <td>{{ $form->favored->render() }}</td>
                <td>{{ $form->index }}</td>
                <td>{{ $form->class->render() }}</td>
                <td>{{ $form->skillRanks->render() }}</td>
                <td>d{{ $form->hitDie->render() }}</td>
                <td><span class="">{{ $form->level->render() }}</span></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot class="leveling_info">
            <tr>
                <td colspan="2">Favored class has +1 HP or skill rank</td>
                <td><span class="modifier">+{{ $intModifier }}</span><br/>per level</td>
                <td><span class="modifier">+{{ $conModifier }}</span><br/>per level</td>
                <td></td>
            </tr>
        </tfoot>
    </table>

</div>
