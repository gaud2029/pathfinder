<div id="character">

    <h2>Character</h2>

    <div class="table-responsive">
        <table class="table">

        </table>
    </div>

    <div class="table-responsive">
        <table class="table" id="character_classes">
            <thead>
                <tr>
                    <th></th>
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
                    <td class="sequence">{{ $form->index }}</td>
                    <td class="favored">{{ $form->favored->render() }}</td>
                    <td>{{ $form->class->render() }}</td>
                    <td>{{ $form->skillRanks->render() }}</td>
                    <td class="hitdie">{{ $form->hitDie->render() }}</td>
                    <td><span class="">{{ $form->level->render() }}</span></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="leveling_info">
                <tr>
                    <td colspan="3">Favored class has +1 HP or skill rank</td>
                    <td>+{{ $intModifier }}<br/>per level</td>
                    <td>+{{ $conModifier }}<br/>per level</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
