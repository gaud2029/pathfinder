<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeats extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feats', function(Blueprint $table) {
			$table->increments('feat_id');
			$table->string('name');
			$table->string('feat_type');
            $table->string('prerequisites')->nullable();
			$table->string('effect')->nullable();
            $table->string('description')->nullable();
			$table->string('benefit');
			$table->string('special')->nullable();
		});

        Db::table('feats')->insert(array(array(
            'name' => 'Acrobatic',
            'feat_type' => 'Skill Bonus',
            'prerequisites' => '',
            'effect' => 'Acrobatics, Fly',
            'description' => "You are skilled at leaping, jumping, and flying.",
            'benefit' => "You get a +2 bonus on all Acrobatics and Fly skill checks. If you have 10 or more ranks in one of these skills, the bonus increases to +4 for that skill.",
            'special' => "",
        ), array(
            'name' => 'Acrobatic Steps',
            'feat_type' => 'Movement',
            'prerequisites' => 'DEX:15, Nimble Moves',
            'effect' => '',
            'description' => "You can easily move over and through obstacles.",
            'benefit' => "Whenever you move, you may move through up to 15 feet of difficult terrain each round as if it were normal terrain. The effects of this feat stack with those provided by Nimble Moves (allowing you to move normally through a total of 20 feet of difficult terrain each round).",
            'special' => "",
        ), array(
            'name' => 'Agile Maneuvers (Combat)',
            'feat_type' => 'Normal',
            'prerequisites' => '',
            'effect' => 'CMB gets DEX in place of STR',
            'description' => "You've learned to use your quickness in place of brute force when performing combat maneuvers.",
            'benefit' => "You add your Dexterity bonus to your base attack bonus and size bonus when determining your Combat Maneuver Bonus (see Combat) instead of your Strength bonus.",
            'special' => "",
        ), array(
            'name' => 'Alertness',
            'feat_type' => 'Skill Bonus',
            'prerequisites' => '',
            'effect' => 'Perception, Sense Motive',
            'description' => "You often notice things that others might miss.",
            'benefit' => "You get a +2 bonus on Perception and Sense Motive skill checks. If you have 10 or more ranks in one of these skills, the bonus increases to +4 for that skill.",
            'special' => "",
        ), array(
            'name' => 'Alignment Channel',
            'feat_type' => 'Magic',
            'prerequisites' => 'Ability to channel energy.',
            'effect' => '',
            'description' => "Choose chaos, evil, good, or law. You can channel divine energy to affect outsiders that possess this subtype.",
            'benefit' => "Instead of its normal effect, you can choose to have your ability to channel energy heal or harm outsiders of the chosen alignment subtype. You must make this choice each time you channel energy. If you choose to heal or harm creatures of the chosen alignment subtype, your channel energy has no effect on other creatures. The amount of damage healed or dealt and the DC to halve the damage is otherwise unchanged.",
            'special' => "You can gain this feat multiple times. Its effects do not stack. Each time you take this feat, it applies to a new alignment subtype. Whenever you channel energy, you must choose which type to effect.",
        ), array(
            'name' => 'Animal Affinity',
            'feat_type' => 'Skill Bonus',
            'prerequisites' => '',
            'effect' => 'Handle Animal, Ride',
            'description' => "You are skilled at working with animals and mounts.",
            'benefit' => "You get a +2 bonus on all Handle Animal and Ride skill checks. If you have 10 or more ranks in one of these skills, the bonus increases to +4 for that skill.",
            'special' => "",
        ), array(
            'name' => 'Arcane Armor Mastery',
            'feat_type' => 'Combat',
            'prerequisites' => 'Arcane Armor Training, Medium Armor Proficiency, caster level 7th.',
            'effect' => '',
            'description' => "You have mastered the ability to cast spells while wearing armor.",
            'benefit' => "As a swift action, reduce the arcane spell failure chance due to the armor you are wearing by 20% for any spells you cast this round. This bonus replaces, and does not stack with, the bonus granted by Arcane Armor Training.",
            'special' => "",
        ), array(
            'name' => 'Arcane Armor Training',
            'feat_type' => 'Combat',
            'prerequisites' => 'Light Armor Proficiency, caster level 3rd.',
            'effect' => '',
            'description' => "You have learned how to cast spells while wearing armor.",
            'benefit' => "As a swift action, reduce the arcane spell failure chance due to the armor you are wearing by 10% for any spells you cast this round.",
            'special' => "",
        ), array(
            'name' => 'Arcane Strike',
            'feat_type' => 'Combat',
            'prerequisites' => 'Ability to cast arcane spells.',
            'effect' => '',
            'description' => "You draw upon your arcane power to enhance your weapons with magical energy.",
            'benefit' => "As a swift action, you can imbue your weapons with a fraction of your power. For 1 round, your weapons deal +1 damage and are treated as magic for the purpose of overcoming damage reduction. For every five caster levels you possess, this bonus increases by +1, to a maximum of +5 at 20th level.",
            'special' => "",
        ), array(
            'name' => 'Armor Proficiency, Heavy',
            'feat_type' => 'Normal',
            'prerequisites' => 'Light Armor Proficiency, Medium Armor Proficiency.',
            'effect' => 'AC-penalty only for DEX and STR based skill checks',
            'description' => "You are skilled at wearing heavy armor.",
            'benefit' => "When you wear a type of armor with which you are proficient, the armor check penalty for that armor applies only to Dexterity- and Strength-based skill checks.",
            'special' => "Fighters and paladins automatically have Heavy Armor Proficiency as a bonus feat. They need not select it.",
        ), array(
            'name' => 'Armor Proficiency, Light',
            'feat_type' => 'Normal',
            'prerequisites' => '',
            'effect' => 'AC-penalty only for DEX and STR based skill checks',
            'description' => "You are skilled at wearing light armor.",
            'benefit' => "When you wear a type of armor with which you are proficient, the armor check penalty for that armor applies only to Dexterity- and Strength-based skill checks.",
            'special' => "All characters except monks, sorcerers, and wizards automatically have Light Armor Proficiency as a bonus feat. They need not select it.",
        ), array(
            'name' => 'Armor Proficiency, Medium',
            'feat_type' => 'Normal',
            'prerequisites' => '',
            'effect' => 'AC-penalty only for DEX and STR based skill checks',
            'description' => "You are skilled at wearing medium armor.",
            'benefit' => "When you wear a type of armor with which you are proficient, the armor check penalty for that armor applies only to Dexterity- and Strength-based skill checks.",
            'special' => " Barbarians, clerics, druids, fighters, paladins, and rangers automatically have Medium Armor Proficiency as a bonus feat. They need not select it.",
        ), array(
            'name' => 'Athletic',
            'feat_type' => 'Skill Bonus',
            'prerequisites' => '',
            'effect' => 'Climb, Swim',
            'description' => "You possess inherent physical prowess.",
            'benefit' => "You get a +2 bonus on Climb and Swim skill checks. If you have 10 or more ranks in one of these skills, the bonus increases to +4 for that skill.",
            'special' => "",
        ), array(
            'name' => 'Augment Summoning',
            'feat_type' => 'Magic',
            'prerequisites' => 'Spell Focus (conjuration)',
            'effect' => '',
            'description' => "Your summoned creatures are more powerful and robust.",
            'benefit' => "Each creature you conjure with any summon spell gains a +4 enhancement bonus to Strength and Constitution for the duration of the spell that summoned it.",
            'special' => "",
        ), array(
            'name' => 'Bleeding Critical',
            'feat_type' => 'Combat',
            'prerequisites' => 'Critical Focus, base attack bonus +11',
            'effect' => '',
            'description' => "Your critical hits cause opponents to bleed profusely.",
            'benefit' => "Whenever you score a critical hit with a slashing or piercing weapon, your opponent takes 2d6 points of bleed damage (see Conditions) each round on his turn, in addition to the damage dealt by the critical hit. Bleed damage can be stopped by a DC 15 Heal skill check or through any magical healing. The effects of this feat stack.",
            'special' => "You can only apply the effects of one critical feat to a given critical hit unless you possess Critical Mastery.",
        ), array(
            'name' => 'Blind-Fight',
            'feat_type' => 'Combat',
            'prerequisites' => '',
            'effect' => '',
            'description' => "You are skilled at attacking opponents that you cannot clearly perceive.",
            'benefit' => "In melee, every time you miss because of concealment (see Combat), you can reroll your miss chance percentile roll one time to see if you actually hit. An invisible attacker gets no advantages related to hitting you in melee. That is, you don't lose your Dexterity bonus to Armor Class, and the attacker doesn't get the usual +2 bonus for being invisible. The invisible attacker's bonuses do still apply for ranged attacks, however. You do not need to make Acrobatics skill checks to move at full speed while blinded.",
            'special' => "The Blind-Fight feat is of no use against a character who is the subject of a blink spell.",
        ), array(
            'name' => 'Blinding Critical',
            'feat_type' => 'Combat',
            'prerequisites' => 'Critical Focus, base attack bonus +15',
            'effect' => '',
            'description' => "Your critical hits blind your opponents.",
            'benefit' => "Whenever you score a critical hit, your opponent is permanently blinded. A successful Fortitude save reduces this to dazzled for 1d4 rounds. The DC of this Fortitude save is equal to 10 + your base attack bonus. This feat has no effect on creatures that do not rely on eyes for sight or creatures with more than two eyes (although multiple critical hits might cause blindness, at the GM's discretion). Blindness can be cured by heal, regeneration, remove blindness, or similar abilities.",
            'special' => "You can only apply the effects of one critical feat to a given critical hit unless you possess Critical Mastery.",
        ), array(
            'name' => 'Brew Potion',
            'feat_type' => 'Item Creation',
            'prerequisites' => 'Caster level 3rd',
            'effect' => '',
            'description' => "You can create magic potions.",
            'benefit' => "You can create a potion of any 3rd-level or lower spell that you know and that targets one or more creatures or objects. Brewing a potion takes 2 hours if its base price is 250 gp or less, otherwise brewing a potion takes 1 day for each 1,000 gp in its base price. When you create a potion, you set the caster level, which must be sufficient to cast the spell in question and no higher than your own level. To brew a potion, you must use up raw materials costing one half this base price. See the magic item creation rules in Magic Items for more information. When you create a potion, you make any choices that you would normally make when casting the spell. Whoever drinks the potion is the target of the spell.",
            'special' => "",
        ), array(
            'name' => 'Catch Off-Guard',
            'feat_type' => 'Combat',
            'prerequisites' => '',
            'effect' => '',
            'description' => "Foes are surprised by your skilled use of unorthodox and improvised weapons.",
            'benefit' => "You do not suffer any penalties for using an improvised melee weapon. Unarmed opponents are flat-footed against any attacks you make with an improvised melee weapon.",
            'special' => "",
        ), array(
            'name' => 'Channel Smite',
            'feat_type' => 'Combat',
            'prerequisites' => 'Channel energy class feature',
            'effect' => '',
            'description' => "You can channel your divine energy through a melee weapon you wield.",
            'benefit' => "Before you make a melee attack roll, you can choose to spend one use of your channel energy ability as a swift action. If you channel positive energy and you hit an undead creature, that creature takes an amount of additional damage equal to the damage dealt by your channel positive energy ability. If you channel negative energy and you hit a living creature, that creature takes an amount of additional damage equal to the damage dealt by your channel negative energy ability. Your target can make a Will save, as normal, to halve this additional damage. If your attack misses, the channel energy ability is still expended with no effect.",
            'special' => "",
        ), array(
            'name' => 'Cleave',
            'feat_type' => 'Combat',
            'prerequisites' => 'Str 13, Power Attack, base attack bonus +1',
            'effect' => '',
            'description' => "You can strike two adjacent foes with a single swing.",
            'benefit' => "As a standard action, you can make a single attack at your full base attack bonus against a foe within reach. If you hit, you deal damage normally and can make an additional attack (using your full base attack bonus) against a foe that is adjacent to the first and also within reach. You can only make one additional attack per round with this feat. When you use this feat, you take a –2 penalty to your Armor Class until your next turn.",
            'special' => "",
        ), array(
            'name' => 'Combat Casting',
            'feat_type' => 'Combat',
            'prerequisites' => '',
            'effect' => '',
            'description' => "You are adept at spellcasting when threatened or distracted.",
            'benefit' => "You get a +4 bonus on concentration checks made to cast a spell or use a spell-like ability when casting on the defensive or while grappled.",
            'special' => "",
        ), array(
            'name' => 'Combat Expertise',
            'feat_type' => 'Combat',
            'prerequisites' => 'Int 13',
            'effect' => '',
            'description' => "You can increase your defense at the expense of your accuracy.",
            'benefit' => "You can choose to take a –1 penalty on melee attack rolls and combat maneuver checks to gain a +1 dodge bonus to your Armor Class. When your base attack bonus reaches +4, and every +4 thereafter, the penalty increases by –1 and the dodge bonus increases by +1. You can only choose to use this feat when you declare that you are making an attack or a full-attack action with a melee weapon. The effects of this feat last until your next turn.",
            'special' => "",
        ), array(
            'name' => 'Combat Reflexes',
            'feat_type' => 'Combat',
            'prerequisites' => '',
            'effect' => '',
            'description' => "You can make additional attacks of opportunity.",
            'benefit' => "You may make a number of additional attacks of opportunity per round equal to your Dexterity bonus. With this feat, you may also make attacks of opportunity while flat-footed.",
            'special' => "The Combat Reflexes feat does not allow a rogue to use her opportunist ability more than once per round.",
        ), array(
            'name' => 'Command Undead',
            'feat_type' => 'Magic',
            'prerequisites' => 'Channel negative energy class feature',
            'effect' => '',
            'description' => "Using foul powers of necromancy, you can command undead creatures, making them into your servants.",
            'benefit' => "As a standard action, you can use one of your uses of channel negative energy to enslave undead within 30 feet. Undead receive a Will save to negate the effect. The DC for this Will save is equal to 10 + 1/2 your cleric level + your Charisma modifier. Undead that fail their saves fall under your control, obeying your commands to the best of their ability, as if under the effects of control undead. Intelligent undead receive a new saving throw each day to resist your command. You can control any number of undead, so long as their total Hit Dice do not exceed your cleric level. If you use channel energy in this way, it has no other effect (it does not heal or harm nearby creatures). If an undead creature is under the control of another creature, you must make an opposed Charisma check whenever your orders conflict.",
            'special' => "",
        ), array(
            'name' => 'Craft Magic Arms and Armor',
            'feat_type' => 'Item Creation',
            'prerequisites' => 'Caster level 5th',
            'effect' => '',
            'description' => "You can create magic armor, shields, and weapons.",
            'benefit' => "You can create magic weapons, armor, or shields. Enhancing a weapon, suit of armor, or shield takes 1 day for each 1,000 gp in the price of its magical features. To enhance a weapon, suit of armor, or shield, you must use up raw materials costing half of this total price. See the magic item creation rules in Magic Items for more information. The weapon, armor, or shield to be enhanced must be a masterwork item that you provide. Its cost is not included in the above cost. You can also mend a broken magic weapon, suit of armor, or shield if it is one that you could make. Doing so costs half the raw materials and half the time it would take to craft that item in the first place.",
            'special' => "",
        ), array(
            'name' => 'Craft Rod',
            'feat_type' => 'Item Creation',
            'prerequisites' => 'Caster level 9th',
            'effect' => '',
            'description' => "You can create magic rods.",
            'benefit' => "You can create magic rods. Crafting a rod takes 1 day for each 1,000 gp in its base price. To craft a rod, you must use up raw materials costing half of its base price. See the magic item creation rules in Magic Items for more information.",
            'special' => "",
        ), array(
            'name' => 'Craft Staff',
            'feat_type' => 'Item Creation',
            'prerequisites' => 'Caster level 11th',
            'effect' => '',
            'description' => "You can create magic staves.",
            'benefit' => "You can create any staff whose prerequisites you meet. Crafting a staff takes 1 day for each 1,000 gp in its base price. To craft a staff, you must use up raw materials costing half of its base price. A newly created staff has 10 charges. See the magic item creation rules in Magic Items for more information.",
            'special' => "",
        ), array(
            'name' => 'Craft Wand',
            'feat_type' => 'Item Creation',
            'prerequisites' => 'Caster level 5th',
            'effect' => '',
            'description' => "You can create magic staves.",
            'benefit' => "You can create a wand of any 4th-level or lower spell that you know. Crafting a wand takes 1 day for each 1,000 gp in its base price. To craft a wand, you must use up raw materials costing half of this base price. A newly created wand has 50 charges. See the magic item creation rules in Magic Items for more information.",
            'special' => "",
        ), array(
            'name' => 'Craft Wondrous Item',
            'feat_type' => 'Item Creation',
            'prerequisites' => 'Caster level 3rd',
            'effect' => '',
            'description' => "You can create wondrous items, a type of magic item.",
            'benefit' => "You can create a wide variety of magic wondrous items. Crafting a wondrous item takes 1 day for each 1,000 gp in its price. To create a wondrous item, you must use up raw materials costing half of its base price. See the magic item creation rules in Magic Items for more information. You can also mend a broken wondrous item if it is one that you could make. Doing so costs half the raw materials and half the time it would take to craft that item.",
            'special' => "",
        ), array(
            'name' => 'Critical Focus',
            'feat_type' => 'Combat',
            'prerequisites' => 'Base attack bonus +9.',
            'effect' => '',
            'description' => "You are trained in the art of causing pain.",
            'benefit' => "You receive a +4 circumstance bonus on attack rolls made to confirm critical hits.",
            'special' => "",
        ), array(
            'name' => 'Critical Mastery',
            'feat_type' => 'Combat',
            'prerequisites' => 'Critical Focus, any two critical feats, 14th-level fighter.',
            'effect' => '',
            'description' => "Your critical hits cause two additional effects.",
            'benefit' => "When you score a critical hit, you can apply the effects of two critical feats in addition to the damage dealt.",
            'special' => "",
        ), array(
            'name' => 'Dazzling Display',
            'feat_type' => 'Combat',
            'prerequisites' => 'Weapon Focus, proficiency with the selected weapon',
            'effect' => '',
            'description' => "Your skill with your favored weapon can frighten enemies.",
            'benefit' => "While wielding the weapon in which you have Weapon Focus, you can perform a bewildering show of prowess as a full-round action. Make an Intimidate check to demoralize all foes within 30 feet who can see your display.",
            'special' => "",
        ), array(
            'name' => 'Deadly Aim',
            'feat_type' => 'Combat',
            'prerequisites' => 'Dex 13, base attack bonus +1',
            'effect' => '',
            'description' => "You can make exceptionally deadly ranged attacks by pinpointing a foe's weak spot, at the expense of making the attack less likely to succeed.",
            'benefit' => "You can choose to take a –1 penalty on all ranged attack rolls to gain a +2 bonus on all ranged damage rolls. When your base attack bonus reaches +4, and every +4 thereafter, the penalty increases by –1 and the bonus to damage increases by +2. You must choose to use this feat before making an attack roll and its effects last until your next turn. The bonus damage does not apply to touch attacks or effects that do not deal hit point damage.",
            'special' => "",
        ), array(
            'name' => 'Deadly Stroke',
            'feat_type' => 'Combat',
            'prerequisites' => 'Dazzling Display, Greater Weapon Focus, Shatter Defenses, Weapon Focus, proficiency with the selected weapon, base attack bonus +11',
            'effect' => '',
            'description' => "With a well-placed strike, you can bring a swift and painful end to most foes.",
            'benefit' => "As a standard action, make a single attack with the weapon for which you have Greater Weapon Focus against a stunned or flat-footed opponent. If you hit, you deal double the normal damage and the target takes 1 point of Constitution bleed (see Conditions). The additional damage and bleed is not multiplied on a critical hit.",
            'special' => "",
        ), array(
            'name' => 'Deafening Critical',
            'feat_type' => 'Combat',
            'prerequisites' => 'Critical Focus, base attack bonus +13',
            'effect' => '',
            'description' => "Your critical hits cause enemies to lose their hearing.",
            'benefit' => "Whenever you score a critical hit against an opponent, the victim is permanently deafened. A successful Fortitude save reduces the deafness to 1 round. The DC of this Fortitude save is equal to 10 + your base attack bonus. This feat has no effect on deaf creatures. This deafness can be cured by heal, regeneration, remove deafness, or a similar ability.",
            'special' => "You can only apply the effects of one critical feat to a given critical hit unless you possess Critical Mastery.",
        ), array(
            'name' => 'Deceitful',
            'feat_type' => 'Skill Bonus',
            'prerequisites' => '',
            'effect' => 'Bluff, Disguise',
            'description' => "You are skilled at deceiving others, both with the spoken word and with physical disguises.",
            'benefit' => "You get a +2 bonus on all Bluff and Disguise skill checks. If you have 10 or more ranks in one of these skills, the bonus increases to +4 for that skill.",
            'special' => "",
        ), array(
            'name' => 'Defensive Combat Training',
            'feat_type' => 'Normal',
            'prerequisites' => '',
            'effect' => 'CMD gets HP in place of BAB',
            'description' => "You excel at defending yourself from all manner of combat maneuvers.",
            'benefit' => "You treat your total Hit Dice as your base attack bonus when calculating your Combat Maneuver Defense.",
            'special' => "",
        ), array(
            'name' => 'Deflect Arrows',
            'feat_type' => 'Combat',
            'prerequisites' => 'Dex 13, Improved Unarmed Strike',
            'effect' => '',
            'description' => "You can knock arrows and other projectiles off course, preventing them from hitting you.",
            'benefit' => "You must have at least one hand free (holding nothing) to use this feat. Once per round when you would normally be hit with an attack from a ranged weapon, you may deflect it so that you take no damage from it. You must be aware of the attack and not flat-footed. Attempting to deflect a ranged attack doesn't count as an action. Unusually massive ranged weapons (such as boulders or ballista bolts) and ranged attacks generated by natural attacks or spell effects can't be deflected.",
            'special' => "",
        ), array(
            'name' => 'Deft Hands',
            'feat_type' => 'Skill Bonus',
            'prerequisites' => '',
            'effect' => 'Disable Device, Sleight of Hand',
            'description' => "You have exceptional manual dexterity.",
            'benefit' => "You get a +2 bonus on Disable Device and Sleight of Hand skill checks. If you have 10 or more ranks in one of these skills, the bonus increases to +4 for that skill.",
            'special' => "",
        ), array(
            'name' => 'Diehard',
            'feat_type' => 'Combat',
            'prerequisites' => 'Endurance',
            'effect' => '',
            'description' => "You are especially hard to kill. Not only do your wounds automatically stabilize when grievously injured, but you can remain conscious and continue to act even at death's door.",
            'benefit' => "When your hit point total is below 0, but you are not dead, you automatically stabilize. You do not need to make a Constitution check each round to avoid losing additional hit points. You may choose to act as if you were disabled, rather than dying. You must make this decision as soon as you are reduced to negative hit points (even if it isn't your turn). If you do not choose to act as if you were disabled, you immediately fall unconscious. When using this feat, you are staggered. You can take a move action without further injuring yourself, but if you perform any standard action (or any other action deemed as strenuous, including some swift actions, such as casting a quickened spell) you take 1 point of damage after completing the act. If your negative hit points are equal to or greater than your Constitution score, you immediately die.",
            'special' => "",
        ), array(
            'name' => 'Disruptive',
            'feat_type' => 'Combat',
            'prerequisites' => '6th-level fighter',
            'effect' => '',
            'description' => "Your training makes it difficult for enemy spellcasters to safely cast spells near you.",
            'benefit' => "The DC to cast spells defensively increases by +4 for all enemies that are within your threatened area. This increase to casting spells defensively only applies if you are aware of the enemy's location and are capable of taking an attack of opportunity. If you can only take one attack of opportunity per round and have already used that attack, this increase does not apply.",
            'special' => "",
        ), array(
            'name' => 'Dodge',
            'feat_type' => 'Normal',
            'prerequisites' => 'Dex 13',
            'effect' => '+1 dodge',
            'description' => "Your training and reflexes allow you to react swiftly to avoid an opponents' attacks.",
            'benefit' => "You gain a +1 dodge bonus to your AC. A condition that makes you lose your Dex bonus to AC also makes you lose the benefits of this feat.",
            'special' => "",
        ), array(
            'name' => 'Double Slice',
            'feat_type' => 'Combat',
            'prerequisites' => 'Dex 15, Two-Weapon Fighting',
            'effect' => '',
            'description' => "Your off-hand weapon while dual-wielding strikes with greater power.",
            'benefit' => "Add your Strength bonus to damage rolls made with your off-hand weapon.",
            'special' => "",
        ), array(
            'name' => 'Elemental Channel',
            'feat_type' => 'Magic',
            'prerequisites' => 'Channel energy class feature',
            'effect' => '',
            'description' => "Choose one elemental subtype, such as air, earth, fire, or water. You can channel your divine energy to harm or heal outsiders that possess your chosen elemental subtype.",
            'benefit' => "Instead of its normal effect, you can choose to have your ability to channel energy heal or harm outsiders of your chosen elemental subtype. You must make this choice each time you channel energy. If you choose to heal or harm creatures of your elemental subtype, your channel energy has no affect on other creatures. The amount of damage healed or dealt and the DC to halve the damage is otherwise unchanged.",
            'special' => "You can gain this feat multiple times. Its effects do not stack. Each time you take this feat, it applies to a new elemental subtype.",
        ), array(
            'name' => 'Empower Spell',
            'feat_type' => 'Metamagic',
            'prerequisites' => '',
            'effect' => '',
            'description' => "You can increase the power of your spells, causing them to deal more damage.",
            'benefit' => "All variable, numeric effects of an empowered spell are increased by half, including bonuses to those dice rolls. Saving throws and opposed rolls are not affected, nor are spells without random variables. An empowered spell uses up a spell slot two levels higher than the spell’s actual level.",
            'special' => "",

// TODO hier verder bij: Endurance


        ), array(
            'name' => 'Alertness',
            'feat_type' => 'Combat',
            'prerequisites' => '',
            'effect' => '',
            'description' => "",
            'benefit' => "",
            'special' => "",
        ), array(
            'name' => 'Alertness',
            'feat_type' => 'Combat',
            'prerequisites' => '',
            'effect' => '',
            'description' => "",
            'benefit' => "",
            'special' => "",
        ), array(
            'name' => 'Alertness',
            'feat_type' => 'Combat',
            'prerequisites' => '',
            'effect' => '',
            'description' => "",
            'benefit' => "",
            'special' => "",
        ), array(
            'name' => 'Alertness',
            'feat_type' => 'Combat',
            'prerequisites' => '',
            'effect' => '',
            'description' => "",
            'benefit' => "",
            'special' => "",
        ), array(
            'name' => 'Alertness',
            'feat_type' => 'Combat',
            'prerequisites' => '',
            'effect' => '',
            'description' => "",
            'benefit' => "",
            'special' => "",

        )));
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('feats');
	}

}
