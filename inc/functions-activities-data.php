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
			'title'     => 'cum multis [ _____ ]',
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

function practice_06() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => 'Et ulterius juratores predicti super sacramentum suum predictum dicunt quod predictum messuagium cum pertinenciis et cetera premissa cum suis pertinenciis superius mencionata tenentur et tempore mortis predicti Johannis Collyns defuncti tenebantur ...',
			'reference' => 'C 142/773/169',
			'search'    => 'C 142/773/169',
			'answer'    => 'And furthermore the aforesaid jurors say upon their aforesaid oath that the aforesaid messuage with appurtenances and the other premises with their appurtenances, mentioned above, are held and at the time of the death of the aforesaid John Collyns, deceased, were being held ...'
		),
		array(
			'id'        => 2,
			'latin'     => 'Dies datus est Rannulfo Briton per attornatum suum versus dominum regem ...',
			'reference' => 'KB 26/125 membrane 2',
			'search'    => 'KB 26/125',
			'answer'    => 'A day was given to Rannulf Britoni by his attorney against the lord king ...'
		),
		array(
			'id'        => 3,
			'latin'     => 'Sciant presentes et futuri quod ego Ada de la More et heredes mei tenemur solvere annuatim decem solidos sterlingorum Thome de Englefeld et heredibus suis ...',
			'reference' => 'E 210/8782',
			'search'    => 'E 210/8782',
			'answer'    => 'Know those present and future that I, Adam de la More, and my heirs are held to pay annually ten shillings of sterling to Thomas de Englefeld and his heirs ...'
		),
		array(
			'id'        => 4,
			'latin'     => 'Cui commissa fuit administratio omnium et singulorum bonorum jurium et creditorum dicti defuncti ...',
			'reference' => 'Will of Thomas Pike: PROB 11/593 quire 196 folio 102',
			'search'    => 'PROB 11/593',
			'answer'    => 'To whom the administration of all and singular the goods, rights and credits of the said deceased was committed ...'
		),
		array(
			'id'        => 5,
			'latin'     => 'Item quod dicta navis appellata the St Anthonie tempore capture eiusdem predicte fuit et erat onerata cum centum septuaginta et duabus cistis saccari',
			'reference' => 'HCA 24/68 document number 51',
			'search'    => 'HCA 24/68',
			'answer'    => 'Likewise, that the said ship called the St Anthonie at the time of the aforesaid capture of the same was and had been loaded with 172 boxes of sugar'
		)
	);

	return $form_data;
}

function practice_07() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => '... licencia nostra super hiis non optenta ...',
			'reference' => 'C 143/198/1',
			'search'    => 'C 143/198/1',
			'answer'    => '... our licence concerning these things not having been obtained ...'
		),
		array(
			'id'        => 2,
			'latin'     => 'Hec indentura facta septimo die Novembris ...',
			'reference' => 'C 54/2222',
			'search'    => 'C 54/2222',
			'answer'    => 'This indenture having been made on the seventh day of November ...'
		),
		array(
			'id'        => 3,
			'latin'     => '... nos pietate moti de gratia nostra speciali ... pardonavimus',
			'reference' => 'C 66/1421 folio 25',
			'search'    => 'C 66/1421',
			'answer'    => '... we, having been moved by piety, of our special grace, have pardoned ...'
		),
		array(
			'id'        => 4,
			'latin'     => 'Item quod predictus Petrus Gerrard dum vixit mentis compos et in sua sana memoria existens testamentum suum suam in se continens ultimam voluntatem fecit ...',
			'reference' => 'HCA 24/68',
			'search'    => 'HCA 24/68',
			'answer'    => 'Also, that the aforesaid Peter Gerrard, while he lived, being sound of mind and in his sane memory, made his testament, containing in itself his last will ...'
		),
		array(
			'id'        => 5,
			'latin'     => 'Universis sancte matris ecclesie filiis presentes litteras visuris vel audituris frater Robertus permissione divina prior ecclesie cathedralis sancti Swithini Wynton\' et eiusdem loci conventus salutem in domino sempiternam ...',
			'reference' => 'E 42/284',
			'search'    => 'E 42/284',
			'answer'    => 'To all sons of the holy mother church who are about to see or hear the present letters, brother Robert, by divine permission prior of the cathedral church of St Swithin, Winchester, and the convent of the same place, eternal greetings in the lord ...'
		)
	);

	return $form_data;
}

