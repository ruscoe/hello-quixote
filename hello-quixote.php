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
 * License:           MIT
 * License URI:       https://mit-license.org/
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
        'He had been blanketed by beings of flesh and blood, and not by visionary and imaginary phantoms, as his master believed and protested.'
    ];

    $index = rand(0, ( count( $quotes ) - 1 ) );

    return $quotes[$index];
}

/**
 * Prints a random quote.
 */
function hello_quixote_print_quote() {

    $quote = hello_quixote_get_quote();
    printf( '<p style="bottom: 20px; position: absolute; text-align: center; width: 100%%">%s</p>', $quote );
}

add_action( 'admin_footer', 'hello_quixote_print_quote' );