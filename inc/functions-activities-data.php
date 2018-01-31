<?php
/**
 * Advanced activity data
 */

function activity_05() {

	$form_data = array(
		array(
			'id'        => 1,
			'title'     => '[ _____ ] presenti carta',
			'hint'      => 'English: by <span>this</span> present',
			'option 1'  => 'hoc',
			'option 2'  => 'hac',
			'option 3'  => 'illo',
			'answer'    => 'hac'
		),
		array(
			'id'        => 2,
			'title'     => '[ _____ ] est finalis concordia',
			'hint'      => 'English: <span>this</span> is the final concord',
			'option 1'  => 'hic',
			'option 2'  => 'hec',
			'option 3'  => 'hoc',
			'answer'    => 'hec'
		),
		array(
			'id'        => 3,
			'title'     => 'Et preterea [ _____ ] Robertus et Elizabetha dant',
			'hint'      => 'English: and moreover <span>the same</span> Robert and Elizabeth give',
			'option 1'  => 'iisdem',
			'option 2'  => 'iidem',
			'option 3'  => 'eadem',
			'answer'    => 'iidem'
		),
		array(
			'id'        => 4,
			'title'     => '[ _____ ] jus habuerunt',
			'hint'      => 'English: they had <span>no</span> right',
			'option 1'  => 'ullum',
			'option 2'  => 'nullus',
			'option 3'  => 'nullum',
			'answer'    => 'nullum'
		),
		array(
			'id'        => 5,
			'title'     => '[ _____ ] terram non tenent',
			'hint'      => 'English: they do not hold <span>any</span> land',
			'option 1'  => 'nullam',
			'option 2'  => 'ullum',
			'option 3'  => 'ullam',
			'answer'    => 'ullam'
		),
		array(
			'id'        => 6,
			'title'     => 'cum multus [ _____ ]',
			'hint'      => 'English: with many <span>others</span>',
			'option 1'  => 'aliis',
			'option 2'  => 'alius',
			'option 3'  => 'alios',
			'answer'    => 'aliis'
		),
		array(
			'id'        => 7,
			'title'     => 'cum [ _____ ] pertinenciis',
			'hint'      => 'English: with <span>its own</span> appurtenances',
			'option 1'  => 'eius',
			'option 2'  => 'suis',
			'option 3'  => 'suo',
			'answer'    => 'suis'
		),
		array(
			'id'        => 8,
			'title'     => 'tenere de [ _____ ] in capite',
			'hint'      => 'English: to hold <span>of us</span> in chief',
			'option 1'  => 'vobis',
			'option 2'  => 'nobis',
			'option 3'  => 'nos',
			'answer'    => 'nobis'
		),
		array(
			'id'        => 9,
			'title'     => 'reddendo annuatim [ _____ ]',
			'hint'      => 'English: paying annually <span>to me</span>',
			'option 1'  => 'mihi',
			'option 2'  => 'mei',
			'option 3'  => 'me',
			'answer'    => 'mihi'
		),
		array(
			'id'        => 10,
			'title'     => '[ _____ ] sigilla apposuimus',
			'hint'      => 'English: we have affixed <span>our</span> seals',
			'option 1'  => 'nostra',
			'option 2'  => 'vestra',
			'option 3'  => 'noster',
			'answer'    => 'nostra'
		)
	);

	return $form_data;
}