function practice_08() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => '... prout in statuto predicto plenius continetur ...',
			'reference' => 'ASSI 35/25/7',
			'search'    => 'ASSI 35/25/7',
			'answer'    => '... just as is contained more fully in the aforesaid statute ...'
		),
		array(
			'id'        => 2,
			'latin'     => 'Item lego pro mortuario meo meum optimum animal',
			'reference' => 'PROB 11/7 (19 Logg)',
			'search'    => 'PROB 11/7',
			'answer'    => 'Likewise I bequeath my best animal for my mortuary.'
		),
		array(
			'id'        => 3,
			'latin'     => 'Visus frankiplegii cum curia excellentissimi principis domini nostri Henrici octavi dei gratia Anglie Francie et Hibernie Regis fidei defensoris ...',
			'reference' => 'SC 2/195/28',
			'search'    => 'SC 2/195/28',
			'answer'    => 'View of frankpledge with the court of our most excellent prince lord Henry VIII, by the grace of God king of England, France and Ireland, defender of the faith ...'
		),
		array(
			'id'        => 4,
			'latin'     => '... dicit quod cum eis sepissime iniunctum fuisset ... predicti ballivi recusaverunt facere attachiamentum ...',
			'reference' => 'KB 26/125 membrane 4d',
			'search'    => 'KB 26/125',
			'answer'    => '... he says that, although it had been commanded to them very often, ... the aforesaid bailiffs refused to make the attachment ...'
		),
		array(
			'id'        => 5,
			'latin'     => 'In dei nomine Amen die Iovis in vigilia sancti Georgii martyris anno domini mcccclxxxiiij<sup>to</sup> ego Johannes Elwyn de Wisebech sane mentis et bone memorie existens condo et ordino testamentum meum ac ultimam meam voluntatem ...',
			'reference' => 'PROB 11/7 (22 Logge)',
			'search'    => 'PROB 11/7',
			'answer'    => 'In the name of God, amen, on Thursday on the eve [of the festival] of St George the martyr in the year of the lord 1484, I, John Elwyn of Wisebech, being of sane mind and good memory, make and ordain my testament and my last will ...'
		)
	);

	return $form_data;
}

function practice_09() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => 'Et ita quod idem Johannes Androwes bonam et sufficientem securitatem inveniat ...',
			'reference' => 'C 66/1421 folio 25',
			'search'    => 'C 66/1421',
			'answer'    => 'And so that the same John Androwes may find good and sufficient security ...'
		),
		array(
			'id'        => 2,
			'latin'     => 'Nolentes quod predictus Jacobus vel heredes sui aut prefatus Nicholaus vel heredes sui ratione premissorum per nos heredes vel successores nostros aut per justiciarios escaetores vicecomites ballivos aut alios officiarios seu ministros nostros aut dictorum heredum vel successorum nostrorum quoscumque inde occasionentur molestentur impetantur vexentur in aliquo seu graventur nec eorum aliquis occasionetur molestetur impetatur vexetur in aliquo seu gravetur',
			'reference' => 'C 66/1422 folio 33',
			'search'    => 'C 66/1422',
			'answer'    => 'Not wishing that the aforesaid James or his heirs or the aforesaid Nicholas or his heirs by reason of the foregoing may be accused, molested, impeached, troubled or in any thing harmed by us, our heirs or successors or by our justices, escheators, sheriffs, bailiffs or any other of our officials or ministers or those of our said heirs or successors whomsoever, nor any one of them may be accused, molested, impeached, troubled or in any thing oppressed'
		),
		array(
			'id'        => 3,
			'latin'     => 'Mandamus vobis quod ... diligenter inquiratis si sit ad dampnum vel preiudicium nostrum aut aliorum si concedamus Johanni de Shodeswell quod ipse unum mesuagium viginti et unam acras terre et quinque solidatas redditus cum pertinenciis in Estburn ... retinere possit',
			'reference' => 'C 143/198/1',
			'search'    => 'C 143/198/1',
			'answer'    => 'We command you that ... you diligently inquire whether it might be to our damage or prejudice or to that of others, if we grant to John de Shodeswell that he, himself, can retain one messuage, 21 acres of land and five shillings\' worth of rent with appurtenances in Estburn ...'
		),
		array(
			'id'        => 4,
			'latin'     => '... volo quod omnia bona et denarie summe ipsius decedentis remaneant et distribuantur inter alios filios meos superviventes equaliter ...',
			'reference' => 'PROB 11/7',
			'search'    => 'PROB 11/7',
			'answer'    => '... I will that all the goods and monetary sums of the deceased man, himself, may remain and be distributed among my other surviving sons equally ...'
		),
		array(
			'id'        => 5,
			'latin'     => 'Sciatis quod cum celebris memorie dominus Henricus quondam Rex Anglie avus noster per cartam suam concessisset Roberto de Rogate quod ipse et heredes sui imperpetuum haberent unam feriam apud manerium suum de Rogate',
			'reference' => 'C 53/113',
			'search'    => 'C 53/113',
			'answer'    => 'Know you that since lord Henry of renowned memory, formerly king of England, our grandfather, by his charter had granted to Robert de Rogate that he, himself, and his heirs might have forever one fair at his manor of Rogate'
		)
	);

	return $form_data;
}

