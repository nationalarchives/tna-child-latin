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

function advanced_practice( $n, $name, $form_data ) {

	$id_name = 'practice-'.$n;

	if ( isset( $_POST['submit-'.$id_name] ) ) {
		if ( $_POST['status'] == 'question' ) {
			$id  = $_POST['sentence'];
			$n   = $id-1;
			if ( isset( $_POST[$id] ) ) {
				if ( $_POST[$id] == '' ) {
					$reply = '-';
				} else {
					$reply = $_POST[$id];
				}
			} else {
				$reply = '-';
			}
			$score = $_POST['score'];
			similar_text($reply, $form_data[$n]['answer'], $percent);
			if ( $percent > 60 ) {
				$score++;
				$class = 'correct';
			} else {
				$class = '';
			}
		} else {
			$reply = '';
			$score = $_POST['score'];
			$n     = $_POST['sentence'];
			$class = '';
		}
	} else {
		$reply = '';
		$score = 0;
		$n = 0;
		$class = '';
	}

	$id         = $form_data[$n]['id'];
	$latin      = $form_data[$n]['latin'];
	$reference  = $form_data[$n]['reference'];
	$search     = $form_data[$n]['search'];
	$answer     = $form_data[$n]['answer'];

	$html = '<form action=""  id="'.$id_name.'" method="POST" class="activity-form advanced-practice">';
	$html .= '<fieldset><legend>'.$name.'</legend>';

	$html .= practice_form_element( $id, $latin, $reference, $search, $answer, $reply, $score, $class );


	$html .= '<div class="form-row">';

	if ( $reply ) {
		if ( $id == 5 ) {
			$html .= '<div class="emphasis-block"><p>Results</p><p><strong>Your score is '.$score.' out of 5</strong></p></div>';
			$html .= '<a href="'.get_permalink().'" class="button" role="button">Try again</a>';
		} else {
			$html .= '<input type="submit" name="submit-'.$id_name.'" id="submit-'.$id_name.'" value="Next sentence">';
		}
	} else {
		$html .= '<input type="submit" name="submit-'.$id_name.'" id="submit-'.$id_name.'" value="Check your translation">';
	}

	$html .= '</div></fieldset></form>';

	return $html;
}

function practice_form_element( $id, $latin, $reference, $search, $answer, $reply, $score, $class ) {

	if ( $reply ) {

		$html = '<div class="form-row">
					<p>Sentence: '.$id.'</p>
					<p for="sentence-'.$id.'" class="latin"><em>"'.$latin.'"</em></p>
					<div class="emphasis-block '.$class.'">
						<p>Your translation is</p>
						<p class="reply">"'.$reply.'"</p>
					</div>
					<div class="emphasis-block correct">
						<p>Correct translation is</p>
						<p class="answer">"'.$answer.'"</p>
					</div>
					<input type="hidden" name="status" value="answer">
					<input type="hidden" name="sentence" value="'.$id.'">
					<input type="hidden" name="score" value="'.$score.'">
				</div>';

	} else {
		$html = '<div class="form-row">
					<p>Sentence: '.$id.'</p>
					<label for="sentence-'.$id.'" class="latin"><em>"'.$latin.'"</em></label>
					<p class="form-hint">Catalogue reference: <a href="http://discovery.nationalarchives.gov.uk/results/r?_q='.$search.'" target="_blank">'.$reference.'</a></p>
					<p>Type your translation in the text box below:</p>
					<textarea id="sentence-'.$id.'" name="'.$id.'"></textarea>
					<input type="hidden" name="status" value="question">
					<input type="hidden" name="sentence" value="'.$id.'">
					<input type="hidden" name="score" value="'.$score.'">
				</div>';
	}

	return $html;
}