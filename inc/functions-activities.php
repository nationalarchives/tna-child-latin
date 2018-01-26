<?php
/**
 * Advanced activity 05
 */

function form_element( $id, $title, $hint, $option_1, $option_2, $option_3, $answer) {

	$html = '<div class="form-row">
				<p>'.$title.'</p>
				<p class="form-hint">'.$hint.'</p>
				<div class="radio">
					<input type="radio" id="'.$id.$option_1.'" name="radio" value="'.$option_1.'">
					<label for="'.$id.$option_1.'">'.$option_1.'</label>
				</div>
				<div class="radio">
					<input type="radio" id="'.$id.$option_2.'" name="radio" value="'.$option_2.'">
					<label for="'.$id.$option_2.'">'.$option_2.'</label>
				</div>
				<div class="radio">
					<input type="radio" id="'.$id.$option_3.'" name="radio" value="'.$option_3.'">
					<label for="'.$id.$option_3.'">'.$option_3.'</label>
				</div>
				<input type="hidden" name="answer" value="'.$answer.'">
			</div>';

	return $html;
}

function activity_05() {

	$form_data = array(
		array(
			'id'        => 1,
			'title'     => '[ _____ ] presenti carta',
			'hint'      => 'English: by this present',
			'option 1'  => 'hoc',
			'option 2'  => 'hac',
			'option 3'  => 'illo',
			'answer'    => 'hac'
		),
		array(
			'id'        => 2,
			'title'     => '[ _____ ] est finalis concordia',
			'hint'      => 'English: this is the final concord',
			'option 1'  => 'hic',
			'option 2'  => 'hec',
			'option 3'  => 'hoc',
			'answer'    => 'hec'
		),
		array(
			'id'        => 3,
			'title'     => 'Et preterea [ _____ ] Robertus et Elizabetha dant',
			'hint'      => 'English: and moreover the same Robert and Elizabeth give',
			'option 1'  => 'iisdem',
			'option 2'  => 'iidem',
			'option 3'  => 'eadem',
			'answer'    => 'iidem'
		),
		array(
			'id'        => 4,
			'title'     => '[ _____ ] jus habuerunt',
			'hint'      => 'English: they had no right',
			'option 1'  => 'ullum',
			'option 2'  => 'nullus',
			'option 3'  => 'nullum',
			'answer'    => 'nullum'
		),
		array(
			'id'        => 5,
			'title'     => '[ _____ ] terram non tenent',
			'hint'      => 'English: they do not hold any land',
			'option 1'  => 'nullam',
			'option 2'  => 'ullum',
			'option 3'  => 'ullam',
			'answer'    => 'ullam'
		),
		array(
			'id'        => 6,
			'title'     => 'cum multus [ _____ ]',
			'hint'      => 'English: with many others',
			'option 1'  => 'aliis',
			'option 2'  => 'alius',
			'option 3'  => 'alios',
			'answer'    => 'aliis'
		),
		array(
			'id'        => 7,
			'title'     => 'cum [ _____ ] pertinenciis',
			'hint'      => 'English: with its own appurtenances',
			'option 1'  => 'eius',
			'option 2'  => 'suis',
			'option 3'  => 'suo',
			'answer'    => 'suis'
		),
		array(
			'id'        => 8,
			'title'     => 'tenere de [ _____ ] in capite',
			'hint'      => 'English: to hold of us in chief',
			'option 1'  => 'vobis',
			'option 2'  => 'nobis',
			'option 3'  => 'nos',
			'answer'    => 'nobis'
		),
		array(
			'id'        => 9,
			'title'     => 'reddendo annuatim [ _____ ]',
			'hint'      => 'English: paying annually to me',
			'option 1'  => 'mihi',
			'option 2'  => 'mei',
			'option 3'  => 'me',
			'answer'    => 'mihi'
		),
		array(
			'id'        => 10,
			'title'     => '[ _____ ] sigilla apposuimus',
			'hint'      => 'English: we have affixed our seals',
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

	$html = '<form action=""  id="'.$id_name.'" method="POST" ><fieldset><legend>'.$name.'</legend>';

	foreach ( $form_data as $data ) {

		$id         = $data['id'];
		$title      = $id . '. ' . $data['title'];
		$hint       = $data['hint'];
		$option_1   = $data['option 1'];
		$option_2   = $data['option 2'];
		$option_3   = $data['option 3'];
		$answer     = $data['answer'];

		$html .= form_element( $id, $title, $hint, $option_1, $option_2, $option_3, $answer);
	}

	$html .= '<div class="form-row"><input type="submit" name="submit-'.$id_name.'" id="submit-'.$id_name.'" value="Check answers"></div></fieldset></form>';

	return $html;
}