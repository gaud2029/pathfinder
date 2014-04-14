<div id="skills" class="form-block">

    <h2>Skills</h2>

    <div class="table-responsive">
        <table class="table" id="character_classes">
            <thead>
                <tr>
                    <th></th>
                    <th>Untrained</th>
                    <th>Skill Bonus</th>
                    <th>Ability Modifier</th>
                    <th>Class Skill</th>
                    <th>Ranks</th>
                    <th>Racial, Feats</th>
                    <th>Misc</th>
                    <th>AC Penalty</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skillForms as $form)
                <tr class="character_class">
                    <td>{{ $form->skill->render() }}</td>
                    <td>{{ $form->untrained->render() }}</td>
                    <td>{{ $form->bonus->render() }}</td>
                    <td>{{ $form->modifier->render() }}</td>
                    <td>{{ $form->classSkill->render() }}</td>
                    <td>{{ $form->ranks->render() }}</td>
                    <td>{{ $form->racialOrFeats->render() }}</td>
                    <td>{{ $form->misc->render() }}</td>
                    <td>{{ $form->acPenalty->render() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
