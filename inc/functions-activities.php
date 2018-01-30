<?php
/**
 * Advanced activity 05
 */

function form_element( $id, $title, $hint, $option_1, $option_2, $option_3, $answer, $reply ) {

	if ( $reply ) {

		if ( $reply[$id] == $answer ) {
			$class = 'correct';
		} else {
			$class = 'wrong';
		}

		$html = '<div class="form-row">
					<p>'.$title.'</p>
					<p class="form-hint">'.$hint.'</p>
					<div class="emphasis-block '.$class.'">
						<p>The answer is</p>
						<p class="answer">'.$answer.'</p>
						<p>You selected</p>
						<p class="reply">'.$reply[$id].'</p>
					</div>
				</div>';
	} else {
		$html = '<div class="form-row">
				<p>'.$title.'</p>
				<p class="form-hint">'.$hint.'</p>
				<div class="radio">
					<input type="radio" id="'.$id.$option_1.'" name="'.$id.'" value="'.$option_1.'">
					<label for="'.$id.$option_1.'">'.$option_1.'</label>
				</div>
				<div class="radio">
					<input type="radio" id="'.$id.$option_2.'" name="'.$id.'" value="'.$option_2.'">
					<label for="'.$id.$option_2.'">'.$option_2.'</label>
				</div>
				<div class="radio">
					<input type="radio" id="'.$id.$option_3.'" name="'.$id.'" value="'.$option_3.'">
					<label for="'.$id.$option_3.'">'.$option_3.'</label>
				</div>
			</div>';
	}

	return $html;
}

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

function advanced_activity( $name, $form_data ) {

	$id_name = strtolower($name);
	$id_name = str_replace(' ', '-', $id_name);

	$reply = array();
	$score = 0;

	if ( isset( $_POST['submit-'.$id_name] ) ) {
		for ( $i=1 ; $i<=10 ; $i++ ) {
			if ( isset( $_POST[$i] ) ) {
				$reply[$i] = $_POST[$i];
			} else {
				$reply[$i] = '-';
			}
		}
	}

	$html = '<form action=""  id="'.$id_name.'" method="POST" class="activity-form">';
	$html .= '<fieldset><legend>'.$name.'</legend>';

	foreach ( $form_data as $data ) {

		$id         = $data['id'];
		$title      = $id . '. ' . $data['title'];
		$hint       = $data['hint'];
		$option_1   = $data['option 1'];
		$option_2   = $data['option 2'];
		$option_3   = $data['option 3'];
		$answer     = $data['answer'];

		if ( $reply ) {
			if ( $reply[$id] == $answer ) {
				$score++;
			}
		}

		$html .= form_element( $id, $title, $hint, $option_1, $option_2, $option_3, $answer, $reply);
	}

	$html .= '<div class="form-row">';

	if ( $reply ) {
		$html .= '<p>Your score is '.$score.' out of 10</p>';
		$html .= '<a href="'.get_permalink().'" class="button" role="button">Try again</a>';
	} else {
		$html .= '<input type="submit" name="submit-'.$id_name.'" id="submit-'.$id_name.'" value="Check answers">';
	}

	$html .= '</div></fieldset></form>';

	return $html;
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

function advanced_practice( $n, $name, $form_data ) {

	$id_name = 'practice-'.$n;

	$reply = array();

	if ( isset( $_POST['submit-'.$id_name] ) ) {
		for ( $i=1 ; $i<=5 ; $i++ ) {
			if ( isset( $_POST[$i] ) ) {
				$reply[$i] = $_POST[$i];
			} else {
				$reply[$i] = '-';
			}
		}
	}

	$html = '<form action=""  id="'.$id_name.'" method="POST" class="activity-form advanced-practice">';
	$html .= '<fieldset><legend>'.$name.'</legend>';

	foreach ( $form_data as $data ) {

		$id         = $data['id'];
		$latin      = $data['latin'];
		$reference  = $data['reference'];
		$search     = $data['search'];
		$answer     = $data['answer'];

		$html .= practice_form_element( $id, $latin, $reference, $search, $answer, $reply );
	}

	$html .= '<div class="form-row">';

	if ( $reply ) {
		$html .= '<a href="'.get_permalink().'" class="button" role="button">Try again</a>';
	} else {
		$html .= '<input type="submit" name="submit-'.$id_name.'" id="submit-'.$id_name.'" value="Check answers">';
	}

	$html .= '</div></fieldset></form>';

	return $html;
}

function practice_form_element( $id, $latin, $reference, $search, $answer, $reply ) {

	if ( $reply ) {

		$html = '<div class="form-row">
					<p>Sentence: '.$id.'</p>
					<p for="sentence-'.$id.'" class="latin"><em>"'.$latin.'"</em></p>
					<div class="emphasis-block">
						<p>Your translation is</p>
						<p class="reply">"'.$reply[$id].'"</p>
					</div>
					<div class="emphasis-block">
						<p>Correct translation is</p>
						<p class="answer">"'.$answer.'"</p>
					</div>
				</div>';

	} else {
		$html = '<div class="form-row">
					<p>Sentence: '.$id.'</p>
					<label for="sentence-'.$id.'" class="latin"><em>"'.$latin.'"</em></label>
					<p class="form-hint">Catalogue reference: <a href="'.$search.'" target="_blank">'.$reference.'</a></p>
					<p>Type your translation in the text box below:</p>
					<textarea id="sentence-'.$id.'" name="'.$id.'"></textarea>
				</div>';
	}

	return $html;
}