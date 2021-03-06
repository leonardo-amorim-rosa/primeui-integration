<?php require_once "../layout/master-page-header.php" ?>

	<br />
	
	<div id="default" style="margin-bottom:20px" title="Default">
	    The story begins as Don Vito Corleone, the head of a New York Mafia family, oversees his daughter's wedding. 
	    His beloved son Michael has just come home from the war, but does not intend to become part of his father's business. 
	    Through Michael's life the nature of the family business becomes clear. The business of the family is just like the head of the family, 
	    kind and benevolent to those who give respect, 
	    but given to ruthless violence whenever anything stands against the good of the family.
	</div>
	 
	<div id="options" style="margin-bottom:20px" title="Toggle and Close">
	    The story begins as Don Vito Corleone, the head of a New York Mafia family, oversees his daughter's wedding. 
	    His beloved son Michael has just come home from the war, but does not intend to become part of his father's business. 
	    Through Michael's life the nature of the family business becomes clear. The business of the family is just like the head of the family, 
	    kind and benevolent to those who give respect, 
	    but given to ruthless violence whenever anything stands against the good of the family.
	</div>

	<script type="text/javascript">
	
		$(function() {
		    console.log( "ready!" );

			$('#default').puipanel();

			$('#options').puipanel({
				toggleable: true,
				closable: true
			});
		});
		
	</script>

<?php require_once "../layout/master-page-footer.php" ?>    