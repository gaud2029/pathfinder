<?php namespace Pathfinder\Forms\Main;

use WinkForm\Form;

class PlayerForm extends Form
{
    /** @var \WinkForm\Input\TextInput */
    public $player;
    /** @var \WinkForm\Input\TextInput */
    public $campaign;
    /** @var \WinkForm\Input\TextInput */
    public $xp;
    /** @var \WinkForm\Input\TextInput */
    public $nextXp;


    public function __construct()
    {
        parent::__construct();

        $this->player = Form::text('player')->setLabel('Player')->setRequired();
        $this->campaign = Form::text('campaign')->setLabel('Campaign');
        $this->xp = Form::text('xp')->setLabel('XP')->addValidation('numeric');
        $this->nextXp = Form::text('nextXp')->setLabel('next level')->setDisabled('disabled');
    }

    /**
     * render the form
     * @return string
     */
    public function render()
    {
        $nextLevel = $this->fetchNextLevelXp($this->xp->getSelected());
        $this->nextXp->setSelected($nextLevel);

        $data = array(
            'player' => $this->player->render(),
            'campaign' => $this->campaign->render(),
            'xp' => $this->xp->render(),
            'nextXp' => $this->nextXp->render(),
        );

        return \View::make('form.player', $data);
    }

    /**
     * @param int $xp
     * @return int
     */
    protected function fetchNextLevelXp($xp)
    {
        $xp = (int) $xp;
        return (int) \DB::table('character_advancement')->where('fast_xp', '>', $xp)->min('fast_xp');
    }
}