function practice_10() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => 'Et unde predictus Adam per Thomam Holme attornatum suum queritur quod ...',
			'reference' => 'KB 27/555',
			'search'    => 'KB 27/555',
			'answer'    => 'And whereupon the aforesaid Adam by Thomas Holme, his attorney, complains that ...'
		),
		array(
			'id'        => 2,
			'latin'     => 'Hec indentura ... testatur quod ...',
			'reference' => 'C 54/2222',
			'search'    => 'C 54/2222',
			'answer'    => 'This indenture ... witnesses that ...'
		),
		array(
			'id'        => 3,
			'latin'     => '... et ipsi et eorum predecessores dictis libertatibus hactenus rationabiliter usi sunt et gavisi ...',
			'reference' => 'C 53/113',
			'search'    => 'C 53/113',
			'answer'    => '... and they, themselves, and their predecessors have used and enjoyed the said liberties up to now in due form ...'
		),
		array(
			'id'        => 4,
			'latin'     => 'Dicit eciam quod ... idem Hugo habuit breve domini regis cuidam Willelmo de Sancto Claro, tunc escaetori Regis, ... quod permitteret ipsum ingredi predicta tenementa ...',
			'reference' => 'SC 9/6 membrane 1',
			'search'    => 'SC 9/6',
			'answer'    => 'He also says that ... the same Hugh had a writ of the lord king [addressed] to a certain William de St. Clair, then the king\'s escheator, that he should allow him to enter the aforesaid tenements ...'
		),
		array(
			'id'        => 5,
			'latin'     => 'Walterus Queyntered et Seman Fale pro creditoribus Roberti de Briwes de Norwic\' venerunt et conquesti sunt quod predictus Robertus debet eis xxxix libras de esculentis et poculentis ...',
			'reference' => 'KB 26/125 membrane 4',
			'search'    => 'KB 26/125',
			'answer'    => 'Walter Queyntered and Seman Fale on behalf of the creditors of Robert de Briwes of Norwich came and complained that Robert owes to them 39 pounds of food and drink ...'
		)
	);

	return $form_data;
}

