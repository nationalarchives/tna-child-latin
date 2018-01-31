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

function practice_03() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => '... remanebit sive remanebunt et continuabit sive continuabunt in prisona ...',
			'reference' => 'ASSI 35/25/7 no 38',
			'search'    => 'ASSI 35/25/7',
			'answer'    => '... he will remain or they will remain and he will continue or they will continue in prison ...'
		),
		array(
			'id'        => 2,
			'latin'     => 'Et eciam prefatus Thomas Powell et heredes sui predicta premissa ... warrantizabunt et imperpetuum per presentes defendent ... imperpetuum de cetero acquietabunt exonerabunt et indempnes conservabunt ...',
			'reference' => 'C 54/2222',
			'search'    => 'C 54/2222',
			'answer'    => 'And also the aforesaid Thomas Powell and his heirs will warrant and will defend forever by these presents (i.e. documents) the aforesaid premises ... they will acquit, discharge and keep them immune from injury forever henceforth ...'
		),
		array(
			'id'        => 3,
			'latin'     => 'Et ego Ada et heredes mei tenebimus et warantizabimus hanc cartam presentem predicto Thome et heredibus suis in perpetuum ...',
			'reference' => 'E 210/8782',
			'search'    => 'E 210/8782',
			'answer'    => 'And I, Adam, and my heirs will hold and warrant this present charter to the aforesaid Thomas and his heirs forever ...'
		),
		array(
			'id'        => 4,
			'latin'     => 'Ita quod nec nos Willelmus episcopus antedictus nec successores nostri aliquam calumpniam servitutis seu villenagii in prefatam Margaretam ... habere vel vendicare poterimus ...',
			'reference' => 'E 42/284',
			'search'    => 'E 42/284',
			'answer'    => 'So that neither we, William, the aforesaid bishop, or our successors, will be able to have or claim any charge of servitude or villeinage towards the aforesaid Margaret ...'
		),
		array(
			'id'        => 5,
			'latin'     => 'Et Robertus presens fuit et concessit quod citra festum sancti Michaelis veniet apud Norwic\' et quod constabularius suus computabit cum eis ...',
			'reference' => 'KB 26/125 membrane 4',
			'search'    => 'KB 26/125',
			'answer'    => 'And Robert was present and granted that before the festival of St Michael he will come to Norwich and that his constable will account with them ...'
		)
	);

	return $form_data;
}

function practice_04() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => 'Omnibus ad quos presens scriptum pervenerit Robertus de Coudrey salutem.',
			'reference' => 'DL 25/2369',
			'search'    => 'DL 25/2369',
			'answer'    => 'To all to whom the present writing will have come, Robert de Coudrey [sends] greetings.'
		),
		array(
			'id'        => 2,
			'latin'     => '... obligo me et heredes meos et omnem terram quam de predicto comite teneo ad quoscumque manus predicta terra devenerit \'cohercioni et districcioni\'* predicti comitis et heredum suorum donec eis de predictis duabus marcis annui redditus plenarie fuerit satisfactum ... (* This is an unusual use of the dative, which should be translated: \'as a result of\'.)',
			'reference' => 'DL 25/2369',
			'search'    => 'DL 25/2369',
			'answer'    => '... I bind myself and my heirs and all the land, which I hold of the aforesaid earl, to whosesoever hands the aforesaid land will have gone to, as a result of coercion and distraint of the aforesaid earl and his heirs, until satisfaction will have been made to them fully concerning the aforesaid two marks of annual rent ...'
		),
		array(
			'id'        => 3,
			'latin'     => 'Et quoad legaciones predictas factas prefatis Willelmo Johanni Laurencio et Ricardo filiis meis supranominatis volo quod omnes denarii ... cum omnimodis proficuis et exitibus provenientibus de terris et tenementis superius recitatis remaneant in custodia et manibus executricis mee quousque predicti filii mei pervenerint ad etatem xx<sup>ti</sup> annorum',
			'reference' => 'PROB 11/7 (19 Logge)',
			'search'    => 'PROB 11/7',
			'answer'    => 'And as regards the aforesaid legacies made to the aforesaid William, John, Lawrence and Richard, my above-named sons, I will that all the money with profits and issues of every kind coming forth from the lands and tenements recited above, remain in the custody and hands of my executrix until my aforesaid sons will have come to the age of 20 years'
		),
		array(
			'id'        => 4,
			'latin'     => 'Et si eadem Margareta obierit antequam ad legitimam etatem dicte Margarete filie sue pervenerit extunc lego ...',
			'reference' => 'PROB 11/1 (8 Rous)',
			'search'    => 'PROB 11/1',
			'answer'    => 'And if the same Margaret dies [literally \'will have died\'] before she will have reached the lawful age of the said Margaret my daughter, then I bequeath ...'
		),
		array(
			'id'        => 5,
			'latin'     => 'Item quod si ... dictus Anthonius Marshe consignaverit predictam quantitatem cere ... consignacio sic facta ... fuerit fraudulenta.',
			'reference' => 'HCA 24/68 number 24',
			'search'    => 'HCA 24/68',
			'answer'    => 'Likewise, that if the said Anthony Marshe consigned [literally \'will have consigned\'] the aforesaid quantity of wax, the consignment thus made will have been fraudulent.'
		)
	);

	return $form_data;
}

