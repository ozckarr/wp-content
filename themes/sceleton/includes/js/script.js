/**
 * Map jQuery to $
 */
(function( $ ) {
	'use strict';

	/**
	 * Functions go here
	 */


	/**
	 * Runs when window is ready.
	 */
	$(function() {



		$('.bingo-box').click(function(){
			var selectedBingoBox = $(this).attr('class');
			selectedBingoBox = "." + selectedBingoBox.substring(10);
			var selectedBingoBoxNr = selectedBingoBox.substring(11); 
			// Selects a Bingo Box
			if(!selectedBingoBox.includes("bingo-box-selected")){
				//clean up
				$(".bingo-square-content").css("display", "none");
				$(".bingo-box").removeClass("bingo-box-selected");		

				$(selectedBingoBox).addClass("bingo-box-selected");
				$(selectedBingoBox + " .bingo-selected-overlay").css("display", "block");
				$(".bingo-square-content.bingo-square-content-" + selectedBingoBoxNr).css("display", "flex");
				$(".bingo-square-content-" + selectedBingoBoxNr + " .bingo-square-content-box-container").css("display", "block");
			} else {
				// If a Bingo Box is already selected when clicked it becomes checked

			}
		});
	});

})( jQuery );