function practice_11() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => 'Habendum tenendum et gaudendum predictum magnum messuagium sive tenementum ...',
			'reference' => 'C 54/2222',
			'search'    => 'C 54/2222',
			'answer'    => 'To have and hold and enjoy the aforesaid great messuage or tenement ...'
		),
		array(
			'id'        => 2,
			'latin'     => 'Johannes Wandestre capellanus attachiatus fuit ad respondendum Ade Redgrave de placito ...',
			'reference' => 'KB 27/555',
			'search'    => 'KB 27/555',
			'answer'    => 'John Wandestre, chaplain, was attached to answer to Adam Redgrave concerning a plea ...'
		),
		array(
			'id'        => 3,
			'latin'     => 'Inquisicio indentata capta apud Wendover ... ad inquirendum post mortem Johannis Collyns ...',
			'reference' => 'C 142/773/169',
			'search'    => 'C 142/773/169',
			'answer'    => 'Inquisition indented, taken at Wendover ... to inquire after the death of John Collyns ...'
		),
		array(
			'id'        => 4,
			'latin'     => 'Reddendo inde annuatim dicto comiti et heredibus suis duas marcas argenti ad festum sancti Michaelis pro omnibus serviciis consuetudinibus et demandis.',
			'reference' => 'DL 25/2369',
			'search'    => 'DL 25/2369',
			'answer'    => 'Paying thereupon annually to the said earl and his heirs two marks of silver at the festival of St Michael for all services, customs and demands.'
		),
		array(
			'id'        => 5,
			'latin'     => 'Imprimis lego animam meam deo patri omnipotenti beate Marie virgini atque omnibus sanctis eius corpusque meum sepeliendum in capella sancte Marie Magdalene infra ecclesiam de Witney ...',
			'reference' => 'PROB 11/7 (19 Logge)',
			'search'    => 'PROB 11/7',
			'answer'    => 'First of all I bequeath my soul to God the father almighty, the blessed virgin Mary and all his saints and my body to be buried in the chapel of St Mary Magdalene within the church of Witney ...'
		)
	);

	return $form_data;
}

function practice_12() {

	$form_data = array(
		array(
			'id'        => 1,
			'latin'     => 'Scilicet quod predicti Dorothea Ricardus et Maria et Petrus et Katerina recognoverunt predicta tenementa cum pertinenciis esse ius ipsius Willelmi ...',
			'reference' => 'CP 25/2/389/11JASIHIL',
			'search'    => 'CP 25/2/389/11JASIHIL',
			'answer'    => 'Namely that the aforesaid Dorothy, Richard and Mary and Peter and Katherine acknowledged the aforesaid tenements with appurtenances to be the right of William, himself, ...'
		),
		array(
			'id'        => 2,
			'latin'     => 'Et instanter idem Adam petit iudicium et dampna sua sibi in hac parte adiudicari ...',
			'reference' => 'KB 27/555',
			'search'    => 'KB 27/555',
			'answer'    => 'And the same Adam seeks instantly that judgement and his damages are adjudged to him in this regard ...'
		),
		array(
			'id'        => 3,
			'latin'     => 'Item quod anno et mensibus predictis ... dominus Thomas Sherlie senior miles dictam navim the St George et dictus Laurentius Grosse dictam naviculam appellatam the Diana ... prepararunt armarunt et instruxerunt vel sic preparari armari et instrui fecerunt',
			'reference' => 'HCA 24/68 no. 51',
			'search'    => 'HCA 24/68',
			'answer'    => 'Likewise, that in the year and months aforesaid, lord Thomas Sherlie the elder, knight, prepared, armed and equipped or caused to be prepared, armed and equipped the said ship the St George and the said Lawrence Grosse the said small ship called the Diana'
		),
		array(
			'id'        => 4,
			'latin'     => 'Et si contingat dictos Willelmum Johannem Laurencium et Ricardum filios meos predictos seu eorum aliquem obire sive discedere antequam pervenerint ad etatem predictam tunc volo ...',
			'reference' => 'PROB 11/7 (19 Logge)',
			'search'    => 'PROB 11/7',
			'answer'    => 'And if it happens that the said William, John, Lawrence and Richard, my aforesaid sons, or any of them die or decease before they will have reached the aforesaid age, then I will ... '
		),
		array(
			'id'        => 5,
			'latin'     => 'Henricus Conquest juratus presentat omnia esse bene quoad officium suum pertinet ...',
			'reference' => 'SC 2/195/28',
			'search'    => 'SC 2/195/28',
			'answer'    => 'Henry Conquest, having been sworn, presents that all is well as far as pertains to his office ...'
		)
	);

	return $form_data;
}