function practice_01() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => '... atque Laurentius Grosse ville de Sowthampton mercator fuit et erat dominus et proprietarius cuiusdam navicule vocate The Diana',
			'reference' => 'HCA 24/68 document no 51',
			'search'    => 'HCA 24/68',
			'answer'    => '... and Lawrence Grosse of the town of Southampton, merchant, was and used to be the master and owner of a certain small boat called The Diana'
		),
		array(
			'id'        => 2,
			'latin'     => '... magna pars terre, quam multi tenentes tenebant ...',
			'reference' => 'SC 9/18 membrane 18',
			'search'    => 'SC 9/18',
			'answer'    => '... a great part of the land, which many tenants were holding ...'
		),
		array(
			'id'        => 3,
			'latin'     => '... idem rex cum dictis duce et archiepiscopo Cantuariensi colloquium habebat ...',
			'reference' => 'C 65/62 membrane 20',
			'search'    => 'C 65/62',
			'answer'    => '... the same king was having a conference with the said duke and archbishop of Canterbury ...'
		),
		array(
			'id'        => 4,
			'latin'     => '... de terris ... quas dictus Ricardus sicut precipuus heres Humfridi de Prato clamabat ...',
			'reference' => 'C 53/113',
			'search'    => 'C 53/113',
			'answer'    => '... concerning lands ... which the said Richard was claiming as the main heir of Humphrey de Prato ...'
		),
		array(
			'id'        => 5,
			'latin'     => 'Et postea exigebat ab eis plures alias consuetudines',
			'reference' => 'KB 26/125 membrane 3',
			'search'    => 'KB 26/125',
			'answer'    => 'And afterwards he was demanding several other customs from them'
		)
	);

	return $form_data;
}

function practice_02() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => '... iidem communes ... gratanter se habuerant ...',
			'reference' => 'C 65/110 membrane 4',
			'search'    => 'C 65/110',
			'answer'    => '... the same commons ... had cheerfully occupied themselves ... (lit: held themselves)'
		),
		array(
			'id'        => 2,
			'latin'     => '... prefatus dominus cancellarius, de mandato eiusdem domini regis, ulterius declaravit, qualiter idem dominus rex, ex ipsorum communium relatione conceperat, quod in civitate London\', et suburbiis eiusdem, gravis pestilentia ceperat iam oriri ...',
			'reference' => 'C 65/92 membrane 17',
			'search'    => 'C 65/92',
			'answer'    => '... the aforesaid lord chancellor, at the command of the same lord king, further declared how the same lord king had understood from the report of the same commons that a great pestilence had now begun to appear in the city of London and its suburbs ...'
		),
		array(
			'id'        => 3,
			'latin'     => 'Et quia predicti clerici sui capti fuerunt et inprisonati per ministros ipsius episcopi, quos miserat ...',
			'reference' => 'SC 9/6 membrane 5, dorse',
			'search'    => 'SC 9/6',
			'answer'    => 'And because his aforesaid clerks were arrested and imprisoned by the officials, whom he had sent, of the same bishop ...'
		),
		array(
			'id'        => 4,
			'latin'     => 'Et quod predictos exitus pro nulla alia causa retinuit per tantum tempus, nisi pro eo quod non portaverat ei breve de sufficienti warranto ..',
			'reference' => 'SC 9/3 membrane 3',
			'search'    => 'SC 9/3',
			'answer'    => 'And that he did not keep the aforesaid issues for such time for any other reason, except for this that he had not brought to him a writ providing sufficient warranty ...'
		),
		array(
			'id'        => 5,
			'latin'     => '... pixidem aperuerunt et sigilla fregerunt et litteras legerunt, et per hoc concordati fuerunt ubi inimici prius fuerant ...',
			'reference' => 'SC 9/3 membrane 4',
			'search'    => 'SC 9/3',
			'answer'    => '... they opened the box and broke the seals and read the letters, and by this they were reconciled where they had previously been enemies ...'
		)
	);

	return $form_data;
}

function practice_00() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => '',
			'reference' => '',
			'search'    => '',
			'answer'    => ''
		),
		array(
			'id'        => 2,
			'latin'     => '',
			'reference' => '',
			'search'    => '',
			'answer'    => ''
		),
		array(
			'id'        => 3,
			'latin'     => '',
			'reference' => '',
			'search'    => '',
			'answer'    => ''
		),
		array(
			'id'        => 4,
			'latin'     => '',
			'reference' => '',
			'search'    => '',
			'answer'    => ''
		),
		array(
			'id'        => 5,
			'latin'     => '',
			'reference' => '',
			'search'    => '',
			'answer'    => ''
		)
	);

	return $form_data;
}