function practice_05() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => '... tradunt concedunt vendunt barganizant et confirmant prefatis Willelmo Price heredibus et assignatis suis imperpetuum totum illum magnum messuagium sive tenementum ac totum illum gardinum eidem adiacentem ...',
			'reference' => 'C 54/2222',
			'search'    => 'C 54/2222',
			'answer'    => 'They hand over, grant, sell, bargain and confirm to the aforesaid William Price, his heirs and assigns forever all that great messuage or tenement and all that garden adjacent to the same ...'
		),
		array(
			'id'        => 2,
			'latin'     => 'Et ulterius juratores predicti dicunt super sacramentum suum predictum quod predictus Johannes Collyns defunctus tempore mortis sue nulla alia sive plura messuagia terras tenementa seu hereditamenta habuit sive tenuit ...',
			'reference' => 'C 142/773/169',
			'search'    => 'C 142/773/169',
			'answer'    => 'And furthermore the aforesaid jurors say upon their aforesaid oath that the aforesaid John Collyns, deceased, at the time of his death had or held no other or more messuages, lands, tenements or hereditaments ...'
		),
		array(
			'id'        => 3,
			'latin'     => 'Et pro hac recognicione remissione quietaclamacione warantia fine et concordia iidem Willelmus et Rogerus dederunt predictis Dorothee Ricardo et Marie et Petro et Katerine sexaginta libras sterlingorum.',
			'reference' => 'CP 25/2/389/11JasIHil',
			'search'    => 'CP 25/2/389/11JasIHil',
			'answer'    => 'And for this acknowledgment, remission, quitclaim, warranty, fine and agreement the same William and Roger have given to the aforesaid Dorothy, Richard and Mary and Peter and Katherine sixty pounds of sterling.'
		),
		array(
			'id'        => 4,
			'latin'     => 'In cuius rei testimonium huic inquisicioni predicti juratores sigilla sua apposuerunt',
			'reference' => 'C 143/198/2',
			'search'    => 'C 143/198/2',
			'answer'    => 'In testimony of which matter the aforesaid jurors have affixed their seals to this inquisition'
		),
		array(
			'id'        => 5,
			'latin'     => 'Residuum vero bonorum meorum non legatorum do et lego Emmote uxori mee et ipsam facio meam executricem ut ipsa ea \'disponat\'* pro salute anime mee ... (*ut ... disponat so that she may dispose of)',
			'reference' => 'PROB 11/7 (19 Logge)',
			'search'    => 'PROB 11/7',
			'answer'    => 'Indeed, the residue of my goods not bequeathed I give and bequeath to Emmota, my wife, and I make her my executrix so that she may dispose of them for the salvation of my soul ...'
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
