<?php
/**
 * Plugin Name:       Hello Quixote
 * Plugin URI:        https://github.com/ruscoe/hello-quixote
 * Description:       Displays quotes from Don Quixote in the admin footer.
 * Version:           1.0.0
 * Requires at least: 1.2.0
 * Requires PHP:      7.4
 * Author:            Dan Ruscoe
 * Author URI:        https://ruscoe.org
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hello-quixote
 *
 * @package hello-quixote
 */

/**
 * Gets a random quote.
 * 
 * @return string
 */
function hello_quixote_get_quote() {

    $quotes = [
        'By these words of his the travellers were able to satisfy themselves of Don Quixote\'s being out of his senses.',
        'He hit upon the strangest notion that ever madman in this world hit upon, that he should make a knight-errant of himself.',
        'With little sleep and much reading his brains got so dry that he lost his wits.',
        'It so possessed his mind that the whole fabric of invention and fancy he read of was true.',
        'He had been blanketed by beings of flesh and blood, and not by visionary and imaginary phantoms, as his master believed and protested.',
        '"It is impossible for good or evil to last for ever; and hence it follows that the evil having lasted long, the good must be now nigh at hand."',
        '"Fortune is arranging matters for us better than we could have shaped our desires ourselves."',
        'He gave the spur to his steed, heedless of the cries warning him that most certainly they were windmills and not giants.',
        'He remained all the evening with his helmet on, the drollest and oddest figure that can be imagined.',
        '"I mean, when the opportunity offers, to have a very rueful countenance painted on my shield."',
    ];

    $index = rand( 0, ( count( $quotes ) -1 ) );

    return $quotes[$index];
}

/**
 * Prints a random quote.
 */
function hello_quixote_print_quote() {

    $quote = hello_quixote_get_quote();
    printf( '<p style="bottom: 20px; right: 20px; position: absolute; text-align: right; width: 100%%">%s</p>', $quote );
}

add_action( 'admin_footer', 'hello_quixote_print_quote' );
